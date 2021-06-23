<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Accueil</title>
</head>

<body>
    <div>
        <p class="HP">Informations utilisateur</p>
    </div>

    <?php
    include "NavBar.html"
    ?>

    <div>
        <div>
        </div>
        <div>
            <table>
                <thead>
                    <tr class="trHF">
                        <th>Surnom</th>
                        <th>Solde</th>
                        <th>Détails</th>
                        <th>Ajouter Produit</th>
                        <th>Ajouter Crédits</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr class="trHF">
                        <th>Surnom</th>
                        <th>Solde</th>
                        <th>Détails</th>
                        <th>Ajouter Produit</th>
                        <th>Ajouter Crédits</th>
                    </tr>
                </tfoot>

                <tbody>
                    <tr>
                        <td>ecallec</td>
                        <td>10€</td>
                        <td><a href="DetailsUtilisateur.php"><img src="style/img/detailsUser.png"></td>
                        <td><a href="AjoutProduit.php"><img src="style/img/addProduit.png"></td>
                        <td><a href="AjoutCrédits.html"><img src="style/img/addCredits.png"></td>
                    </tr>
                    <tr>
                        <td>test Surnom</td>
                        <td>test Solde</td>
                        <td><a href="DetailsUtilisateur.php"><img src="style/img/detailsUser.png"></td>
                        <td><a href="AjoutProduit.php"><img src="style/img/addProduit.png"></td>
                        <td><a href="AjoutCrédits.html"><img src="style/img/addCredits.png"></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <div>
            <p><a href="AjoutUtilisateur.html"><img src="style/img/userAdd.png"></p>
        </div>
    </div>
</body>

</html>