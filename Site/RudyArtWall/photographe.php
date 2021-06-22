<?php
// PARTIE TRAITEMENT PHP 
require_once "DATA_CONFIG/config.php";
require_once "DATA_CONFIG/database.php";

// connection à la base
$db=connectDb();
// ecriture de la requete
$sqlRequest = 'SELECT * FROM PHOTOGRAPHE';

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
            <div class="col-sm-8">
                <!-- information sur le photogrpahe 
                NOM et Prenom provenant de la BDD
                Puis la description du photographe provenant de la BDD ( le lorem ipsum est autorisé pour les descriptions)
                -->
                <p>
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                    Lorem ipsum dolor sit amet? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, magnam, dolores illum dolore, ipsum eum laboriosam tenetur, optio doloribus nisi vero iusto possimus fugiat obcaecati accusantium consectetur! Quo repellat, temporibus.
                </p>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                
                <!-- image du photographe provenant de la bdd-->
                
                <img src="https://picsum.photos/seed/picsum/1920/1080" class="img-fluid"  alt="welcome">
            </div>
        </main>

<?php
include("footer.php");
?>