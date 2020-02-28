<?php
require_once("../../inc/init.php");
if(isset($_GET['id_car']) && !empty($_GET['id_car']) && $_GET['id_car'] != "null") {
    $r = $pdo->query("SELECT * FROM cars WHERE id_car = '$_GET[id_car]'");
    $donnees = $r->fetch(); ?>
    
- Informations générales sur le véhicule

Modèle: <?php echo $donnees['car_brand'] . " " . $donnees['car_model'] . "\n"?>
Motorisation: <?php echo $donnees['motor'] . "\n" ?>
Boîte: <?php echo $donnees['gearbox'] . "\n" ?>
Puissance fiscale: <?php echo $donnees['car_cv'] . "\n" ?>
Nombre de chevaux: <?php echo $donnees['car_ch'] . "\n" ?>
Nombre de portes: 
Mise en circulation: <?php echo $donnees['car_first_registration'] . "\n" ?>
Nombre de kilomètres: <?php echo $donnees['km'] . "\n" ?>
Garantie:  an(s) 

** 4 pneus neufs offert avec le véhicule **

- Autres informations pratiques

Nombre de propriétaires: <?php echo $donnees['km'] . "\n" ?>
Nobre de clefs: <?php echo $donnees['number_key'] . "\n" ?>
Date du contrôle technique effectué: <?php echo $donnees['tc_date'] . "\n" ?>

- Caractéristiques intérieures et extérieures du véhicule

Nombre de sièges: <?php echo $donnees['car_seats'] . "\n" ?>
Jantes: <?php echo $donnees['car_rims'] . "\n" ?>
Couleur de la peinture extérieure: <?php echo $donnees['ext_color'] . "\n" ?>
Couleur intérieure : <?php echo $donnees['in_color'] . "\n" ?>

- Etat général

Extérieur: <?php echo $donnees['ext_condition'] . "\n" ?>
Intérieur: <?php echo $donnees['int_condition'] . "\n" ?>
Précisions sur les défauts de carrosserie : <?php echo $donnees['body_defaults'] . "\n" ?>

- Entretien effectué

Carnet d'entretien disponible : <?php echo $donnees['service_book'] . "\n" ?>
Dernières réparations effectuées : <?php echo $donnees['last_fixes'] . "\n" ?>

- OPTIONS ET EQUIPEMENTS :

Extérieur :



Intérieur :



Securité :



- INFORMATIONS SUR LA GARANTIE :

La garantie offerte couvre :
- Moteur
- Boîte de vitesses
- Pont
- Ingrédients

** Extension de garantie possible **
Jusqu'a 1 an

Disponibilité du LUNDI au SAMEDI
** sur rendez-vous **
Premier contact par téléphone.

Nous contacter au
** 07.82.14.81.41 **

Le tarif affiché est hors frais d'immatriculation et frais de mise à la route.

<?php } ?>