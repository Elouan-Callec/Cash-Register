<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";

if(isset($_POST['surnom'])){
    $req = $bdd->prepare("UPDATE utilisateurs SET util_solde = util_solde + :prix WHERE util_surnom = :surnom");
    $req->execute(array(
        'prix' => $_POST['prix'],
        'surnom' => $_POST['surnom']
    ));

    if($req){
        header('Location:index.php');
    }
    else{
        echo "Un problème est survenu";
    }
}


?>