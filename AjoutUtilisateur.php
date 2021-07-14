<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Ajout Utilisateur</title>
</head>

<body>
    <!-- Création du formulaire -->
    <form method="POST" action="ReqAjoutUtilisateur.php">
        <div class="titre">
            <p class="border">Modification utilisateur</p>
        </div>
        <section>
            <h3>Surnom, nom et prénom</h3>

            <div class="container">
                <div class="leftUtil">
                    <p>
                        <label for="surnom">
                            Surnom
                        </label>
                        <input type="text" name="surnom" id="surnom" class="case"/>
                    </p>
                </div>
                <div class="rightUtil">
                    <p>
                        <label for="nom">
                            Nom
                        </label>
                        <input type="text" name="nom" id="nom" class="case"/>
                    </p>
                </div>
                <div class="rightUtil">
                    <p>
                        <label for="prenom">
                            Prénom
                        </label>
                        <input type="text" name="prenom" id="prenom" class="case"/>
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
            <input type="number" step="0.01" name="solde" id="solde" class="case"/>
        </section>

        <br />

        <section>
            <h3>Adresse</h3>

            <p>
                <label for="rue">
                    <span>Rue</span>
                </label>
                <input type="text" name="rue" id="rue" class="case"/>
            </p>
            <p>
                <label for="cp">
                    <span>Code postal</span>
                </label>
                <input type="number" name="cp" id="cp" class="case"/>
            </p>
            <p>
                <label for="ville">
                    <span>Ville</span>
                </label>
                <input type="text" name="ville" id="ville" class="case"/>
            </p>
        </section>

        <br />

        <section>
            <h3>Coordonées</h3>

            <p>
                <label for="mail">
                    <span>E-mail</span>
                </label>
                <input type="mail" name="mail" id="mail" class="case"/>
            </p>
            <p>
                <label for="telephone">
                    <span>Téléphone </span>
                </label>
                <input type="telephone" name="telephone" id="telephone" class="case"/>
            </p>
        </section>

        <div class="centre">
            <button type="submit">Valider</button>
        </div>
    </form>
</body>

</html>