<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";

$surnom = $_POST['surnom'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$territoire = $_POST['territoire'];
$abonnement = $_POST['abonnement'];
$solde = $_POST['solde'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];
$id = $_POST['id'];

if(isset($surnom)){
    $req = $bdd->prepare("UPDATE utilisateurs
                          SET util_surnom = :surnom, 
                              util_prenom = :prenom, 
                              util_nom = :nom, 
                              util_rue = :rue, 
                              util_cp = :cp, 
                              util_ville = :ville, 
                              util_email = :mail, 
                              util_telephone = :telephone, 
                              util_territoire = :territoire, 
                              util_abonnement = :abonnement, 
                              util_solde = :solde
                          WHERE util_id = :id");
    $req->execute(array(
        'surnom' => $surnom,
        'prenom' => $prenom,
        'nom' => $nom,
        'rue' => $rue,
        'cp' => $cp,
        'ville' => $ville,
        'mail' => $mail,
        'telephone' => $telephone,
        'territoire' => $territoire,
        'abonnement' => $abonnement,
        'solde' => $solde,
        'id' => $id
        ));

    if($req){
        header('Location:DetailsUtilisateur.php?surnom='.$surnom);
    }
    else{
        echo "Un problème est survenu";
    }
}
?>
