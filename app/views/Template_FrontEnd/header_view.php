<!DOCTYPE html>
<html lang="tr">
    <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo SITE_FRONT_ASSETS_DISTIMG; ?>/favicon.ico">
        <link rel="shortcut icon" href="<?php echo SITE_FRONT_ASSETS_DISTIMG; ?>/favicon.ico" />
        <link rel="stylesheet" href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/style.css">
            <!--<link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_BOOTSTRAPCSS; ?>/bootstrap.min.css" />-->
            <link rel="stylesheet" type="text/css" href="<?php echo SITE_FRONT_ASSETS_FONTAWESOMECSS; ?>/font-awesome.min.css" />
            <link href="<?php echo SITE_FRONT_ASSETS_DISTCSS; ?>/contact-form.css" rel="stylesheet" type="text/css"/>
            
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery-2.1.1.js"></script>
            <!--<script src="<?php echo SITE_FRONT_ASSETS_BOOTSTRAPJS; ?>/bootstrap.min.js"></script>-->
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery-migrate-1.1.1.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.easing.1.3.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/script.js"></script> 
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/superfish.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.equalheights.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.mobilemenu.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/tmStickUp.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/jquery.ui.totop.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/TMForm.js"></script>
            <script src="<?php echo SITE_FRONT_ASSETS_DISTJS; ?>/modal.js"></script>      

            <script>
                $(window).load(function () {
                    $().UItoTop({easingType: 'easeOutQuart'});
                    $('#stuck_container').tmStickUp({});
                });
            </script>
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
                                    <a href="<?php echo SITE_URL; ?>">
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
                                                <li class="current"><a href="<?php echo SITE_URL; ?>">Anasayfa</a></li>
                                                <li><a href="<?php echo SITE_URL . "/Home/cozumler"; ?>">Çözümler</a></li>
                                                <li><a href="<?php echo SITE_URL . "/Home/referanslar"; ?>">Referanslar</a></li>
                                                <li><a href="<?php echo SITE_URL . "/Home/iletisim"; ?>">İletişim</a></li>

                                            </ul>
                                        </nav>
                                        <div class="clear"></div>
                                    </div>       
                                    <div class="clear"></div>  
                                </div>
                            </div> 
                        </div> 
                    </section>


