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
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

    // Récupération des données sur l'utilisateur
    $req = $bdd->query("SELECT * FROM utilisateurs WHERE util_surnom = '$surnom'");
    $donnees = $req->fetch();

    $prenom = $donnees['util_prenom'];
    $nom = $donnees['util_nom'];
    $adresse = $donnees['util_adresse'];
    $codePostal = $donnees['util_cp'];
    $ville = $donnees['util_ville'];
    $mail = $donnees['util_email'];
    $telephone = $donnees['util_telephone'];
    $territoire = $donnees['util_territoire'];
    $abonnement = $donnees['util_abonnement'];
    $solde = $donnees['util_solde'];
    ?>

    <!-- Création du formulaire -->
    <form method="POST" action="provisoire.php">
        <h1 class="border">Modification utilisateur</h1>
        <section>
            <h3>Surnom, nom et prénom</h3>

            <div class="container">
                <div class="leftUtil">
                    <p>
                        <label for="surnom">
                            <span>Surnom</span>
                        </label>
                        <input type="text" name="surnom" id="surnom" class="case" />
                    </p>
                </div>
                <div class="centerUtil">
                    <p>
                        <label for="prenom">
                            <span>Prénom</span>
                        </label>
                        <input type="text" name="prenom" id="prenom" class="case">
                    </p>
                </div>
                <div class="rightUtil">
                    <p>
                        <label for="nom">
                            <span>Nom</span>
                        </label>
                        <input type="text" name="nom" id="nom" class="case">
                    </p>
                </div>
            </div>
        </section>

        <br />
        <br />
        <br />
        <section>
            <h3>Adresse</h3>

            <p>
                <label for="rue">
                    <span>Rue</span>
                </label>
                <input type="text" name="rue" id="rue" class="case">
            </p>
            <p>
                <label for="cp">
                    <span>Code postal</span>
                </label>
                <input type="number" name="cp" id="cp" class="case">
            </p>
            <p>
                <label for="ville">
                    <span>Ville</span>
                </label>
                <input type="text" name="ville" id="ville" class="case">
            </p>
        </section>

        <section>
            <h3>Coordonées</h3>

            <p>
                <label for="email">
                    <span>E-mail</span>
                </label>
                <input type="email" name="email" id="email" class="case">
            </p>
            <p>
                <label for="tel">
                    <span>Téléphone </span>
                </label>
                <input type="tel" name="tel" id="tel" class="case">
            </p>
        </section>

        <br />
        <section>
            <p>
                <label for="groupeUtil">Groupe d'utilisateurs</label>
                <select name="groupeUtil" id="groupeUtil" class="case">
                    <optgroup label="Abonné">
                        <option value="AdulteAboCommu">Adulte abonné commune</option>
                        <option value="AdulteAboHorsCommu">Adulte abonné hors commune</option>
                    </optgroup>
                    <optgroup label="Non abonné">
                        <option value="AdulteNaCommu">Adulte non abonné commune</option>
                        <option value="AdulteNaCCPI">Adulte non abonné CCPI</option>
                        <option value="AssoNaHorsCCPI">Adulte non abonné hors CCPI</option>
                        <option value="JeuneNaCCPI">Jeune non abonné CCPI</option>
                        <option value="JeuneNaHorsCCPI">Jeune non abonné hors CCPI</option>
                        <option value="JeuneNaCommu">Jeune non abonné commune</option>
                    </optgroup>
                    <optgroup label="Autre">
                        <option value="Assoc">Association</option>
                    </optgroup>
                </select>
            </p>
            <p>
                <label for="solde">
                    <span>Solde</span>
                </label>
                <input type="number" name="solde" id="solde" class="case">
            </p>
            <p>
                <label for="abonnement">
                    <span>Abonnement</span>
                </label>
                <select name="groupeUtil" id="groupeUtil" class="case">
                        <option value="Assoc">provisoire</option>
                </select>
            </p>


        </section>
        <div class="centre">
            <button type="submit">Valider</button>
        </div>
    </form>
</body>

</html>