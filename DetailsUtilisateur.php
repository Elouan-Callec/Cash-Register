<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Détails Utilisateur</title>
</head>

<body>
    <div>
        <p class="HP">Détails utilisateur</p>
    </div>

    <?php
    include "NavBar.html"
    ?>
    
    <div>
        <div>

        </div>
        <div>
            <table class="tableDU">
                <caption class="captionDU">
                    <div class="global">
                        <div>
                            <p class="left">ecallec</p>
                        </div>
                        <div>
                            <a href="UpdateDetailsUtilisateur.html" class="right"><img src="style/img/update.png" class="imgCaptionDU"></a>
                        </div>
                    </div>
                </caption>

                <tbody>
                    <tr>
                        <td class="fontDU">Prénom</td>
                        <td>Elouan</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Nom</td>
                        <td>Callec</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Adresse</td>
                        <td>14 Hameaux de keruscat</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Code postal</td>
                        <td>29 830</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Ville</td>
                        <td>Ploudalmézeau</td>
                    </tr>
                    <tr>
                        <td class="fontDU">E-mail</td>
                        <td>callec.elouan29@gmail.com</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Téléphone</td>
                        <td>07 86 67 59 39</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Territoire</td>
                        <td>Hors CCPI</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Abonnement</td>
                        <td>Non Abonné</td>
                    </tr>
                    <tr>
                        <td class="fontDU">Solde</td>
                        <td>10€</td>
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