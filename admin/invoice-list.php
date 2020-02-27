<?php
require_once("../inc/init.php");
require_once("inc/header.php");

$r = $pdo->query("SELECT * FROM invoices");
?>

<div class="container">
    <h1>Liste des factures</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Invoice number</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Car brand</th>
                <th scope="col">Car model</th>
                <th scope="col">Total</th>
                <th scope="col">Télecharger</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($resultat = $r->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <th scope="row"><?php echo $resultat['id_invoice'] ?></th>
                <td><?php echo $resultat['invoice_number'] ?></td>
                <td><?php echo $resultat['first_name'] ?></td>
                <td><?php echo $resultat['last_name'] ?></td>
                <td><?php echo $resultat['car_brand'] ?></td>
                <td><?php echo $resultat['car_model'] ?></td>
                <td><?php echo $resultat['total'] ?></td>
                <td><a href="display-invoice.php?id_invoice=<?php echo $resultat['id_invoice'] ?>">Télécharger</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    
</div>

<?php
require_once("inc/footer.php");
?>