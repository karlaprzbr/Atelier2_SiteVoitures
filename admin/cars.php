<?php
require_once("../inc/init.php");
if (isset($_POST) && !empty($_POST)) {
    $pdo->query("INSERT INTO cars(car_brand, car_model, gearbox, motor, car_type, car_first_registration, car_cv, car_ch, car_energy, plate_number, km, number_key, ext_color, in_color, options, imgs, selling_price, price_letters, purchase_price, purchase_commission_price, old_selling_price, year, purchase_date, origin, tc_date, car_seats, car_rims, ext_condition, int_condition, body_defaults, service_book, last_fixes, timing_belt) VALUES ('$_POST[car_brand]','$_POST[car_model]','$_POST[gearbox]','$_POST[motor]','$_POST[car_type]','$_POST[car_first_registration]','$_POST[car_cv]','$_POST[car_ch]','$_POST[car_energy]','$_POST[plate_number]','$_POST[km]','$_POST[number_key]','$_POST[ext_color]','$_POST[in_color]','$_POST[options]','$_POST[imgs]','$_POST[selling_price]','$_POST[price_letters]','$_POST[purchase_price]','$_POST[purchase_commission_price]','$_POST[old_selling_price]','$_POST[year]','$_POST[purchase_date]','$_POST[origin]','$_POST[tc_date]','$_POST[car_seats]','$_POST[car_rims]','$_POST[ext_condition]','$_POST[int_condition]','$_POST[body_defaults]','$_POST[service_book]','$_POST[last_fixes]','$_POST[timing_belt]')");
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

        <?php $last_id = $pdo->lastInsertId();
        if ($last_id > 0) { ?>
          <div class="alert alert-success" role="alert">
            La voiture a bien été ajouté à la base de données.
          </div>
        <?php } ?>
        
        <!-- Formulaire d'ajout de véhicules -->

        <form method="post">
            <h4>Informations du véhicule</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="car_brand">marque</label>
                    <input type="text" name="car_brand" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="car_model">modele</label>
                    <input type="text" class="form-control" name="car_model">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="motor">moteur</label>
                <input type="text" class="form-control" name="motor">
            </div>
            <div class="form-group col-md-4">
                <label for="car_first_registration">date de mise en circulation</label>
                <input type="date" class="form-control" name="car_first_registration">
            </div>
            <div class="form-group col-md-4">
                <label for="year">Année</label>
                <input type="number" name="year"class="form-control" >
            </div>
            <div class="form-group col-md-2">
                <label for="gearbox">boîte de vitesse</label>
                <input type="text" class="form-control" name="gearbox">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="car_cv">puissance fiscale</label>
                    <input type="text" class="form-control" name="car_cv">
                </div>
                <div class="form-group col-md-4">
                    <label for="car_ch">puissance</label>
                    <input type="text" class="form-control" name="car_ch">
                </div>
                <div class="form-group col-md-4">
                    <label for="car_energy">carburant</label>
                    <select name="car_energy" class="form-control">
                        <option>essence</option>
                        <option>diesel</option>
                        <option>electrique</option>
                        <option>hybride</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="plate_number">immatriculation</label>
                    <input type="text" class="form-control" name="plate_number">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="km">kilométrage</label>
                <input type="text" class="form-control" name="km">
            </div>
            <div class="form-group col-md-4">
                <label for="ext_color">couleur extérieure</label>
                <input type="text" class="form-control" name="ext_color">
            </div>
            <div class="form-group col-md-4">
                <label for="in_color">couleur intérieure</label>
                <input type="text" class="form-control" name="in_color">
            </div>
            <div class="form-group col-md-4">
                <label for="car_type">type de voiture</label>
                <input type="text" class="form-control" name="car_type">
            </div>
            <div class="form-group col-md-4">
                <label for="serial_car_number">numéro de série</label>
                <input type="text" class="form-control" name="serial_car_number">
            </div>
            <div class="form-group col-md-4">
                <label for="number_key">nombre de clé</label>
                <input type="text" class="form-control" name="number_key">
            </div>

            <h4>Autres informations</h4>

            <div class="form-group col-md-4">
                <label for="tc_date">date du dernier contrôle technique</label>
                <input type="date" class="form-control" name="tc_date">
            </div>
            <div class="form-group col-md-4">
                <label for="purchase_date">date d'achat</label>
                <input type="date" class="form-control" name="purchase_date">
            </div>
            <div class="form-group col-md-4">
                <label for="origin">origine du véhicule</label>
                <input type="text" class="form-control" name="origin">
            </div>
            <div class="form-group col-md-4">
                <label for="car_seats">nombre de places</label>
                <input type="text" class="form-control" name="car_seats">
            </div>
            <div class="form-group col-md-4">
                <label for="car_rims">type de jantes</label>
                <input type="text" class="form-control" name="car_rims">
            </div>
            <div class="form-group col-md-4">
                <label for="ext_condition">état extérieur</label>
                <input type="text" class="form-control" name="ext_condition">
            </div>
            <div class="form-group col-md-4">
                <label for="int_condition">état intérieur</label>
                <input type="text" class="form-control" name="int_condition">
            </div>
            <div class="form-group col-md-4">
                <label for="body_defaults">état de la carrosserie</label>
                <input type="text" class="form-control" name="body_defaults">
            </div>
            <div class="form-group col-md-4">
                <label for="service_book">carnet d'entretient</label>
                <select name="service_book" class="form-control">
                    <option>Oui</option>
                    <option>Non</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="last_fixes">dernières réparations/entretiens</label>
                <input type="text" class="form-control" name="last_fixes">
            </div>
            <div class="form-group col-md-4">
                <label for="timing_belt">remplacement de le courroie de transmission ?</label>
                <select name="timing_belt" class="form-control">
                    <option>Oui</option>
                    <option>Non</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="options">options</label>
                <input type="text" class="form-control" name="options">
            </div>
            <div class="form-group col-md-4">
                <label for="imgs">photos</label>
                <input type="text" class="form-control" name="imgs">
            </div>

            <h4>Prix</h4>

            <div class="form-group col-md-4">
                <label for="selling_price">prix de vente</label>
                <input type="text" class="form-control" name="selling_price">
            </div>
            <div class="form-group col-md-4">
                <label for="price_letters">prix en toutes lettres</label>
                <input type="text" class="form-control" name="price_letters">
            </div>
            <div class="form-group col-md-4">
                <label for="purchase_price">prix d'achat</label>
                <input type="text" class="form-control" name="purchase_price">
            </div>
            <div class="form-group col-md-4">
                <label for="purchase_commission_price">montant de la commission à l'achat</label>
                <input type="text" class="form-control" name="purchase_commission_price">
            </div>
            <div class="form-group col-md-4">
                <label for="old_selling_price">ancient prix de vente</label>
                <input type="text" class="form-control" name="old_selling_price">
            </div>
            <button type="submit" class="btn btn-primary">Créer voiture</button>
        </form>

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