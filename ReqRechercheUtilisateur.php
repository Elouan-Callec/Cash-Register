<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php";
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

    <div class="recherche">
        <span class="text">Surnom de l'utilisateur</span>
        <form method="POST" action="ReqRechercheUtilisateur.php" id="recherche">
                <input type="search" class="champ" name="surnom" id="surnom" placeholder="Ex : a.aldain">
                <button type="submit" class="bouton">Rechercher</button>
        </form>
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

                <tbody>
                    <?php
                    // Récupération des données dans la BDD
                    if(isset($_POST['surnom'])){
                        $req = $bdd->prepare("SELECT util_surnom, util_solde FROM utilisateurs WHERE util_surnom = :surnom");
                        $req->execute(array('surnom' => $_POST['surnom']));
                    }

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
                        <td><a href="AjoutCredits.php?surnom=<?php echo $surnomUtilisateur;?>"><img src="style/img/addCredits.png"></td>
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