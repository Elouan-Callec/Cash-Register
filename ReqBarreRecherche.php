<?php
include "connexionBDD.php";

if(isset($_POST['surnom'])){
    $req = $bdd->prepare("SELECT util_surnom, util_solde FROM utilisateurs WHERE util_surnom = :surnom");
    $req->execute(array('surnom' => $_POST['surnom']));
}

?>