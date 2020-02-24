<?php
require_once("inc/init.php");
require_once("inc/header2.php");
?>

<!--=================================
 header -->


<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Demande précise </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <!--<ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Register</span> </li>
             </ul>-->
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 register-form  -->

<section class="register-form page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="section-title">
           <span>Une envie précise? </span>
           <h2>Nous vous trouvons le véhicule de votre choix</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div id="formmessage">
      <p style="float:left;margin-right:10px"> Message envoyé </p>
      <img style="width:20px;color:green;"src="images/tick.png" alt="">
    </div>
    <form class="form-horizontal" id="carDemandForm" action="">
    <div class="row justify-content-center">
       <div class="col-lg-8 col-md-12">
        <div class="gray-form">
           <div class="row">
              <div class="form-group col-md-6">
                <label>Votre prénom*</label>
                <input class="form-control" required type="text" placeholder="Votre prénom" name="first-name">
              </div> 
              <div class="form-group col-md-6">
                <label>Votre nom*</label>
                <input class="form-control" required type="text" placeholder="Votre nom" name="name">
               </div>
              <div class="form-group col-md-6">
                <label>Votre numéro de téléphone*</label>
                <input class="form-control" required type="text" placeholder="Votre numéro de téléphone" name="phone">
              </div>
             <div class="form-group col-md-6">
              <label>Votre email*</label>
              <input class="form-control" required type="email" placeholder="Votre email" name="email">
             </div>
            </div>

            <div class="form-group">
             <label>Marque du véhicule* </label>
               <input  class="form-control" required type="text" placeholder="La marque du véhicule" name="brand">
            </div>
            <div class="form-group">
             <label>Modèle du véhicule* </label>
               <input class="form-control" required type="text" placeholder="Le modèle du véhicule" name="model">
            </div>

          </div>
            <label>Année du véhicule *</label>
            <div class="row">
             <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                   <select required="required" name="year">
                      <option value="" disabled>Année du véhicule</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>  
                        <option value="2010">2010</option>  
                        <option value="2011">2011</option>  
                        <option value="2012">2012</option>  
                        <option value="2013">2013</option>  
                        <option value="2014">2014</option>  
                        <option value="2015">2015</option>  
                        <option value="2016">2016</option>  
                        <option value="2017">2017</option>  
                        <option value="2018">2018</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                    <select required name="kilometer">
                        <option value="" disabled>Kilométrage</option>
                        <option value="100 000 km">- 100 000 km</option>
                        <option value="100 000 km - 120 000 km">100 000 km - 120 000 km</option>
                        <option value="120 000 km - 140 000 km">120 000 km - 140 000 km</option>
                        <option value="140 000 km - 160 000 km">140 000 km - 160 000 km</option>
                        <option value="160 000 km - 180 000 km">160 000 km - 180 000 km</option>
                        <option value="180 000 km - 200 000 km">180 000 km - 200 000 km</option>
                        <option value="200 000 km - 220 000 km">200 000 km - 220 000 km</option>
                        <option value="220 000 km - 240 000 km">220 000 km - 240 000 km</option>
                        <option value="240 000 km - 260 000 km">240 000 km - 260 000 km</option>
                        <option value="260 000 km - 280 000 km">260 000 km - 280 000 km</option>
                        <option value="280 000 km - 300 000 km">280 000 km - 300 000 km</option>
                        <option value="+ 300 000 km">+ 300 000 km</option>
                     </select>
                  </div>
                </div>
                <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                    <select required name="budget">
                        <option value="" disabled>Budget</option>
                        <option value="- 1000€">- 1000€</option>
                        <option value="1000€ - 1500€">1000€ - 1500€</option>
                        <option value="1500€ - 2000€">1500€ - 2000€</option>
                        <option value="2000€ - 2500€">2000€ - 2500€</option>
                        <option value="2500€ - 3000€">2500€ - 3000€</option>
                        <option value="3000€ - 4000€">3000€ - 4000€</option>
                        <option value="4000 - 5000€">4000 - 5000€</option>
                        <option value="5000 - 6000€">5000 - 6000€</option>
                        <option value="6000€ - 7000€">6000€ - 7000€</option>
                        <option value="7000€ - 8000€">7000€ - 8000€</option>
                        <option value="8000€ - 9000€">8000€ - 9000€</option>
                        <option value="9000€ - 1000€">9000€ - 1000€</option>
                        <option value="+ 10 000€">+ 10 000€</option>
                     </select>
                  </div>
                </div>
                </div>
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red"> Demander un véhicule </button>
               </div>
           </div>
         </form>
         <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div>
    </div>
</section>

<!--=================================
 register-form  -->
 
 
<!--=================================
 footer -->

<?php
require_once("inc/footer.php");
?>