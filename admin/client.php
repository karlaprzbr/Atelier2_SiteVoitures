<?php
require_once("../inc/init.php");
require_once("inc/header.php");
if (isset($_POST) && !empty($_POST)) {
	$pdo->query("INSERT INTO clients(`first_name`,`last_name`,`address`,`postal_code`,`city`,`telephone`,`type`,`siret`,`birth_date`,`birth_place`,`gender`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[type]','$_POST[siret]','$_POST[birth_date]','$_POST[birth_place]','$_POST[gender]')");
}
?>

<div class="container">
    <h1>Ajout d'un client</h1>
    <!-- Formulaire d'ajout de client -->
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="first_name">Prénom</label>
                <input type="text" name="first_name" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="last_name">Nom</label>
                <input type="text" class="form-control" name="last_name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="postal_code">Code Postal</label>
                <input type="text" class="form-control" name="postal_code">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="city">Ville</label>
                <input type="text" class="form-control" name="city">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" name="telephone">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option>0</option>
                    <option>1</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="siret">SIRET</label>
                <input type="text" class="form-control" name="siret">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="birth_date">Date de naissance</label>
                <input type="date" class="form-control" name="birth_date">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="birth_place">Lieu de naissance</label>
                <input type="text" class="form-control" name="birth_place">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="gender">Sexe</label>
                <select name="gender" class="form-control">
                    <option>m</option>
                    <option>f</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Créer client</button>
    </form>
    <?php
    $last_id = $pdo->lastInsertId();
    if ($last_id > 0) { ?>
        <div class="alert alert-success" role="alert">
            Le client a bien été ajouté à la base de données.
        </div>
    <?php } ?>
</div>

<?php
require_once("inc/footer.php");
?>