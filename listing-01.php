<?php
require_once("inc/init.php");
require_once("inc/header2.php");
?>
 
 <section class="inner-intro bg-22 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white">Notre parc </h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
     </div>
  </div>
</section>

<section class="product-listing page-section-ptb">
 <div class="container">
  <div class="row">
   
     <div class="col-lg-12 col-md-12">
       
        <div class="row">

          <!-- INSERT NEW VEHICULES FROM HERE -->

          <!-- RENDRE CETTE PARTIE DYNAMIQUE -->
          <!-- SELECTIONNER EN BASE TOUTES LES VOITURES DISPO ET ITÉRER DANS LA CARD -->
          
          <?php
          $request = $pdo->query("SELECT * FROM cars");
          while ($resultat = $request->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class='col-lg-4'>
                <div class='car-item gray-bg text-center'>
                    <div class='car-image'>
                      <img class='img-fluid' src='<?php echo $resultat['imgs'] ?>' alt=''>
                      <div class='car-overlay-banner'>
                          <ul>
                              <li><a href='descriptif-vehicule.php?id=<?php echo $resultat['id_car'] ?>'><i class='fa fa-link'></i></a></li>
                              <!--<li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>-->
                          </ul>
                      </div>
                    </div>
                    <div class='car-list'>
                        <ul class='list-inline'>
                            <li><i class='fa fa-registered'></i><?php echo $resultat['year'] ?></li>
                            <li><i class='fa fa-cog'></i><?php echo $resultat['gearbox'] ?></li>
                            <li><i class='fa fa-shopping-cart'></i><?php echo $resultat['km'] ?></li>
                        </ul>
                    </div>
                    <div class='car-content'>
                        <div class='star'>
                          <i class='fa fa-star orange-color'></i>
                          <i class='fa fa-star orange-color'></i>
                          <i class='fa fa-star orange-color'></i>
                          <i class='fa fa-star orange-color'></i>
                          <i class='fa fa-star-o orange-color'></i>
                        </div>
                        <a href='#'><?php echo $resultat['car_brand'] . " " . $resultat['car_model'] ?></a>
                        <div class='separator'></div>
                        <div class='price'>
                          <span class='old-price'><?php echo $resultat['old_selling_price'] ?>€</span>
                          <span class='new-price'><?php echo $resultat['selling_price'] ?>€</span>
                        </div>
                    </div>
                </div>
            </div>
          <?php } ?>
       </div>
     </div>
  </div>
</section>

<!--=================================
product-listing  -->
 
 
<!--=================================
 footer -->

<?php
require_once("inc/footer.php");
?>
