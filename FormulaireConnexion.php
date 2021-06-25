<!-- Connexion a la base de donnees -->
<?php
include "connexionBDD.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Formulaire Connexion</title>
</head>

<body>

<?php
// récupération du login et password du formulaire
if(isset($_POST['login'])){
    $login = $_POST['login'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

// requête pour rechercher le login et password de l'admin
if(isset($login) AND isset($password)){
    $req = $bdd->prepare('SELECT admin_login, admin_password, admin_prenom FROM administrateurs WHERE admin_login = :login');
    $req->execute(array(
        'login' => $login));
    $resultat = $req->fetch();
}


if(isset($login, $password) AND $login === $resultat['admin_login'] AND $password === $resultat['admin_password']){
    // redirection vers la page principal
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{ 
    // message d'erreur et réaffichage du formulaire
    echo 'Mauvais identifiant ou mot de passe !';
    
?>

   <form method="POST" action="FormulaireConnexion.php" class="formConnexion">
        <p class="titre">Login</p>
        <div class="centre">
            <p>
                <label for="login"></label>
                <input type="text" name="login" id="login" placeholder="Login" class="case" />
            </p>
        </div>
        <div class="centre">
            <p>
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Password" class="case" />
            </p>
        </div>
        <br />
        <div>
            <button type="submit" class="loginButton">LOGIN</button>
        </div>
    </form>

<?php   
}
?>


</body>

</html>



 