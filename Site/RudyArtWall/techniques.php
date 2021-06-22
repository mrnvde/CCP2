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
       <div class="col-12 col-md-10">
            <div id="tete">
               <h4 class="text-center">Voici les techniques de photos :</h4>
            </div>
            <div id="corps" class="container">
                <div class="row">
                    <div>
                        <form method="post" action="">
                            <div class="form-select" id="selectTechImg" name="selectTechImg">
                                    <?php
                                    // On va ici générer de maniière dynamique le contenu du select html
                                    // On boucle sur les résultats obtenus de la requette sql 
                                    // je recupère un objet en reponse donc je le parcours avec un foreach
                                    foreach ($results as $techImg)
                                    {
                                        // Pour chaque ligne trouvées les informations sont enregistrées dans $catfilm je créé une ligne html
                                        // Option avec un attribut value ( <option value="le code de la catégorie"> le nom de la catégorie  </option>)
                                        // pour me simplifier le code je n'utilise pas un echo dans le php c'est pour ca que je ferme la balise php
                                    ?>
                                    <img src="<?= $techImg->IMAGE_LOGO_TECHNIQUES ?>" width="200" height="200"><br>
                                    <span>Technique : <?= $techImg->NOM_TECHNIQUES ?></span><br>
                                    <span>Description : <?= $techImg->DESCRIPTION_LONGUE_TECHNIQUES ?></span><br><br>
                                    <?php 
                                        // Je reouvre la balise php pour fermer l'accolade de la fonction foreach
                                    }
                                    ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </main>

<?php
include("footer.php");
?>