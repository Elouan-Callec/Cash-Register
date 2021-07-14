<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Relevés</title>
</head>

<?php
if(isset($_GET['relev_id'])){
?>

<body>
    <div>
        <form method="POST" action="ReqDeleteReleve.php" class="smallForm">
            <input type="hidden" value="<?php echo $_GET['relev_id']; ?>" name="relev_id">
            <div class="centre">
            <p>Voulez-vous confirmer la suppression du relevé numéro <span class="voyant"><?php echo $_GET['relev_id']; ?></span> ?</p>
                <p>
                    <button type="submit">Confirmer</button>
                </p>
            </div>
        </form>
    </div>
</body>

<?php
}else{
    echo "Aucun relevé choisi";
}

if(isset($_POST['relev_id'])){
    $req = $bdd->prepare("DELETE FROM releves WHERE relev_id = :id");
    $req->execute(array(
        'id' => $_POST['relev_id']
    ));

    if($req){
        header('Location:releve.php');
    }
    else{
        echo "Un problème est survenu";
    }
}
?>