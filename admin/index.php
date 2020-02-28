<?php
require_once("../inc/init.php");
require_once("inc/header.php");

if(isset($_POST['deconnexion'])) {
	unset($_SESSION["admin"]);
	header("Refresh:0; url=index.php");
	exit();
}
?>

<div class="container">

<?php
if (!isAdminConnected()) { ?>
    <!-- Formulaire de connection au back-office -->
    <h1>Connexion au Back Office</h1>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="admin_login">Pseudo</label>
                <input type="text" class="form-control" name="admin_login">
            </div>
            <div class="form-group col-md-6">
                <label for="admin_mdp">Mot de passe</label>
                <input type="password" class="form-control" name="admin_mdp">
            </div>
        </div>
        <input type="submit" class="btn btn-primary w-100" value="Se connecter" name="connexion" id="connexion">
    </form>
<?php } else { ?>
    <div class='alert alert-success' role='alert'>
        Vous êtes connecté. Vous pouvez maintenant naviguer dans le Back Office.
    </div>
    <form method="post">
        <div class="form-group">
            <input type="submit" class="btn btn-primary w-100" name="deconnexion" value="Déconnexion">
        </div>
    </form>
<?php }

if(isset($_POST['connexion']) && !empty($_POST['connexion'])) {
    $r = $pdo->query("SELECT * FROM admin WHERE admin_login = '$_POST[admin_login]'");
    $admin = $r->fetch();
    if($r->rowCount() >= 1) {
        if(password_verify($_POST['admin_mdp'], $admin['admin_mdp'])) {
            $_SESSION['admin']['id_admin'] = $admin['id_admin'];
        $_SESSION['admin']['admin_login'] = $admin['admin_login'];
        header("Refresh:0; url=index.php");
	    exit();
        } else { ?>
            <div class='alert alert-danger' role='alert'>
                Le login ou le mot de passe n'ont pas été reconnus.
            </div>
        <?php }
    }
} ?>
</div>

<?php
require_once("inc/footer.php");
?>