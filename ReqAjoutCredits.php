<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";

$req = $bdd

if(isset($_POST['surnom'])){
    // Modification du solde de l'utilisateur
    $req = $bdd->prepare("UPDATE utilisateurs SET util_solde = util_solde + :prix WHERE util_surnom = :surnom");
    $req->execute(array(
        'prix' => $_POST['prix'],
        'surnom' => $_POST['surnom']
    ));
    $requete_pdo->closeCursor();

    // Récupération de l'id de l'utilisateur
    $req2 = $bdd->prepare("SELECT util_id FROM utilisateurs WHERE util_surnom = :surnom");
    $req2->execute(array(
        'surnom' => $_POST['surnom'];
    ));
    $donnees = $req2->fetch();
    $req2->closeCursor();

    // Récupération de l'id du produit
    $req3 = $bdd->prepare("SELECT prod_id FROM produits WHERE prod_nom = :produit")
    $req3->execute(array(
        "produit" => $_POST['typePayement'];
    ));
    $donnees = $req3->fetch();
    $req3->closecursor();

    if($req){
        header('Location:index.php');
    }
    else{
        echo "Un problème est survenu";
    }
}


?>