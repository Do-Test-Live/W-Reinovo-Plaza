<?php
session_start();
require_once("includes/dbConnect.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="TechyDevs" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>TAKUMI - Reinovo Plaza</title>
    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- end per-loader -->


<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="main-header-top bg-dark py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-item">
                        <ul class="list-item list-item-white fs-15">
                            <li class="d-inline-block mr-3"><a href="tel:+18008012718"><i
                                            class="fal fa-phone mr-2 fs-13"></i>+852 54144447</a></li>

                        </ul>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end main-header-top -->
    <div class="main-header bg-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-10">
                    <div class="main-brand-wrap d-flex align-items-center justify-content-between">
                        <a class="side-menu-open icon-element icon-element-xs d-block d-lg-none mr-3" href="#">
                            <i class="fal fa-bars"></i>
                        </a>
                        <a class="main-logo" href="#"><img alt="logo" class="logo" src="images/logo-black.png"></a>
                        <!-- end side-menu-open -->
                    </div><!-- end main-brand-wrap -->
                </div><!-- end col-lg-2-->
                <div class="col-lg-10 col-4">
                    <div class="main-header-content d-flex align-items-center justify-content-end">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="index.html">home <i class="fal"></i></a>
                                </li>
                                <li>
                                    <a href="about.html">about us <i class="fal"></i></a>
                                </li>
                                <li>
                                    <a href="magnet-power.php">Magnet Power <i class="fal"></i></a>
                                </li>
                                <li>
                                    <a href="takumi.php">TAKUMI <i class="fal"></i></a>
                                </li>
                                <li>
                                    <a href="#">Contact us <i class="fal"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- end main-header-action -->
                    </div><!-- end main-header-content -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end main-header -->
    <div class="off-canvas">
        <a class="off-canvas-close icon-element icon-element-xs position-absolute top-0 right-0 mt-3 mr-3" href="#">
            <i class="fal fa-times"></i>
        </a><!-- end off-canvas-close -->
        <ul class="list-item off-canvas-menu">
            <li>
                <a href="index.html">主頁 <i class="fal"></i></a>
            </li>
            <li>
                <a href="about.html">關於我們 <i class="fal"></i></a>
            </li>
            <li>
                <a href="magnet-power.php">磁石樹液貼布 <i class="fal"></i></a>
            </li>
            <li>
                <a href="takumi.php">「匠」有機酵素 <i class="fal"></i></a>
            </li>
            <!--          <li>
                          <a href="pls.html">PLS <i class="fal"></i></a>
                      </li> -->
            <li>
                <a href="#">聯繫我們 <i class="fal"></i></a>
            </li>
        </ul>
    </div><!-- end off-canvas -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->


<nav aria-label="breadcrumb">
    <div class="container py-3">
        <ol class="breadcrumb fs-15">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active">TAKUMI</li>
        </ol>
    </div>
</nav>

<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tab-content" id="myTabContent">
                    <div aria-labelledby="product-gallery-three-tab" class="tab-pane show active" id="product-gallery-three"
                         role="tabpanel">
                        <img alt="full-image" class="w-100 lazy" data-src="images/products/1_3.jpg"
                             src="images/products/1_3.jpg">
                    </div>
                    <div aria-labelledby="product-gallery-one-tab" class="tab-pane" id="product-gallery-one"
                         role="tabpanel">
                        <img alt="full-image" class="w-100 lazy" data-src="images/products/1_1.jpg"
                             src="images/products/1_1.jpg">
                    </div><!-- end tab-pane -->
                    <div aria-labelledby="product-gallery-two-tab" class="tab-pane" id="product-gallery-two"
                         role="tabpanel">
                        <img alt="full-image" class="w-100 lazy" data-src="images/products/1_2.jpg"
                             src="images/products/1_2.jpg">
                    </div>
                    <!-- end tab-pane -->
                </div><!-- end tab-content -->
                <ul class="nav nav-tabs product-gallery-nav  justify-content-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a aria-controls="product-gallery-two" aria-selected="false" class="nav-link active" data-toggle="tab"
                           href="#product-gallery-three" id="product-gallery-three-tab" role="tab">
                            <img alt="small-image" class="lazy" data-src="images/products/1_3.jpg"
                                 src="images/products/1_3.jpg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="product-gallery-one" aria-selected="true" class="nav-link"
                           data-toggle="tab" href="#product-gallery-one" id="product-gallery-one-tab"
                           role="tab">
                            <img alt="small-image" class="lazy" data-src="images/products/1_1.jpg"
                                 src="images/products/1_1.jpg">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-controls="product-gallery-three" aria-selected="false" class="nav-link" data-toggle="tab"
                           href="#product-gallery-two" id="product-gallery-two-tab" role="tab">
                            <img alt="small-image" class="lazy" data-src="images/products/1_2.jpg"
                                 src="images/products/1_2.jpg">
                        </a>
                    </li>

                </ul>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="product-details mt-lg-5 pt-lg-5 mt-0 pt-0">
                    <h3 class="mb-1 fw-semi-bold">產品名：TAKUMI 「匠」有機酵素</h3>
                    <section class="cta-area bg-gray section--padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <img alt="" class="w-100 rounded-6 lazy" data-src="images/products/thumb.PNG"
                                             src="images/products/thumb.PNG">
                                        <div class="video-box position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                            <a class="icon-element hover-y" data-fancybox="preview-video"
                                               href="https://www.youtube.com/watch?v=OJF3Egdzdyc" title="Play Video">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </section><!-- end cta-area -->
                    <p class="mb-3 mt-3">
                        產地：⽇本<br/>
                    </p>
                    <p class="mt-3">
                        內容量：淨含量 170G
                    </p>
                    <p class="mt-3">
                        食⽤⽅式：每次 1 茶匙，每⽇ 1-2 次，每樽約 1-2 ⽉份量。）
                    </p>
                    <img src="images/products/new_takumi.png" class="img-fluid mt-3" style="width: 100%;">
                    <p class="mt-3">
                        產品簡介：
                    </p>
                    <p class="mt-3">
                        ❑ 有機原料 100%<br/>
                        ❑ ⽇本有機 JAS 認證<br/>
                        ❑ 完全無添加<br/>
                        ❑ 非加熱加⼯發酵<br/>
                        ❑ 保留有機食材營養<br/>
                        ❑ 嚴選⽇本酵⺟<br/>
                        ❑ 不使⽤糖類（⽩糖、低聚糖、⼈造甜味劑）
                    </p>
                    <p class="mt-3">
                        ❤️ 促進腸臟蠕動<br/>
                        ❤️ 促進食物消化吸收<br/>
                        ❤️ 增加益菌、減少害菌及有害物質⽣成<br/>
                        ❤️ 健脾消食<br/>
                        ❤️ 減輕胃痛<br/>
                        ❤️ 減輕胃灼熱<br/>
                        ❤️ 減輕胃酸過多<br/>
                        ❤️ 減輕腸胃氣脹<br/>
                        ❤️ 減輕消化不良<br/>
                        ❤️ 減輕腸絞痛<br/>
                        ❤️ 減輕惡⼼<br/>
                        ❤️ 減輕⼝臭<br/>
                        ❤️ 改善排便狀況<br/>
                        ❤️ 減輕偶發性或非持續的腹瀉或便秘<br/>
                    </p>
                    <div class="price-range fs-20 fw-semi-bold mb-3 mt-3">
                        <span class="text-color-1">HKD 3500.00</span>
                    </div>
                    <form action="octopus-payment.php" method="get">
                    <div class="mb-3">
                        <label>電話</label>
                        <input type="tel" name="phone" id="phone" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>地址</label>
                        <input type="text" name="address" id="address" class="form-control" required/>
                    </div>
                        <input type="hidden" value="TAKUMI 「匠」有機酵素" name="product" required/>
                        <input type="hidden" value="takumi" name="page_name" required/>
                    <div class="d-flex align-items-center mb-3 mt-3">
                        <p class="text-black fw-medium mr-2">數量:</p>
                        <div class="quantity-box d-flex align-items-center">
                            <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                            <input class="qtyInput" type="text" name="quantity" id="quantity" value="1" min="1">
                            <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                        </div>
                    </div>
                    <p class="mb-3">
                        購買
                    </p>
                    <div class="d-flex align-items-center mb-3">
                        <button type="button" class="btn btn-primary mr-4" id="payBtn" onclick="buyNow();">信用卡</button>
                        <button type="submit" class="btn btn-primary mr-4">八達通</button>
                    </div>
                    </form>
                </div><!-- end product-details -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
        <div class="product-details-tab-wrap pt-50">
            <div class="tab-content">
                <div aria-labelledby="product-description-tab" class="tab-pane show active" id="product-description"
                     role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mt-5">
                                    <div class="text-center">
                                        <img alt="" class="img-fluid" src="images/product-gallery/2-1.jpg"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-5">
                                    <div class="text-center">
                                        <img alt="" class="img-fluid" src="images/product-gallery/2-2.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end tab-pane -->
            </div><!-- end tab-content -->
        </div>
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->


<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area bg-gray pt-80 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item mb-5">
                    <a href="index.html">
                        <img alt="footer logo" class="footer-logo" src="images/logo-black.png">
                    </a>
                    <ul class="list-item mt-3 mb-4">
                        <li><a href="tel:+85254144447"><i class="fal fa-phone mr-2"></i>+852 54144447</a></li>
                        <li><a href="#"><i class="fal fa-map-marker-alt mr-2"></i>HongKong</a></li>
                    </ul>
                    <div class="social-icons">
                        <a class="icon-element icon-element-xs mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="icon-element icon-element-xs mr-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="icon-element icon-element-xs" href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- end social-icons -->
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9 col-md-12">
                <iframe allowfullscreen=""
                        height="350" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236161.11980849216!2d113.96289110441053!3d22.352968179770752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403fefda2ea2807%3A0x486db43574f494da!2sHong%20Kong!5e0!3m2!1sen!2sbd!4v1685864176898!5m2!1sen!2sbd"
                        style="border:0;"
                        width="100%"></iframe>
            </div>
        </div><!-- end row -->
        <hr class="border-top-gray mt-0 mb-4">
        <div class="copyright-content">
            <p class="copy-desc my-2 fs-15 text-center">
                © Copyright Reinovo Plaza. Powered by <a class="btn-link font-weight-normal" href="#">NGTTECH</a>
            </p>
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section>
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="far fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/rating.js"></script>
<script src="js/main.js"></script>

<!-- Stripe JavaScript library -->
<script src="https://js.stripe.com/v3/"></script>

<script>

    // Set Stripe publishable key to initialize Stripe.js
    const stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

    // Select payment button
    const payBtn = document.querySelector("#payButton");

    // Payment request handler
    function buyNow(){
        let phone=document.getElementById('phone').value;
        let address=document.getElementById('address').value;

        if (phone !== "" && address !=="") {

        document.getElementById('payBtn').innerHTML='<i class="fa fa-spinner fa-spin"></i> '+'請稍等';
        createCheckoutSession().then(function (data) {
            if (data.sessionId) {
                stripe.redirectToCheckout({
                    sessionId: data.sessionId,
                }).then(handleResult);
            } else {
                handleResult(data);
            }
        });
        }else{
            alert('Please fill up address and phone number field.')
        }
    }

    // Create a Checkout Session with the selected product
    const createCheckoutSession = function (stripe) {
        let quantity=document.getElementById('quantity').value;
        let phone=document.getElementById('phone').value;
        let address=document.getElementById('address').value;

        return fetch("payment_init.php?quantity="+quantity+'&price=3500'+'&phone='+phone+'&address='+address, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                createCheckoutSession: 1,
            }),
        }).then(function (result) {
            return result.json();
        });
    };

    // Handle any errors returned from Checkout
    const handleResult = function (result) {
        if (result.error) {
            showMessage(result.error.message);
        }
    };


    // Display message
    function showMessage(messageText) {
        const messageContainer = document.querySelector("#paymentResponse");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function () {
            messageContainer.classList.add("hidden");
            messageText.textContent = "";
        }, 5000);
    }
</script>
</body>

</html>
