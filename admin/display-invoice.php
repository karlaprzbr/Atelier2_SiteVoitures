<?php
require_once("../inc/init.php");
require_once("inc/header.php");

if(isset($_GET["id_invoice"])){
    $r = $pdo->query("SELECT * FROM invoices WHERE id_invoice = '$_GET[id_invoice]'");
    $donnees_facture = $r->fetch();
} ?>

<div class="container">

      <div class="row">

        <div class="col-md-6">
          <h1> SH AUTO </h1>
          <h2> 2 chemin du Ponceau </h2>
          <h2> 02200 Soissons </h2>
          <h4> Tél: 07.82.14.81.41 </h4>
          <h5> Siren : 844 913 822 </h5>
          <h6> contactshauto@gmail.com </h6>
        </div>

      </div>

      <div class="row d-flex justify-content-end">

        <div class="col-md-6">
                <h2> <?php echo strtoupper($donnees_facture["last_name"]) . " " . $donnees_facture["first_name"] ?> </h2>
                <h2> <?php echo $donnees_facture["address"] ?> </h2>
                <h2> <?php echo $donnees_facture["postal_code"] . " " . $donnees_facture["city"] ?> </h2>
        </div>

      </div>

      <div class="row invoiceHeader">
        <ul class="d-flex justify-content-between">
          <li>Facture Nº</li>
          <li><?php echo $donnees_facture["id_invoice"] ?></li>
          <li><?php echo $donnees_facture["city_invoice"] ?>, le</li>
          <li><?php echo $donnees_facture["date_invoice"] ?></li>
        </ul>
      </div>

      <div class="row invoiceContent mt-2">

        <table border="1" class="w-100 p-1 m-1">
          <tr>
            <th>reference</th>
            <th>marque</th>
            <th>modèle</th>
            <th>puissance</th>
            <th>prix</th>
          </tr>

              <tr>
                <td> <?php echo $donnees_facture["invoice_number"]; ?> </td>
                <td> <?php echo $donnees_facture["car_brand"]; ?> </td>
                <td> <?php echo $donnees_facture["car_model"]; ?> </td>
                <td> <?php echo $donnees_facture["car_cv"]; ?> </td>
                <td> <?php echo $donnees_facture["total"]; ?> </td>
              </tr>
          
        </table>

      </div>

      <div class="row invoiceFooter mt-2">

        <div class="d-flex bd-highlight">

          <div class="ml-auto bd-highlight backgroundGey" style="font-weight:bold"><?php echo $donnees_facture["total"] ?></div>
        </div>
      </div>

      <div class="row d-flex justify-content-between invoiceTotal mt-2">

        <div class="col-md-5">
          <div class="headerTotal" style="font-weight:bold"> Vendeur </div>
        </div>

        <div class="col-md-5 d-flex flex-column justify-content-around" style="padding:10px 0 10px 10px">

        <div class="d-flex bd-highlight">
          <div class="mr-auto bd-highlight" style="font-weight:bold">Total TTC</div>
          <div class="ml-auto bd-highlight backgroundGeySmall" style="padding: 0 10px;font-weight:bold"><?php echo $donnees_facture["total"] ?></div>
        </div>

        <div class="d-flex bd-highlight">
          <div class="mr-auto bd-highlight" style="font-weight:bold">Mode de réglement</div>
          <div class="ml-auto bd-highlight" style="    padding: 0 10px;"><?php echo $donnees_facture["payment_method"] ?></div>
        </div>

        </div>
      </div>
    </div>

<?php
require_once("inc/footer.php");
?>