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
    <h1>Liste des voitures</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">Moteur</th>
                <th scope="col">Puissance</th>
                <th scope="col">Boîte</th>
                <th scope="col">Carburant</th>
                <th scope="col">Couleur extérieure</th>
                <th scope="col">Couleur intérieure</th>
                <th scope="col">Annonce</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($resultat = $r->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <th scope="row"><?php echo $resultat['id_car'] ?></th>
                <td><?php echo $resultat['car_brand'] ?></td>
                <td><?php echo $resultat['car_model'] ?></td>
                <td><?php echo $resultat['motor'] ?></td>
                <td><?php echo $resultat['car_ch'] ?></td>
                <td><?php echo $resultat['gearbox'] ?></td>
                <td><?php echo $resultat['car_energy'] ?></td>
                <td><?php echo $resultat['ext_color'] ?></td>
                <td><?php echo $resultat['in_color'] ?></td>
                <td><a href="display-invoice.php?id_car=<?php echo $resultat['id_car'] ?>">Créer une annonce LeBonCoin</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    
</div>

<?php
require_once("inc/footer.php");
?>

