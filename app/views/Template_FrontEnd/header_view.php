<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo SITE_FRONT_ASSETS_DISTIMG; ?>/favicon.ico">
        <link rel="shortcut icon" href="<?php echo SITE_FRONT_ASSETS_DISTIMG; ?>/favicon.ico" />
        <link rel="stylesheet" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/style.css">
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery-migrate-1.1.1.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.easing.1.3.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/script.js"></script> 
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/superfish.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.equalheights.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.mobilemenu.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/tmStickUp.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.ui.totop.js"></script>
            
            
            <script>
                $(window).load(function () {
                    $().UItoTop({easingType: 'easeOutQuart'});
                    $('#stuck_container').tmStickUp({});
                });
            </script>
            <!--[if lt IE 8]>
             <div style=' clear: both; text-align:center; position: relative;'>
               <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
               </a>
            </div>
            <![endif]-->
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <link rel="stylesheet" media="screen" href="css/ie.css">
            <![endif]-->
            </head>
            <body class="page1" id="top">
                <!--==============================
                              header
                =================================-->
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="grid_12 rel">
                                <h1>
                                    <a href="index.html">
                                        <img src="<?php echo SITE_FRONT_ASSETS_DISTIMG; ?>/logo.png" alt="Logo alt">
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <section id="stuck_container">
                        <!--==============================
                                    Stuck menu
                        =================================-->
                        <div class="container">
                            <div class="row">
                                <div class="grid_12 ">
                                    <div class="navigation ">
                                        <nav>
                                            <ul class="sf-menu">
                                                <li class="current"><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="contacts.html">Contacts</a></li>
                                            </ul>
                                        </nav>
                                        <div class="clear"></div>
                                    </div>       
                                    <div class="clear"></div>  
                                </div>
                            </div> 
                        </div> 
                    </section>
