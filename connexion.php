<?php
try
{
    //Connexion à la base de données
    $host = "localhost";
    $servername = "cash_register";
    $user = "root";
    $password = "password";
    $bdd = new PDO("mysql:host=$host:3307;dbname=$servername;charset=utf8", $user, $password);
}
catch (Exception $e)
{
    //Message en cas d'erreur
    die('Erreur : '.$e->getMessage());
}


/*

$reponse = $bdd->query('SELECT util_surnom FROM utilisateurs LIMIT 10');

while ($donnees = $reponse->fetch())
{
?>
    <p>
        <strong>Surnom</strong> : <?php echo $donnees['util_surnom']; ?><br/>
    </p>
<?php
}

$reponse->closeCursor();


*/

?>


