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
    <script type="text/javascript">
        window.N2PRO = 1;
        window.N2GSAP = 1;
        window.N2PLATFORM = "wordpress";
        (function () {
            var N = this;
            N.N2_ = N.N2_ || {
                r: [],
                d: []
            }, N.N2R = N.N2R || function () {
                N.N2_.r.push(arguments)
            }, N.N2D = N.N2D || function () {
                N.N2_.d.push(arguments)
            }
        }).call(window);
        if (!window.n2jQuery) {
            window.n2jQuery = {
                ready: function (cb) {
                    console.error('n2jQuery will be deprecated!');
                    N2R(['$'], cb);
                }
            }
        }
        window.nextend = {
            localization: {},
            ready: function (cb) {
                console.error('nextend.ready will be deprecated!');
                N2R('documentReady', function ($) {
                    cb.call(window, $)
                })
            }
        };
        window.N2SSPRO = 1;
        window.N2SS3C = "smartslider3";
        nextend.fontsLoaded = false;
        nextend.fontsLoadedActive = function () {
            nextend.fontsLoaded = true;
        };
        var fontData = {
            google: {
                families: ["Baloo:300,400:latin"]
            },
            active: function () {
                nextend.fontsLoadedActive()
            },
            inactive: function () {
                nextend.fontsLoadedActive()
            }
        };
        if (typeof WebFontConfig !== 'undefined') {
            var _WebFontConfig = WebFontConfig;
            for (var k in WebFontConfig) {
                if (k == 'active') {
                    fontData.active = function () {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.active();
                    }
                } else if (k == 'inactive') {
                    fontData.inactive = function () {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.inactive();
                    }
                } else if (k == 'google') {
                    if (typeof WebFontConfig.google.families !== 'undefined') {
                        for (var i = 0; i < WebFontConfig.google.families.length; i++) {
                            fontData.google.families.push(WebFontConfig.google.families[i]);
                        }
                    }
                } else {
                    fontData[k] = WebFontConfig[k];
                }
            }
        }
        if (typeof WebFont === 'undefined') {
            window.WebFontConfig = fontData;
        } else {
            WebFont.load(fontData);
        }
    </script>
    <script type="text/javascript" src="/assets/plugins/slider/js/n2-j.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slider/js/nextend-gsap.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slider/js/nextend-frontend.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slider/js/smartslider-frontend.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slider/js/smartslider-simple-type-frontend.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/slider/js/nextend-webfontloader.min.js"></script>
    <script type="text/javascript">
        N2R('documentReady', function ($) {

            nextend.fontsDeferred = $.Deferred();
            if (nextend.fontsLoaded) {
                nextend.fontsDeferred.resolve();
            } else {
                nextend.fontsLoadedActive = function () {
                    nextend.fontsLoaded = true;
                    nextend.fontsDeferred.resolve();
                };
                var intercalCounter = 0;
                nextend.fontInterval = setInterval(function () {
                    if (intercalCounter > 3 || document.documentElement.className.indexOf('wf-active') !==
                        -1) {
                        nextend.fontsLoadedActive();
                        clearInterval(nextend.fontInterval);
                    }
                    intercalCounter++;
                }, 1000);
            }
        });
    </script>
<!-- <script src="https://kit.Baloo.com/feab4e393b.js"></script> -->

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
    <section class="gallery main-gallery ptb150 pb85" style="background-color: #a6c982;">
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
                        
						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/2.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/2.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/3.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/3.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/4.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/4.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/5.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/5.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/6.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/6.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/7.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/7.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/8.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/8.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/9.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/9.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/10.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/10.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/11.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/11.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/12.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/12.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/13.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/13.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/14.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/14.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/15.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/15.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/16.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/16.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/17.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/17.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/18.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/18.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/19.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/19.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/20.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/20.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/21.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/21.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/22.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/22.jpg';"></div>
                            </div>
                        </div>

						<div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="/assets/images/showcase/23.jpg" alt="">
                                </div>			
                                <div class="item-info" style="cursor: pointer;" onclick="window.location='/assets/images/showcase/23.jpg';"></div>
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
    <!-- Scripts -->

    <script src="/assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="/assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="/assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="/assets/plugins/muuri-master/muuri.js"></script>
    <script src="/assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="/assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="/assets/js/script.js"></script>

</body>
</html>