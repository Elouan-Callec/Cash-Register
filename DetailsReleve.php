<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Relevés</title>
</head>

<body>

    <?php
    // Verrifie si on récupère bien le surnom
    if(isset($_GET['relev_id'])){
        $relevId = $_GET['relev_id'];
    }
    // Redirection vers la page principal si non
    else{
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

    // Récupération des informations du relevé
    $req = $bdd->prepare("SELECT * FROM releves WHERE relev_id = :relev_id");
    $req->execute(array(
        'relev_id' => $relevId));
    $donnees = $req->fetch();
    $req->closeCursor();

    // Récupération du nom et prénom de l'utilisateur
    $req2 = $bdd->prepare("SELECT util_nom, util_prenom FROM utilisateurs WHERE util_id = :util_id");
    $req2->execute(array(
        'util_id' => $donnees['util_id']));
    $donnees2 = $req2->fetch();
    $req2->closeCursor();

    // Récupération du motif, de son prix et de la quantité du motif
    $req3 = $bdd->prepare("SELECT prod_nom, prod_prix FROM produits WHERE prod_id = :prod_id");
    $req3->execute(array(
        'prod_id' => $donnees['prod_id']
    ));
    $donnees3 = $req3->fetch();
    $req3->closeCursor();

    ?>

    <div class="centre">
        <h3>
        <span>CYBERESPACE DE PLOURIN</span><br>
        <span>Place an ty Kear</span></br>      
        <span>29830 PLOURIN</span>
        </h3>
    </div>
    <div class="HPreleve">
        <span>Date : <?php echo $donnees['relev_date']; ?></span><br/>
        <span>Client : <?php echo $donnees2['util_nom'].' '.$donnees2['util_prenom']; ?></span></br>
        <span>ID Relevé : <?php echo $relevId;?></span>
    </div>
    <div class="MPreleve">
        <span>Motif : <?php echo $donnees3['prod_nom']; ?></span><br/>
        <span>Prix motif : <?php echo $donnees3['prod_prix']; ?></span><br/>
        <span>Quantité : </span><br/>
        <span>Type de payement : <?php echo $donnees['relev_typepayement']; ?></span>
    </div>        
    <div class="MPreleve">
        <span><h3>Total : <?php echo $donnees['relev_prix']; ?>€</span>
    </div>
    <div class="BPreleve">
        <span>cyber@plourin.fr</span><br/>
        <span>http://cyber.plourin.fr</span>
    </div>      
</body>

</html>