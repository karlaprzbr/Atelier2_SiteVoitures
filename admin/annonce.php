<?php
require_once("../inc/init.php");
require_once("inc/header.php");

if(!isAdminConnected()){
	header("location:index.php");
	exit();
}

$r = $pdo->query("SELECT * FROM cars");

?>

<div class="container">
    <h1>Créer une annonce LeBonCoin</h1>
    <form>
        <div class="form-row">
            <div class="form-group col-md-12">
            <select name="" id="select" class="form-control">
                <option value="null">Choisissez une voiture</option>
                <?php while ($car = $r->fetch()) { ?>
                    <option value="<?php echo $car['id_car'] ?>"><?php echo $car['id_car'] . " - " . $car['car_brand'] . " " . $car['car_model'] . " de " . $car['year']?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <textarea name="" id="area" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
    </form>
    
    
</div>

<?php
require_once("inc/footer.php");
?>