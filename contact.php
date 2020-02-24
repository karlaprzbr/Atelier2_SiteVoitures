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
             <h1 class="text-white"> Contactez-nous ! </h1>
           </div>
           <!--<div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Conatct us 01</span> </li>
             </ul>
           </div>-->
          <div class="col-md-6 text-md-right float-right">
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>Nous aimerions vous rencontrer</span>
           <h2>Visite uniquement sur rendez-vous !</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
       <div class="contact-box text-center">
          <i class="fa fa-map-marker"></i>
          <h5>Adresse</h5>
          <p style="margin-bottom: 0;">68 Rue Boucicaut</p>
          <p style="margin-bottom: 0;">92260 Fontenay-aux-Roses</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
       <div class="contact-box text-center">
          <i class="fa fa-phone"></i>
          <h5>Téléphone</h5>
          <p style="margin-bottom: 0;">(+33) 7 82 14 81 41</p>
          <p style="margin-bottom: 0;opacity:0">(+33) 7 82 14 81 41</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
       <div class="contact-box text-center">
          <i class="fa fa-envelope-o"></i>
          <h5>Email</h5>
          <p style="margin-bottom: 0;">contact@lethauto.com</p>
          <p style="margin-bottom: 0;opacity:0">contact@lethauto.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
       <div id="fb-content-contact"class="contact-box text-center">
          <a class="toto" href="https://www.facebook.com/sam.lethauto.39">
            <i class="fa fa-fax"></i>
          <h5>Facebook</h5>
          <p id="fb-profil"style="margin-bottom: 0;color:#999999">Sam Cars</p>
          <p id="fb-profil"style="margin-bottom: 0;color:#999999;opacity:0">Sam Cars</p>
        </a>
        </div>
      </div>
    </div>
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-8 col-sm-12">
       <div class="gray-form">
         <div id="formmessage">
          <p style="float:left;margin-right:10px"> Message envoyé </p>
          <img style="width:20px;color:green;"src="images/tick.png" alt="">
          </div>
           <form class="form-horizontal" id="contactform" action="">
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
               <div class="form-group">
                 <input id="name" type="text" required placeholder="Nom*" class="form-control"  name="name">
               </div> 
             </div> 
             <div class="col-lg-4 col-sm-12">
               <div class="form-group">
                 <input type="email" required placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                  <input type="text" required placeholder="Téléphone*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <textarea class="form-control input-message" required placeholder="Message*" rows="7" name="message"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <input type="hidden" name="action" value="contact"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red"> Envoyer votre message </button>
               </div>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
           </div> 
       </div>
      <div class="col-lg-4 col-sm-12 mt-lg-0 mt-4">
        <div class="opening-hours gray-bg mt-sm-0">
          <h6>Heures d'ouverture</h6>
          <ul class="list-style-none">
            <li><strong>Dimanche</strong> <span class="text-red"> fermé</span></li>
            <li><strong>Lundi</strong> <span> 9h00 - 19h00</span></li>
            <li><strong>Mardi</strong> <span> 9h00 - 19h00</span></li>
            <li><strong>Mercredi</strong> <span> 9h00 - 19h00</span></li>
            <li><strong>Jeudi</strong> <span> 9h00 - 19h00</span></li>
            <li><strong>Vendredi</strong> <span> 9h00 - 19h00</span></li>
            <li><strong>Samedi</strong> <span> 9h00 - 19h00</span></li>
          </ul>
        </div>
      </div>
     </div>
 </div>
   <div class="row">
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-clock-o"></i>
          </div>
          <div class="content">
            <h6>Heures d'ouvertures </h6>
            <p> Nous vous invitons à entrer en contact avec notre équipe pour confirmer sa disponibilité pour toute réparation concernant votre véhicule. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-support"></i>
          </div>
          <div class="content">
            <h6> Support commercial </h6>
            <p> Un commercial est disponible sur place pour répondre à vos besoins concernant l'achat d'un véhicule et/ou la ventre de votre ancien véhicule. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-info"></i>
          </div>
          <div class="content">
            <h6>Services supplémentaires </h6>
            <p> - Pare-brise </br> - Lavage</p>
          </div>
         </div>
     </div>
   </div>
  </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->

 <section class="contact-map">
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21032.145063306052!2d2.2417048384806213!3d48.78154407390162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a06ead5503f%3A0xaa437cb9c2fa1ab8!2s92350%20Le%20Plessis-Robinson!5e0!3m2!1sfr!2sfr!4v1571238564483!5m2!1sfr!2sfr" allowfullscreen=""></iframe>
  </div>
 </section>

<!--=================================
 contact-map -->
 
 
<!--=================================
 footer -->

<?php
require_once("inc/footer.php");
?>
