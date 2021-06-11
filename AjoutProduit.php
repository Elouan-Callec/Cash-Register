<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Ajout Produit</title>
</head>

<body>
    <div>
        <form action="AjoutProduit.php" method="post">
            <p>
                <label for="motif">
                    <span>Motif :</span>
                </label>
                <input type="text" id="motif" name="motif">
            </p>
            <p>
                <label for="quantite">
                    <span>Quantité :</span>
                </label>
                <input type="number" id="quantite" name="quantite">
            </p>
            <p>
                Type de payement :<br/>
                <input type="checkbox" name="cheque" id="cheque"><label for="cheque">Chèque</label><br/>
                <input type="checkbox" name="chequeAptic" id="chequeAptic"><label for="chequeAptic">Chèque APTIC</label><br/>
                <input type="checkbox" name="espece" id="espece"><label for="espece">Espèce</label><br/>
                <input type="checkbox" name="compte" id="compte"><label for="compte">Compte</label>
            </p>
            <p>
                <div class="centre">
                    <button type="submit">Valider</button>
                </div>
            </p>
                  
        </form>
    </div>
    

    <p>Vous avez fourni les informations suivantes :</p>

    <?php
        if(isset($_POST["prenom"])){
            $prenom = $_POST["prenom"];
            echo 'Prénom : '.$prenom.'<br/>';
        }
    ?>
</body>

</html>