<?php
require_once("../inc/init.php");
require_once("inc/header.php");

$r = $pdo->query("SELECT * FROM clients");
?>

<div class="container">
    <h1>Liste des clients</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Téléphone</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($resultat = $r->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <th scope="row"><?php echo $resultat['id_client'] ?></th>
                <td><?php echo $resultat['first_name'] ?></td>
                <td><?php echo $resultat['last_name'] ?></td>
                <td><?php echo $resultat['address'] ?></td>
                <td><?php echo $resultat['postal_code'] ?></td>
                <td><?php echo $resultat['city'] ?></td>
                <td><?php echo $resultat['telephone'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    
</div>

<?php
require_once("inc/footer.php");
?>