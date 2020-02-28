<?php
require_once("../inc/init.php");
require_once("inc/header.php");

if(!isAdminConnected()){
	header("location:index.php");
	exit();
}

if (isset($_POST) && !empty($_POST)) {
    $pdo->query("INSERT INTO cars(car_brand, car_model, gearbox, motor, car_type, car_first_registration, car_cv, car_ch, car_energy, plate_number, km, number_key, ext_color, in_color, options, imgs, selling_price, price_letters, purchase_price, purchase_commission_price, old_selling_price, year, purchase_date, origin, tc_date, car_seats, car_rims, ext_condition, int_condition, body_defaults, service_book, last_fixes, timing_belt) VALUES ('$_POST[car_brand]','$_POST[car_model]','$_POST[gearbox]','$_POST[motor]','$_POST[car_type]','$_POST[car_first_registration]','$_POST[car_cv]','$_POST[car_ch]','$_POST[car_energy]','$_POST[plate_number]','$_POST[km]','$_POST[number_key]','$_POST[ext_color]','$_POST[in_color]','$_POST[options]','$_POST[imgs]','$_POST[selling_price]','$_POST[price_letters]','$_POST[purchase_price]','$_POST[purchase_commission_price]','$_POST[old_selling_price]','$_POST[year]','$_POST[purchase_date]','$_POST[origin]','$_POST[tc_date]','$_POST[car_seats]','$_POST[car_rims]','$_POST[ext_condition]','$_POST[int_condition]','$_POST[body_defaults]','$_POST[service_book]','$_POST[last_fixes]','$_POST[timing_belt]')");
}
?>
    
<div class="container">

    <h1>Ajout d'une voiture</h1>
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
            <div class="form-group col-md-4">
                <label for="motor">moteur</label>
                <input type="text" class="form-control" name="motor">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="gearbox">boîte de vitesse</label>
                <input type="text" class="form-control" name="gearbox">
            </div>
            <div class="form-group col-md-3">
                <label for="car_cv">puissance fiscale</label>
                <input type="text" class="form-control" name="car_cv">
            </div>
            <div class="form-group col-md-3">
                <label for="car_ch">puissance</label>
                <input type="text" class="form-control" name="car_ch">
            </div>
            <div class="form-group col-md-3">
                <label for="car_energy">carburant</label>
                <select name="car_energy" class="form-control">
                    <option>essence</option>
                    <option>diesel</option>
                    <option>electrique</option>
                    <option>hybride</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="car_first_registration">date de mise en circulation</label>
                <input type="date" class="form-control" name="car_first_registration">
            </div>
            <div class="form-group col-md-3">
                <label for="year">Année</label>
                <input type="number" name="year"class="form-control" >
            </div>
            <div class="form-group col-md-3">
                <label for="plate_number">immatriculation</label>
                <input type="text" class="form-control" name="plate_number">
            </div>
            <div class="form-group col-md-3">
                <label for="km">kilométrage</label>
                <input type="text" class="form-control" name="km">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ext_color">couleur extérieure</label>
                <input type="text" class="form-control" name="ext_color">
            </div>
            <div class="form-group col-md-4">
                <label for="in_color">couleur intérieure</label>
                <input type="text" class="form-control" name="in_color">
            </div>
            <div class="form-group col-md-4">
                <label for="number_key">nombre de clé</label>
                <input type="text" class="form-control" name="number_key">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="car_type">type de voiture</label>
                <input type="text" class="form-control" name="car_type">
            </div>
            <div class="form-group col-md-6">
                <label for="serial_car_number">numéro de série</label>
                <input type="text" class="form-control" name="serial_car_number">
            </div>
        </div>
        
        <h4>Autres informations</h4>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tc_date">date du dernier contrôle technique</label>
                <input type="date" class="form-control" name="tc_date">
            </div>
            <div class="form-group col-md-6">
                <label for="purchase_date">date d'achat</label>
                <input type="date" class="form-control" name="purchase_date">
            </div>
        </div>
        <div class="form-row">
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
        </div>
        <div class="form-row">
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
        </div>
        <div class="form-row">
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
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="options">options</label>
                <input type="text" class="form-control" name="options">
            </div>
            <div class="form-group col-md-4">
                <label for="imgs">photos</label>
                <input type="text" class="form-control" name="imgs">
            </div>
        </div>

        <h4>Prix</h4>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="purchase_price">prix d'achat</label>
                <input type="text" class="form-control" name="purchase_price">
            </div>
            <div class="form-group col-md-3">
                <label for="old_selling_price">ancien prix de vente</label>
                <input type="text" class="form-control" name="old_selling_price">
            </div>
            <div class="form-group col-md-3">
                <label for="selling_price">prix de vente</label>
                <input type="text" class="form-control" name="selling_price">
            </div>
            <div class="form-group col-md-3">
                <label for="price_letters">prix en toutes lettres</label>
                <input type="text" class="form-control" name="price_letters">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="purchase_commission_price">montant de la commission à l'achat</label>
                <input type="text" class="form-control" name="purchase_commission_price">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Créer voiture</button>
    </form>

</div>

<?php
require_once("inc/footer.php");
?>