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
    <div>
        <p class="HP">Relevés</p>
    </div>

    <!-- Ajout de la barre de navigation -->
    <?php
    include "NavBar.html"
    ?>

    <!-- Création du tableau -->
    <div>
        <div>
            <table class="tableReleve">
                <thead>
                    <tr class="trHF">
                        <th>Identifiant</th>
                        <th>Date</th>
                        <th>Détails</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr class="trHF">
                        <th>Identifiant</th>
                        <th>Date</th>
                        <th>Détails</th>
                        <th>Supprimer</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php
                    // Récupération des données dans la BDD
                    $req = $bdd->query('SELECT util_id, util_surnom, util_solde FROM utilisateurs ORDER BY util_surnom');

                    while($donnees = $req->fetch()){
                    ?>
                    <tr>
                        <td>6</td>
                        <td>09/06/2021 15:42</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>date</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    <tr>
                        <td>4</td>
                        <td>date</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>date</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    <tr>
                        <td>2</td>
                        <td>date</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>date</td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="#"><img src="style/img/delete.png"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>