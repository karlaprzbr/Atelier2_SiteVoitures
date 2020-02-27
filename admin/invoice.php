<?php
require_once("../inc/init.php");
require_once("inc/header.php");

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

?>

<div class="container">
    <form method="post">
        <div class="form-group col-md-4">
            <label>Voiture</label>
            <select name="id_car">
                <?php while($car=$r1->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $car['id_car']?>"><?php echo $car['id_car']?> - <?php echo $car['car_brand'] . " " . $car['car_model']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Client</label>
            <select name="id_client">
                <?php while($client=$r3->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $client['id_client']?>"><?php echo $client['first_name'] . " " . $client['last_name']?></option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" value="Générer facture" name="generate">
    </form>
    <p>Le client n'existe pas ? Vous pouvez l'ajouter <a href="client.php">ici</a> !</p>

    <?php if (isset($_POST['generate']) && !empty($_POST['generate'])) {
    $_SESSION['id_car'] = $_POST['id_car'];
    $_SESSION['id_client'] = $_POST['id_client'];
    $r2=$pdo->query("SELECT * FROM cars WHERE id_car = '$_POST[id_car]'");
    $r4=$pdo->query("SELECT * FROM clients WHERE id_client = '$_POST[id_client]'");
    $donnees_car = $r2->fetch();
    $donnees_client = $r4->fetch(); ?>

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
                    <input value="<?php echo $donnees_car[$i] ?>" name="<?php echo $column[$i] ?>">
                <?php }
                for ($i=1; $i<sizeof($column_clients); $i++) { ?>
                    <label><?php echo $column_clients[$i] ?></label>
                    <input value="<?php echo $donnees_client[$i] ?>" name="<?php echo $column_clients[$i] ?>">
                <?php } ?>
                <input type="submit" value="Créer facture" name="create">
            </div>
        </form>
    <?php }

    if(isset($_POST['create']) && !empty($_POST['create'])) {
        $pdo->query("INSERT INTO invoices(invoice_number, first_name, last_name, address, postal_code, city, telephone, siret, city_invoice, date_invoice, police_number, car_brand, car_model, car_type, car_serial_number, car_cv, price_letters, number_key, total, payment_method, type, warranty, plate_number, km, car_first_registration, clients_id_client, cars_id_car) VALUES('$_POST[invoice_number]','$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[siret]','$_POST[city_invoice]','$_POST[date_invoice]','$_POST[police_number]','$_POST[car_brand]','$_POST[car_model]','$_POST[car_type]','$_POST[car_serial_number]','$_POST[car_cv]','$_POST[price_letters]','$_POST[number_key]','$_POST[total]','$_POST[payment_method]','$_POST[type]','$_POST[warranty]','$_POST[plate_number]','$_POST[km]','$_POST[car_first_registration]','$_SESSION[id_client]','$_SESSION[id_car]')");
        $last_id = $pdo->lastInsertId();
        if ($last_id > 0) { ?>
            <div class="alert alert-success" role="alert">
                La facture a bien été ajouté à la base de données.
            </div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                Un problème est survenu lors de l'ajout de la facture. Veuillez réessayer.
            </div>
        <?php }
    } ?>
</div>
<?php
require_once("inc/footer.php");
?>