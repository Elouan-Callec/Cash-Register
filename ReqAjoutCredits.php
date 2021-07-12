<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"

// Modification du solde de l'utilisateur
$req = $bdd->prepare("UPDATE utilisateurs SET util_solde = util_solde + :prix WHERE util_surnom = :surnom");
$req->execute(array(
    'prix' => $_POST['prix'],
    'surnom' => $surnom));

?>