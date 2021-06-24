<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Détails Utilisateur</title>
</head>

<body>

    <?php
    // Verrifie si on récupère bien le surnom
    if(isset($_GET['surnom'])){
        $surnom = $_GET['surnom'];
    }
    // Redirection vers la page principal si non
    else{
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
    
    // Récupération des données sur l'utilisateur
    $req = $bdd->query("SELECT * FROM utilisateurs WHERE util_surnom = '$surnom'");
    $donnees = $req->fetch();

    $prenom = $donnees['util_prenom'];
    $nom = $donnees['util_nom'];
    $rue = $donnees['util_rue'];
    $codePostal = $donnees['util_cp'];
    $ville = $donnees['util_ville'];
    $mail = $donnees['util_email'];
    $telephone = $donnees['util_telephone'];
    $territoire = $donnees['util_territoire'];
    $abonnement = $donnees['util_abonnement'];
    $solde = $donnees['util_solde'];
    ?>

    <div>
        <p class="HP">Détails utilisateur</p>
    </div>

    <!-- Ajout de la barre de navigation -->
    <?php
    include "NavBar.html";
    ?>
    

    <!-- Création du tableau -->
    <div>
        <div>
            <table class="tableDU">
                <caption class="captionDU">
                    <div class="global">
                        <div>
                            <p class="left"><?php echo $surnom; ?></p>
                        </div>
                        <div>
                            <!-- Envoie du surnom de l'utilisateur choisi à la page UpdateDetailsUtilisateur -->
                            <a href="UpdateDetailsUtilisateur.php?surnom=<?php echo $surnom;?>" class="right"><img src="style/img/update.png" class="imgCaptionDU"></a>
                        </div>
                    </div>
                </caption>

                <tbody>
                    <tr>
                        <td class="fontDU">Prénom</td>
                        <td><?php echo $prenom; ?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Nom</td>
                        <td><?php echo $nom;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Rue</td>
                        <td><?php echo $rue;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Code postal</td>
                        <td><?php echo $codePostal;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Ville</td>
                        <td><?php echo $ville;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">E-mail</td>
                        <td><?php echo $mail;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Téléphone</td>
                        <td><?php echo $telephone;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Territoire</td>
                        <td><?php echo $territoire;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Abonnement</td>
                        <td><?php echo $abonnement;?></td>
                    </tr>
                    <tr>
                        <td class="fontDU">Solde</td>
                        <td><?php echo $solde;?></td>
                    </tr>
                    
                    <tr>
                        <td class="fontDU">Historique des actions</td>
                        <td><a href="#"><img src="style/img/historique.png" class="imgTabDU"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>