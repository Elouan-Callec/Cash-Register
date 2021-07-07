<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Ajout Produit</title>
</head>

<body>

    <?php
    // Verrifie si on récupère bien le surnom
    if(isset($_GET['surnom'])){
        $surnom = $_GET['surnom'];
    }
    // Redirection vers la page principal si non
    else{
        header('Location:index.php');
    }

    // Récupération du solde de l'utilisateur
    $req = $bdd->prepare("SELECT util_solde FROM utilisateurs WHERE util_surnom = :surnom");
    $req->execute(array(
        'surnom' => $surnom));
    $donnees = $req->fetch();

    $solde = $donnees['util_solde'];
    ?>

    <div>
        <form method="POST" action="provisoire.php" class="smallForm">
            <p class="titre">Ajout de crédits</p>
            <div class="centre">
                <p><h3>Solde actuel : <?php echo $solde.'€';?></h3></p>
            </div>
            <div class="centre">
                <p>
                    <label for="prix">
                        <span>Prix :</span>
                    </label>
                    <input type="number" id="prix" name="prix" value="1">
                </p>
            </div>
            <div>
                <p>
                <div class="centre">
                    <button type="submit">Ajouter</button>
                </div>
                </p>
            </div>
        </form>
    </div>

</body>

</html>