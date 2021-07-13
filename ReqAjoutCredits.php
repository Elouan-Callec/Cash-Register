<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";

if(isset($_POST['surnom'])){
    // Modification du solde de l'utilisateur
    $req = $bdd->prepare("UPDATE utilisateurs SET util_solde = util_solde + :prix WHERE util_surnom = :surnom");
    $req->execute(array(
        'prix' => $_POST['prix'],
        'surnom' => $_POST['surnom']
    ));
    $req->closeCursor();

    // Récupération de l'id de l'utilisateur
    $req2 = $bdd->prepare("SELECT util_id FROM utilisateurs WHERE util_surnom = :surnom");
    $req2->execute(array(
        'surnom' => $_POST['surnom']
    ));
    $donnees = $req2->fetch();
    $req2->closeCursor();

    // Récupération de l'id du produit
    $req3 = $bdd->prepare("SELECT prod_id FROM produits WHERE prod_nom = :produit");
    $req3->execute(array(
        "produit" => 'Approvisionnement du compte'
    ));
    $donnees2 = $req3->fetch();
    $req3->closecursor();

    // Récupération de la date du jour
    date_default_timezone_set('Europe/Paris');
    $date = date('d-m-y H:i:s');

    // Insertion du nouveau relevé
    $req4 = $bdd->prepare("INSERT INTO releves (util_id, prod_id, relev_date, relev_typepayement, relev_prix)  VALUES (:idUtilisateur, :produit, :dateReleve, :typePayement, :prixReleve)");
    $req4->execute(array(
        'idUtilisateur' => $donnees['util_id'],
        'produit' => $donnees2['prod_id'],
        'dateReleve' => $date,
        'typePayement' => $_POST['typePayement'],
        'prixReleve' => $_POST['prix']
    ));
    $req4->closecursor();

    if($req){
        header('Location:index.php');
    }
    else{
        echo "Un problème est survenu";
    }
}


?>