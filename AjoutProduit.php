<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Ajout Produit</title>
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
    
    // Récupération du territoire et de l'abonnement de l'utilisateur
    $req = $bdd->query("SELECT util_territoire, util_abonnement FROM utilisateurs WHERE util_surnom = '$surnom'");
    $donnees = $req->fetch();

    $territoire = $donnees['util_territoire'];
    $abonnement = $donnees['util_abonnement'];
    ?>

    <div>
        <!-- Partie gauche de la page -->
        <div>
            <form action="AjoutProduit.php?surnom=<?php echo $surnom;?>" method="post">
                <p>
                    <label for="motif">Motif</label>
                    <select name="motif" id="motif" class="case">
                        <optgroup label="Temps">
                            <option value="1/4h Plourin">1/4h</option><?php ?>
                            <option value="1h Jeune">1h Jeune</option>
                        </optgroup>
                        <optgroup label="Copieur">
                            <option value="A3 Couleur">A3 Couleur</option>
                            <option value="A3 NB">A3 NB</option>
                            <option value="A4 Couleur">A4 Couleur </option>
                            <option value="A4 NB">A4 NB</option>
                            <option value="Numérisation" selected>Numérisation</option>
                        </optgroup>
                        <optgroup label="AE">
                            <option value="Assistance Express">Assistance Express</option>
                            <option value="Dom Express">Dom Express</option>
                            <option value="Réinstallation Système">Réinstallation Système</option>
                        </optgroup>
                        <optgroup label="Moments accompagnés">
                            <option value="Carte 5 séances">Carte 5 séances</option>
                            <option value="Séance à l’unité">Séance à l’unité</option>
                        </optgroup>
                        <optgroup label="Abonnements">
                            <option value="Abonnement familial">Abonnement familial</option>
                            <option value="Abonnement individuel">Abonnement individuel</option>
                            <option value="Info-Sport-Jeunes ">Info-Sport-Jeunes</option>
                        </optgroup>
                        <optgroup label="Cycles">
                            <option value="Cycle initiation Plourin">Cycle initiation Plourin</option>
                            <option value="Cycle Hors Plourin">Cycle Hors Plourin</option>
                            <option value="Cycle perfectionnement Hors Plourin">Cycle perfectionnement Hors Plourin</option>
                            <option value="Cycle perfectionnement Plourin">Cycle perfectionnement Plourin</option>
                        </optgroup>
                        <optgroup label="Adhésion Clubs">
                            <option value="Fablab">Fablab</option>
                            <option value="Fablab Jeunes">Fablab Jeunes</option>
                            <option value="Généalogie">Généalogie</option>
                        </optgroup>
                        <optgroup label="3D">
                            <option value="Impression">Impression</option>
                            <option value="Scan">Scan</option>
                            <option value="Modélisation">Modélisation</option>
                        </optgroup>
                        <optgroup label="Services">
                            <option value="Entrée gratuite">Entrée gratuite</option>
                            <option value="Numérisation K7">Numérisation K7</option>
                        </optgroup>
                        <optgroup label="Stages">
                            <option value="Dossiers et pièces jointes">Dossiers et pièces jointes</option>
                            <option value="Facebook-Twitter">Facebook-Twitter</option>
                            <option value="Impression 3d">Impression 3d</option>
                            <option value="Livre photo">Livre photo</option>
                            <option value="Picasa">Picasa</option>
                            <option value="Rapport de stage">Rapport de stage</option>
                            <option value="Bureautique">Bureautique</option>
                            <option value="Emails">Emails</option>
                            <option value="Tableur">Tableur</option>
                            <option value="Vidéo">Vidéo</option>
                            <option value="Tablettes">Tablettes</option>
                            <option value="Smartphone">Smartphone</option>
                            <option value="Traitement de texte">Traitement de texte</option>
                            <option value="Dossiers et pièces jointes hors Plourin">Dossiers et pièces jointes hors
                                Plourin
                            </option>
                            <option value="Facebook-Twitter hors Plourin">Facebook-Twitter hors Plourin</option>
                            <option value="Impression 3d  hors Plourin">Impression 3d hors Plourin</option>
                            <option value="Livre photo  hors Plourin">Livre photo hors Plourin</option>
                            <option value="Picasa  hors Plourin">Picasa hors Plourin</option>
                            <option value="Rapport de stage  hors Plourin">Rapport de stage hors Plourin</option>
                            <option value="Bureautique hors Plourin">Bureautique hors Plourin</option>
                            <option value="Emails  hors Plourin">Emails hors Plourin</option>
                            <option value="Tableur  hors Plourin">Tableur hors Plourin</option>
                            <option value="Vidéo  hors Plourin">Vidéo hors Plourin</option>
                            <option value="Tablettes  hors Plourin">Tablettes hors Plourin</option>
                            <option value="Smartphone  hors Plourin">Smartphone hors Plourin</option>
                            <option value="Traitement de texte  hors Plourin">Traitement de texte hors Plourin</option>
                        </optgroup>
                        <optgroup label="Journées thématiques">
                            <option value="Smartphone">Smartphone</option>
                            <option value="Tablette">Tablette</option>
                            <option value="Réseaux sociaux">Réseaux sociaux</option>
                            <option value="Demi-journée">Demi-journée</option>
                            <option value="Généalogie">Généalogie</option>
                        </optgroup>
                        <optgroup label="Tournois">
                            <option value="Tournoi Minecraft">Tournoi Minecraft</option>
                            <option value="Tournoi Trackmania">Tournoi Trackmania</option>
                        </optgroup>
                        <optgroup label="Fournitures">
                            <option value="DVD DL Vierge">DVD DL Vierge</option>
                            <option value="DVD Vierge">DVD Vierge</option>
                        </optgroup>
                    </select>
                </p>
                <p>
                    <label for="quantite">
                        <span>Quantité :</span>
                    </label>
                    <input type="number" id="quantite" name="quantite" value="1">
                </p>
                <p>
                    Type de payement :<br />
                    <input type="radio" name="typePayement" value="Chèque" id="cheque"><label
                        for="cheque">Chèque</label><br />
                    <input type="radio" name="typePayement" value="Chèque APTIC" id="chequeAPTIC"><label
                        for="chequeAPTIC">Chèque APTIC</label><br />
                    <input type="radio" name="typePayement" value="Espèce" id="espece"><label
                        for="espece">Espèce</label><br />
                    <input type="radio" name="typePayement" value="Solde compte" id="soldeCompte"><label
                        for="soldeCompte">Solde compte</label>
                </p>
                <p>
                <div class="centre">
                    <button type="submit">Ajouter</button>
                </div>
                </p>
            </form>
        </div>

        <!-- Partie droite de la page -->
        <div action="AjoutProduit.php" method="post">
            <form>
                <p>
                    Récapitulatif :</br>
                    <br/>
                    <?php

                    // Récupération des données du formulaire
                    if(isset($_POST['motif'])){
                        $motifPayement = $_POST['motif'];
                        echo 'Motif de payement : '.$motifPayement.'<br/>';

                        // Récupération du prix en fonction du motif de payement
                        if($motifPayement == "1/4h"){
                            $reqPrixProduit = $bdd->query(
                                "SELECT prod_prix FROM produits
                                INNER JOIN utilisateurs
                                ON produits.util_territoire = utilisateurs.util_territoire
                                WHERE produits.util_abonnement = utilisateurs.util_abonnement AND utilisateurs.util_surnom = '$surnom' AND produits.prod_nom = '1/4h';"
                            );
                            $donneesPrixProduit = $reqPrixProduit->fetch();
                        }
                        else{
                            $reqPrixProduit = $bdd->query(
                                "SELECT prod_prix FROM produits
                                INNER JOIN utilisateurs
                                ON produits.util_abonnement = utilisateurs.util_abonnement
                                WHERE prod_nom = '$motifPayement' AND utilisateurs.util_surnom = '$surnom';"
                            );
                            $donneesPrixProduit = $reqPrixProduit->fetch();
                        } 
                    }

                    if(isset($_POST['typePayement'])){
                        $typePayement = $_POST['typePayement'];
                        echo 'Type de payement : '.$typePayement.'<br/>';
                    }
                    
                    if(isset($donneesPrixProduit)){
                        $prixProduit = $donneesPrixProduit['prod_prix'];
                        echo "Prix du produit : ".$prixProduit."<br/>";
                    }
                    
                    if(isset($_POST['quantite'])){
                        $quantite = $_POST['quantite'];
                        echo 'Quantité : '.$quantite.'<br/>';
                    }

                    if(isset($prixProduit) AND isset($quantite)){
                        $prixFinal = $prixProduit * $quantite;
                        echo "Prix total : ".$prixFinal;
                    }
                    ?>
                </p>
                <p>
                <div class="centre">
                    <button type="submit">Valider</button>
                </div>
                </p>
            </form>
        </div>

    </div>
</body>

</html>