<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Modification détails utilisateur</title>
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

    // Récupération des données sur l'utilisateur
    $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE util_surnom = :surnom");
    $req->execute(array(
        'surnom' => $surnom));
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

    <!-- Création du formulaire -->
    <form method="POST" action="ReqUpdateDetailsUtilisateur.php">
        <input type="hidden" value="<?php echo $donnees['util_id']; ?>"  name="id">
        <h1 class="border">Modification utilisateur</h1>
        <section>
            <h3>Surnom, nom et prénom</h3>

            <div class="container">
                <div class="leftUtil">
                    <p>
                        <label for="surnom">
                            Surnom
                        </label>
                        <input type="text" name="surnom" id="surnom" class="case" value= "<?php echo $surnom;?>"/>
                    </p>
                </div>
                <div class="rightUtil">
                    <p>
                        <label for="nom">
                            Nom
                        </label>
                        <input type="text" name="nom" id="nom" class="case" value= "<?php echo $nom;?>">
                    </p>
                </div>
                <div class="rightUtil">
                    <p>
                        <label for="prenom">
                            Prénom
                        </label>
                        <input type="text" name="prenom" id="prenom" class="case" value= "<?php echo $prenom;?>">
                    </p>
                </div>
            </div>
        </section>

        <br />
        <br />
        <br />

        <section>
            <h3>Tarifs</h3>

            <p>
                <label for="territoire">
                    <span>Territoire</span>
                </label>
                <select name="territoire" id="territoire" class="case">
                    <option value="HorsPlourin">Hors Plourin</option>
                    <option value="Plourin">Plourin</option>
                    <option value="HorsCCPI">Hors CCPI</option>
                    <option value="CCPI">CCPI</option>
                    </optgroup>
                </select>
            </p>
            <p>
                <label for="abonnement">
                    <span>Abonnement</span>
                </label>
                <select name="abonnement" id="abonnement" class="case">
                    <option value="NonAbonne">Non Abonné</option>
                    <option value="Abonne">Abonné</option>
                </select>
            </p>
            <label for="solde">
                <span>Solde</span>
            </label>
            <input type="number" name="solde" id="solde" class="case" value= "<?php echo $solde;?>">
        </section>

        <br />

        <section>
            <h3>Adresse</h3>

            <p>
                <label for="rue">
                    <span>Rue</span>
                </label>
                <input type="text" name="rue" id="rue" class="case" value= "<?php echo $rue;?>">
            </p>
            <p>
                <label for="cp">
                    <span>Code postal</span>
                </label>
                <input type="number" name="cp" id="cp" class="case" value= "<?php echo $codePostal;?>">
            </p>
            <p>
                <label for="ville">
                    <span>Ville</span>
                </label>
                <input type="text" name="ville" id="ville" class="case" value= "<?php echo $ville;?>">
            </p>
        </section>

        <br />

        <section>
            <h3>Coordonées</h3>

            <p>
                <label for="mail">
                    <span>E-mail</span>
                </label>
                <input type="mail" name="mail" id="mail" class="case" value= "<?php echo $mail;?>">
            </p>
            <p>
                <label for="telephone">
                    <span>Téléphone </span>
                </label>
                <input type="telephone" name="telephone" id="telephone" class="case" value= "<?php echo $telephone;?>">
            </p>
        </section>

        <div class="centre">
            <button type="submit">Valider</button>
        </div>
    </form>
</body>

</html>