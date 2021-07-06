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

    <!-- Ajout de la barre de navigation -->
    <?php
    include "NavBar.html";
    ?>

    <!-- Création du tableau -->
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
                    <?php
                    // Récupération des données dans la BDD
                    $req = $bdd->query('SELECT util_surnom, util_solde FROM utilisateurs ORDER BY util_surnom');

                    while($donnees = $req->fetch()){
                        $surnomUtilisateur = $donnees['util_surnom'];
                        $soldeUtilisateur = $donnees['util_solde'];
                    ?>
                    <tr>
                        <td>
                            <?php echo $surnomUtilisateur; ?>
                        </td>
                        <td>
                            <?php echo $soldeUtilisateur."€"; ?>
                        </td>
                        <!-- Envoie du surnom de l'utilisateur choisi à la page DetailsUtilisateur -->
                        <td><a href="DetailsUtilisateur.php?surnom=<?php echo $surnomUtilisateur;?>"><img
                                    src="style/img/detailsUser.png"></td>
                        <td><a href="AjoutProduit.php?surnom=<?php echo $surnomUtilisateur;?>"><img
                                    src="style/img/addProduit.png"></td>
                        <td><a href="AjoutCrédits.html"><img src="style/img/addCredits.png"></td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="ajoutUtilisateur">
            <p><a href="AjoutUtilisateur.html"><img src="style/img/userAdd.png"></p>
        </div>
    </div>
</body>

</html>