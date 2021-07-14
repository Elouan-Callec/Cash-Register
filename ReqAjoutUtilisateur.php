<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";

$req = $bdd->prepare("INSERT INTO utilisateurs (util_surnom, util_nom, util_prenom, util_territoire, util_solde, util_rue, util_ville, util_email, util_telephone, util_cp, util_abonnement) 
                      VALUES (:surnom, :nom, :prenom, :territoire, :solde, :rue, :ville, :mail, :telephone, :cp, :abonnement)");

$req->execute(array(
    'surnom' => $_POST['surnom'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'territoire' => $_POST['territoire'],
    'solde' => $_POST['solde'],
    'rue' => $_POST['rue'],
    'ville' =>  $_POST['ville'],
    'mail' => $_POST['mail'],
    'telephone' => $_POST['telephone'],
    'cp' => $_POST['cp'],
    'abonnement' => $_POST['abonnement']
));

if($req){
    header('Location:index.php');
}
else{
    echo "Un problème est survenu";
}
?>