<?php
require_once("../inc/init.php");
if (isset($_POST) && !empty($_POST)) {
	$pdo->query("INSERT INTO clients(`first_name`,`last_name`,`address`,`postal_code`,`city`,`telephone`,`type`,`siret`,`birth_date`,`birth_place`,`gender`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[type]','$_POST[siret]','$_POST[birth_date]','$_POST[birth_place]','$_POST[gender]')");
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="SH Auto - Achats et ventes de véhicules d'occasion" />
        <meta name="author" content="potenzaglobalsolutions.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>SH Auto - Achats et ventes de véhicules d'occasion</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../images/favicon.ico" />

        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

        <!-- flaticon -->
        <link rel="stylesheet" type="text/css" href="../css/flaticon.css" />

        <!-- mega menu -->
        <link rel="stylesheet" type="text/css" href="../css/mega-menu/mega_menu.css" />

        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />

        <!-- owl-carousel -->
        <link rel="stylesheet" type="text/css" href="../css/owl-carousel/owl.carousel.css" />

        <!-- magnific-popup -->
        <link rel="stylesheet" type="text/css" href="../css/magnific-popup/magnific-popup.css" />

        <!-- revolution -->
        <link rel="stylesheet" type="text/css" href="../revolution/css/settings.css" />

        <!-- main style -->
        <link rel="stylesheet" type="text/css" href="../css/style.css" />

        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="../css/responsive.css" />

        <!-- logo font -->
        <link href="https://fonts.googleapis.com/css?family=Sonsie+One" rel="stylesheet">

    </head>

    <body>

        <!--=================================
  loading -->

        <div id="loading">
            <div id="loading-center">
                <img src="../images/loader.gif" alt="">
            </div>
        </div>

        <!--=================================
  loading -->

        <!--=================================
 header -->

        <header id="header" class="default">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="topbar-left text-lg-left text-center">
                                <ul class="list-inline">
                                    <li> <i class="fa fa-envelope-o"> </i> contact@lethauto.com</li>
                                    <li> <i class="fa fa-clock-o"></i> Lun - Sam 9.00 - 19.00. Dim Fermé</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="topbar-right text-lg-right text-center">
                                <ul class="list-inline">
                                    <li> <i class="fa fa-phone"></i> (+33) 7 82 14 81 41</li>
                                    <li><a href="https://www.facebook.com/sam.lethauto.39"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/sam.shauto/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--=================================
 mega menu -->

            <div class="menu">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- menu logo -->
                                    <ul class="menu-logo">
                                        <li>
                                            <a href="index.php"><img id="logo_img" src="../images/logo2.png" alt="logo" style="filter: brightness(0) invert(1);"> </a>
                                            <p id="company-name" style="font-family: 'Sonsie One', cursive;color:white;text-align:center"> SH Auto </p>
                                        </li>
                                    </ul>
                                    <!-- menu links -->
                                    <ul class="menu-links">
                                        <!-- active class -->
                                        <li class="active"><a href="index.php"> Accueil</a>
                                        </li>
                                        <li><a href="listing-01.php">Voitures <i class="fa fa-angle-down fa-indicator"></i></a>
                                            <ul class="drop-down-multilevel">
                                                <li><a href="purchase.php">Achat</a></li>
                                                <li><a href="listing-01.php">Vente</a></li>
                                                <li><a href="car-demand.php">Demande précise</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="contact.php"> Contact </a>
                                        </li>
                                        <li><a href="opinion.php">Avis </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </nav>
                <!-- menu end -->
            </div>
        </header>
        <!-- Formulaire d'ajout de client -->
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">Prénom</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Nom</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group col-md-2">
                <label for="postal_code">Code Postal</label>
                <input type="text" class="form-control" name="postal_code">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Ville</label>
                    <input type="text" class="form-control" name="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="telephone">Téléphone</label>
                    <input type="text" class="form-control" name="telephone">
                </div>
                <div class="form-group col-md-4">
                    <label for="type">Type</label>
                    <select name="type" class="form-control">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="siret">SIRET</label>
                    <input type="text" class="form-control" name="siret">
                </div>
                <div class="form-group col-md-4">
                    <label for="birth_date">Date de naissance</label>
                    <input type="date" class="form-control" name="birth_date">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="birth_place">Lieu de naissance</label>
                <input type="text" class="form-control" name="birth_place">
            </div>
            <div class="form-group col-md-4">
                <label for="gender">Sexe</label>
                <select name="gender" class="form-control">
                    <option>m</option>
                    <option>f</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer client</button>
        </form>
        <?php
        $last_id = $pdo->lastInsertId();
        if ($last_id > 0) { ?>
        	<div class="alert alert-success" role="alert">
				Le client a bien été ajouté à la base de données.
			</div>
        <?php } ?>

        <!-- /////////////////////////////////////////////// -->
        <footer class="footer bg-2 bg-overlay-black-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="social" style="margin-bottom:40px">
                            <ul>
                                <li style="opacity:0"><a class="pinterest" href="#">pinterest <i class="fa fa-pinterest-p"></i> </a></li>
                                <li style="opacity:0"><a class="dribbble" href="#">dribbble <i class="fa fa-dribbble"></i> </a></li>
                                <li><a class="facebook" href="https://www.facebook.com/sam.lethauto.39">facebook <i class="fa fa-facebook"></i> </a></li>
                                <li><a class="twitter" href="https://www.instagram.com/sam.shauto/">instagram <i class="fa fa-instagram"></i> </a></li>
                                <li style="opacity:0"><a class="google-plus" href="#">google plus <i class="fa fa-google-plus"></i> </a></li>
                                <li style="opacity:0"><a class="behance" href="#">behance <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="about-content">
                            <img class="img-fluid" id="logo-footer" src="../images/logo2.png" alt="" style="filter: brightness(0) invert(1);">
                            <p id="company-name" style="font-family: 'Sonsie One', cursive;color:white;margin-top: 10px;"> SH Auto</p>
                            <p>SH Auto est spécialisé dans la vente et l'achat de véhicules d'occasions et vous propose également des services de réparations pour l'entretien de votre véhicule. </p>
                        </div>
                        <div class="address">
                            <ul>
                                <li style="margin-bottom:0px;padding-bottom:0px"><span>68 Rue Boucicaut</span> </li>
                                <li><span>92260 Fontenay-aux-Roses</span> </li>
                                <li> <i class="fa fa-phone"></i><span>(+33) 7 82 14 81 41</span> </li>
                                <li> <i class="fa fa-envelope-o"></i><span>contact@lethauto.com</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="usefull-link">
                            <h6 class="text-white">Liens Utils</h6>
                            <ul>
                                <li><a href="listing-01.html"><i class="fa fa-angle-double-right"></i> Vente de véhicules </a></li>
                                <li><a href="purchase.html"><i class="fa fa-angle-double-right"></i> Achat de véhicules</a></li>
                                <li><a href="mecanic.html"><i class="fa fa-angle-double-right"></i> Préstations liées à la mécanique</a></li>
                                <li><a href="purchase.html"><i class="fa fa-angle-double-right"></i> Devis pour achat de véhicule </a></li>
                                <li><a href="cost-estimate.html"><i class="fa fa-angle-double-right"></i> Devis pour réparation de véhicule</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="recent-post-block">
                            <h6 class="text-white">Dernières actualités </h6>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="../images/car/01.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="events.html">Salon de l'auto</a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>10 Septembre 2017</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="../images/car/02.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="events.html">Classiques des 80's </a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>10 Septembre 2017</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-image">
                                    <img class="img-fluid" src="../images/car/03.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <a href="events.html">"Avoir un joint de culasse?" </a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>10 Septembre 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="news-letter">
                            <h6 class="text-white">Inscrivez-vous à notre newsletter </h6>
                            <p>Inscrivez-vous à notre newsletter pour ne rien manquer quant à l'entrée de nouveaux véhicules dans notre parc automobile.</p>
                            <form class="news-letter">
                                <input type="email" placeholder="Entrez votre courriel" class="form-control placeholder">
                                <a class="button red" href="#">S'inscrire</a>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="text-lg-left text-center">
                                <p>©Copyright 2018 SH Auto </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="list-inline text-lg-right text-center">
                                <li><a href="terms-and-conditions.html"> Conditions générales </a> |</li>
                                <li><a href="contact.html"> Nous contacter </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--=================================
 footer -->

        <!--=================================
 back to top -->

        <div class="car-top">
            <span><img src="../images/car.png" alt=""></span>
        </div>

        <!--=================================
 back to top -->

        <!--=================================
 jquery -->

        <!-- jquery  -->
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

        <!-- bootstrap -->
        <script type="text/javascript" src="../js/popper.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

        <!-- mega-menu -->
        <script type="text/javascript" src="../js/mega-menu/mega_menu.js"></script>

        <!-- appear -->
        <script type="text/javascript" src="../js/jquery.appear.js"></script>

        <!-- counter -->
        <script type="text/javascript" src="../js/counter/jquery.countTo.js"></script>

        <!-- owl-carousel -->
        <script type="text/javascript" src="../js/owl-carousel/owl.carousel.min.js"></script>

        <!-- select -->
        <script type="text/javascript" src="../js/select/jquery-select.js"></script>

        <!-- magnific popup -->
        <script type="text/javascript" src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- revolution -->
        <script type="text/javascript" src="../revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="../revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="../revolution/js/extensions/revolution.extension.video.min.js"></script>

        <!-- custom -->
        <script type="text/javascript" src="../js/custom.js"></script>

        <script type="text/javascript">
            (function($) {
                "use strict";

                var tpj = jQuery;
                var revapi2;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_2_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_2_1");
                    } else {
                        revapi2 = tpj("#rev_slider_2_1").show().revolution({
                            sliderType: "standard",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                bullets: {
                                    enable: true,
                                    hide_onmobile: false,
                                    style: "hermes",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 50,
                                    space: 10,
                                    tmp: ''
                                }
                            },
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: 1570,
                            gridheight: 1000,
                            lazyType: "none",
                            shadow: 0,
                            spinner: "spinner3",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                });
            })(jQuery);
        </script>
    </body>

    </html>