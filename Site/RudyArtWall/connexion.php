<?php
// PARTIE TRAITEMENT PHP 
require_once "DATA_CONFIG/config.php";
require_once "DATA_CONFIG/database.php";

$loginAdmin = "";
$passAdmin = "";

if (isset ($_POST["nom_Admin"]) || ($_POST["nom_Admin"] != ""))
{
    $loginAdmin= trim($_POST["nom_Admin"]);
}
if (isset ($_POST["pass_Admin"]) || ($_POST["pass_Admin"] != ""))
{
    $passAdmin= trim($_POST["pass_Admin"]);
}

// connection à la base
$db=connectDb();
// ecriture de la requete
// SELECT * FROM admin WHERE LOGIN_ADMIN = ? AND PASS_ADMIN = ? 
$sqlRequest = 'SELECT * FROM USERS WHERE LOGIN_USERS = ? AND PASS_USERS = ?';

// Préparation et execution de la requete
$sqlResponse = $db->prepare($sqlRequest);

// mettre les parametres
$sqlResponse -> bindParam(1,$loginAdmin);
$sqlResponse -> bindParam(2,$passAdmin);
$sqlResponse->execute();

// recupération des informations au format objet le 5 en parametre remplace le PDO::FETCH_OBJ
$results = $sqlResponse->rowCount();

//deconnexiond de la base
$db=disconnectDb();
?>

<?php
include("header.php");
?>
        
        <main class="row overflow-auto" id="corps">
     <!-- interface de connexion à gerer comme vous le sentez en respectant le design existant-->
            <form id="formConnexion">
              <div class="form-group">
                <label>Adresse email :</label>
                <input type="email" class="form-control" id="nom_Admin">
              </div>
              <div class="form-group">
                <label>Mot de passe :</label>
                <input type="password" class="form-control" id="pass_Admin">
              </div>
              <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </main>

<?php
include("footer.php");
?>