<?php
require_once("inc/init.php");
require_once("inc/header2.php");
?>

<!--=================================
 header -->


<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-21 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Evénements</h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <!--<ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>coming soon</span> </li>
             </ul>-->
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 coming soon -->

<section class="coming-soon page-section-ptb">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2> Prochainement </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
    <div class="row">
     <div class="col-md-12">
        <div class="countdown">
          <p>Notre site web est toujours en construction. Cette partie sera très prochainement disponible. Restez connectés !</p>
            <ul>
              <li> 
                <p class="days_ref">days</p>
                <span class="days">00</span>
              </li>
              <li>
                 <p class="hours_ref">hours</p>
                 <span class="hours">00</span>
              </li>
              <li> 
                <p class="minutes_ref">minutes</p>
                <span class="minutes">00</span>
              </li>
              <li> 
                <p class="seconds_ref">seconds</p>
                <span class="seconds">00</span>
              </li>
              </ul>
          </div>
       </div>
     </div>
   </div>

   <div class="coming-soon-search">
     <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="img-fluid center-block" src="images/bg/20.jpg" alt="">
        </div>
      </div>
       <div class="row text-center">
         <div class="col-md-12">
           <p>Renseignez votre courriel pour être notifié lors du prochaine évènement</p>
         </div>
       </div>
       <div class="row justify-content-center gray-form no-gutter">
            <div class="col-lg-6 col-md-10 col-sm-6">
              <input id="search" class="form-control" type="text" placeholder="Adresse Email" name="search">
           </div>
          <div class="col-lg-2 col-md-2 col-sm-6">
             <a class="button red" href="#">Notify Me</a>
         </div>
      </div>
    </div>
   </div>
</section>

<!--=================================
 coming soon -->
 
 
<!--=================================
 footer -->

<?php
require_once("inc/footer.php");
?>
