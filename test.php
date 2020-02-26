<?php
require_once("inc/init.php");
require_once("inc/header2.php");

$r1 = $pdo->query("SELECT * FROM cars");
$total_count = $r1->columnCount();

$r3 = $pdo->query("SELECT * FROM clients");
$total_clients = $r3->columnCount();

for ($i= 0; $i < $total_count ; $i++) { 
	$meta = $r1->getColumnMeta($i);
	$column[] = $meta['name'];
}

for ($i= 0; $i < $total_clients ; $i++) { 
	$meta = $r3->getColumnMeta($i);
	$column_clients[] = $meta['name'];
}

if(isset($_POST['create']) && !empty($_POST['create'])) {
    $pdo->query("INSERT INTO `invoices`(`invoice_number`, `first_name`, `last_name`, `address`, `postal_code`, `city`, `telephone`, `siret`, `city_invoice`, `date_invoice`, `police_number`, `car_brand`, `car_model`, `car_type`, `car_serial_number`, `car_cv`, `price_letters`, `number_key`, `total`, `payment_method`, `type`, `warranty`, `plate_number`, `km`, `car_first_registration`, `clients_id_client`, `cars_id_car`) VALUES ('$_POST[invoice_number]','$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[siret]','$_POST[city_invoice]','$_POST[date_invoice]','$_POST[police_number]','$_POST[car_brand]','$_POST[car_model]','$_POST[car_type]','$_POST[car_serial_number]','$_POST[car_cv]','$_POST[price_letters]','$_POST[number_key]','$_POST[total]','$_POST[payment_method]','$_POST[type]','$_POST[warranty]','$_POST[plate_number]','$_POST[km]','$_POST[car_first_registration]','$_POST[id_client]','$donnees[id_car]'");
    $last_id = $pdo->lastInsertId();
    if ($last_id > 0) { ?>
        <div class="alert alert-success" role="alert">
            Le client a bien été ajouté à la base de données.
        </div>
    <?php }
}
?>

<form method="post">
    <div class="form-group col-md-4">
        <label>Numéro de police</label>
        <select name="police_number">
            <?php while($police_number=$r1->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $police_number['police_number']?>"><?php echo $police_number['police_number']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Id du client</label>
        <select name="id_client">
            <?php while($client=$r3->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $client['id_client']?>"><?php echo $client['id_client']?></option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" value="Générer facture" name="generate">
</form>

<?php 
if (isset($_POST['generate']) && !empty($_POST['generate'])) {

    $r2=$pdo->query("SELECT * FROM cars WHERE police_number = '$_POST[police_number]'");
    $r4=$pdo->query("SELECT * FROM clients WHERE id_client = '$_POST[id_client]'");
    $donnees = $r2->fetch();
    $donnes_client = $r4->fetch(); ?>

    <form method='post'>
        <div class="form-group col-md-4">
            <label for="">INVOICE_NUMBER</label>
            <input type="number" name="invoice_number">
            <label for="">CITY_INVOICE</label>
            <input type="text" name="city_invoice">
            <label for="">DATE_INVOICE</label>
            <input type="date" name="date_invoice">
            <label for="">TOTAL</label>
            <input type="number" name="total">
            <label for="">PAYMENT_METHOD</label>
            <input type="text" name="payment_method">
            <label for="">WARRANTY</label>
            <input type="number" name="warranty">
            
            <?php for ($i=1; $i<sizeof($column); $i++) { ?>
                <label><?php echo $column[$i] ?></label>
                <input value="<?php echo $donnees[$i] ?>" name="<?php echo $column[$i] ?>">
            <?php }
            for ($i=1; $i<sizeof($column_clients); $i++) { ?>
                <label><?php echo $column_clients[$i] ?></label>
                <input value="<?php echo $donnes_client[$i] ?>" name="<?php echo $column_clients[$i] ?>">
            <?php } ?>
        </div>
        <input type="submit" value="Créer facture" name="create">
    </form>

<?php }
require_once("inc/footer.php");
?>