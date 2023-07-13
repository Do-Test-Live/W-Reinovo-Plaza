<?php
session_start();
require_once("includes/dbConnect.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track Order - Reinovo Plaza</title>
    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
    <style>
        body {
            margin: 2em;
        }

        thead input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }
    </style>

</head>
<body>
<h1 class="text-center">Transaction Data</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Paid Amount</th>
        <th>Gateway</th>
        <th>Status</th>
        <th>Transaction Number</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query="SELECT * FROM transactions order by id desc";
    $data = $db_handle->runQuery($query);
    $row_count = $db_handle->numRows($query);
    for ($i = 0; $i < $row_count; $i++) {
    ?>
        <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $data[$i]["customer_name"]; ?></td>
            <td><?php echo $data[$i]["customer_email"]; ?></td>
            <td><?php echo $data[$i]["address"]; ?></td>
            <td><?php echo $data[$i]["phone"]; ?></td>
            <td><?php echo $data[$i]["item_name"]; ?></td>
            <td><?php echo $data[$i]["paid_amount"]/$data[$i]["item_price"]; ?></td>
            <td><?php echo $data[$i]["paid_amount"]; ?></td>
            <td><?php echo $data[$i]["gateway"]; ?></td>
            <td><?php echo $data[$i]["payment_status"]; ?></td>
            <td><?php echo $data[$i]["txn_id"]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Paid Amount</th>
        <th>Gateway</th>
        <th>Status</th>
        <th>Transaction Number</th>
    </tr>
    </tfoot>
</table>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
<script>
    $(document).ready(function () {
        //Only needed for the filename of export files.
        //Normally set in the title tag of your page.
        // Create search inputs in footer
        $("#example tfoot th").each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });
        // DataTable initialisation
        var table = $("#example").DataTable({
            dom: '<"dt-buttons"Bf><"clear">lirtp',
            paging: true,
            autoWidth: true,
            buttons: [
                "colvis",
                "copyHtml5",
                "csvHtml5",
                "excelHtml5",
                "print"
            ],
            initComplete: function (settings, json) {
                var footer = $("#example tfoot tr");
                $("#example thead").append(footer);
            }
        });

        // Apply the search
        $("#example thead").on("keyup", "input", function () {
            table.column($(this).parent().index())
                .search(this.value)
                .draw();
        });
    });
</script>

</body>
</html>
