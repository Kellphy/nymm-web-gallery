<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kellphy</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/icon.ico" type="image/x-icon">


    <!-- Bootstrap-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/style2.css" />
    <!-- Responsive Style -->
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <!-- Sliders -->
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slick-1.8.0/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slider/css/normalize.min.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slider/css/smartslider.min.css" media="screen, print" />
    <style type="text/css">
        .n2-ss-spinner-simple-white-container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -20px;
            background: #fff;
            width: 20px;
            height: 20px;
            padding: 10px;
            border-radius: 50%;
            z-index: 1000;
        }

        .n2-ss-spinner-simple-white {
            outline: 1px solid RGBA(0, 0, 0, 0);
            width: 100%;
            height: 100%;
        }

        .n2-ss-spinner-simple-white:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -11px;
            margin-left: -11px;
        }

        .n2-ss-spinner-simple-white:not(:required):before {
            content: '';
            border-radius: 50%;
            border-top: 2px solid #333;
            border-right: 2px solid transparent;
            animation: n2SimpleWhite .6s linear infinite;
            -webkit-animation: n2SimpleWhite .6s linear infinite;
        }

        @keyframes n2SimpleWhite {
            to {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes n2SimpleWhite {
            to {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>

<!-- <script src="https://kit.Baloo.com/feab4e393b.js"></script> -->

<style>
body, html {
  height: 100%;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1366px) {
  .parallax {
    background-attachment: scroll;
  }
}
</style>

</head>

<body>
    <!-- PRELOADER START -->
    <div class="loader-wrapper">
        <div class='cssload-loader '>
            <div class='cssload-inner cssload-one'></div>
            <div class='cssload-inner cssload-two'></div>
            <div class='cssload-inner cssload-three'></div>
        </div>
    </div>
    <!-- PRELOADER END -->
    <!-- HEADER START -->

		<?php  include($_SERVER['DOCUMENT_ROOT']."/assets/header.php"); ?>

    <!-- HEADER END -->

    <!-- GALLERY SECTION START -->
    <section class="gallery main-gallery ptb150 pb85" style="background-color: #202020;">
        <div class="container">
            <div class="row">
                <div class="grid-wrapper mt70">
                    <div class="item_container relative mt40">

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/1.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/1.jpg';"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY SECTION END -->
    <!-- FOOTER START -->
		<?php  include($_SERVER['DOCUMENT_ROOT']."/assets/footer.php"); ?>
    <!-- FOOTER END -->
    <!-- Scripts 

    
    

    -->


    <script src="/assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="/assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="/assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="/assets/plugins/muuri-master/muuri.js"></script>
    <script src="/assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="/assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="/assets/js/script.js"></script>

</body>
</html>