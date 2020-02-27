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
    <form>
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nous ne partegerons jamais votre pseudo à qui que ce soit.</small>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-secondary">Se connecter</button>
    </form>
</div>

<?php
require_once("inc/footer.php");
?>