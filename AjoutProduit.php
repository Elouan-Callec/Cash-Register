<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Ajout Produit</title>
</head>

<body>
    <form action="AjoutProduit.php" method="post">
        <div>
            <label for="prenom">
                <span>Prénom :</span>
            </label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="centre">
            <button type="submit">Valider</button>
        </div>      
    </form>

    <p>Vous avez fourni les informations suivantes :</p>

    <?php
        echo 'Prénom : '.$_POST["prenom"].'<br/>';
    ?>
</body>

</html>