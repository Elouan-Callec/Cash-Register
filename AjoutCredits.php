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

    if(isset($_POST['prix'])){
    ?>

    <div>
        <form method="POST" action="ReqAjoutCredits.php" class="smallForm">
            <input type="hidden" value="<?php echo $_POST['prix']; ?>" name="prix">
            <input type="hidden" value="<?php echo $surnom; ?>" name="surnom">
            <div class="titre">
                <p class="border">Ajout de crédits</p>
            </div>
            <div class="centre">
                <p><h3>Solde actuel de <span class="voyant"><?php echo $surnom;?></span> : <?php echo $solde.'€';?></h3></p>
            </div>
            <div class="centre">
                <p>Vous aller créditer ce compte de <span class="voyant"><?php echo $_POST['prix'];?>€</p>
                
            </div>
            <div class="centre">
            <p>Voulez-vous confirmer ?</p>
                <p>
                    <button type="submit">Confirmer</button>
                </p>
            </div>
            </p>
        </form>
    </div>

    <?php
    }
    else{
    ?>
    
    <div>
        <form method="POST" action="AjoutCredits.php?surnom=<?php echo $surnom;?>" class="smallForm">
            <!-- <input type="hidden" value="<?php echo $surnom; ?>" name="surnom"> -->
            <div class="titre">
                <p class="border">Ajout de crédits</p>
            </div>
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
            <p>
                <div class="centre">
                    <button type="submit">Ajouter</button>
                </div>
            </p>
        </form>
    </div>

    <?php
    }
    ?>

</body>

</html>