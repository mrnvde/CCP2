<?php
// PARTIE TRAITEMENT PHP 
require_once "DATA_CONFIG/config.php";
require_once "DATA_CONFIG/database.php";

// connection à la base
$db=connectDb();
// ecriture de la requete
$sqlRequest = 'SELECT * FROM USERS';

// Préparation et execution de la requete
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();

// recupération des informations au format objet le 5 en parametre remplace le PDO::FETCH_OBJ
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);

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
                <label for="exampleInputEmail1">Adresse email :</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe :</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </main>

<?php
include("footer.php");
?>