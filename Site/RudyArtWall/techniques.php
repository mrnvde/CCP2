<?php
// PARTIE TRAITEMENT PHP 
require_once "DATA_CONFIG/config.php";
require_once "DATA_CONFIG/database.php";

// connection à la base
$db=connectDb();
// ecriture de la requete
$sqlRequest = 'SELECT * FROM TECHNIQUES';

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
        <div class="container overflow-hidden">
          <div class="row gx-5">
            <div class="col">
                <div class="p-5 border bg-dark">
                    <?php
                    foreach ($results as $techImg){
                    ?>

                        <img id="imgSmall" src="<?= $techImg->IMAGE_LOGO_TECHNIQUES ?>" width="200" height="200"><br>
                        <span>Catégorie : <?= $techImg->NOM_TECHNIQUES ?></span><br>
                        <span>Description : <?= $techImg->DESCRIPTION_LONGUE_TECHNIQUES ?></span><br><br>
                    <?php
                    }
                    ?>
                </div>
            </div>
          </div>
        </div>
    </main>

<?php
include("footer.php");
?>