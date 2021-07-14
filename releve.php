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
                    $req = $bdd->query('SELECT relev_id, relev_date FROM releves ORDER BY relev_id DESC');

                    while($donnees = $req->fetch()){
                    ?>
                    <tr>
                        <td>
                            <?php echo $donnees['relev_id']; ?>
                        </td>
                        <td>
                            <?php echo $donnees['relev_date']; ?>
                        </td>
                        <td><a href="#"><img src="style/img/detailsReleve2.png"></td>
                        <td><a href="ReqDeleteReleve.php?relev_id=<?php echo $donnees['relev_id'];?>"><img src="style/img/delete.png"></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>