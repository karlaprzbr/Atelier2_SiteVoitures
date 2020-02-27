<?php
require_once("../inc/init.php");
require_once("inc/header.php");

/*if (!AdminIsConnected()) {
	header('location:index.php');
	exit();
}*/
?>
<div class="container">
    <!-- Formulaire de connection au back-office -->
    <h1>Connexion au Back Office</h1>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Nous ne partegerons jamais votre pseudo à qui que ce soit.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
    </form>
</div>

<?php
require_once("inc/footer.php");
?>