<?php
// PARTIE TRAITEMENT PHP 
require_once "DATA_CONFIG/config.php";
require_once "DATA_CONFIG/database.php";

    // connection à la base
    $db=connectDb();
    // ecriture de la requete
    $sqlRequest = 'SELECT * FROM CATEGORIES';

    // Préparation et execution de la requete
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();

    // recupération des informations au format objet le 5 en parametre remplace le PDO::FETCH_OBJ
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);

    //deconnexiond de la base
    $db=disconnectDb();

include("header.php");
?>

    <main class="row overflow-auto" id="corps">  
        <div class="container overflow-hidden">
          <div class="row gx-5">
            <div class="col">
                <div class="p-5 border bg-dark">
                    <?php
                    foreach ($results as $catImg){
                    ?>

                        <img id="imgSmall" src="<?= $catImg->IMAGE_LOGO_CATEGORIES ?>" width="200" height="200"><br>
                        <span>Catégorie : <?= $catImg->NOM_CATEGORIES ?></span><br>
                        <span>Description : <?= $catImg->DESCRIPTION_LONGUE_CATEGORIES ?></span><br><br>
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