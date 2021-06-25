<?php
$VotreAdresseMail= "marinevandromme@live.fr";//mettez ici votre adresse mail
if(isset($_POST['envoyer'])) { // si le bouton "Envoyer" est appuyé
    //on vérifie que le champ mail est correctement rempli
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
        //on vérifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entrée est incorrecte";
        }else{
            //on vérifie que le champ sujet est correctement rempli
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                //on vérifie que le champ message n'est pas vide
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    //tout est correctement renseigné, on envoi le mail
                    //on renseigne les entêtes de la fonction mail de PHP
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['mail'].">\r\n";
                    //on prépare les champs:
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                    //en fin, on envoi le mail
                    if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo '<script language="Javascript">
                        alert ("l\'email à bien été envoyé" )
                        </script>';
                    } else {
                        echo '<script language="Javascript">
                        alert ("une erreur est survenue, l\'email n\'a pas été envoyé" )
                        </script>';
                    }
                }
            }
        }
    }
}

include("header.php");
?>

    <main class="row overflow-auto" id="corps">  
        <div class="container overflow-hidden">
          <div class="row gx-5">
            <div class="">
                <div class="p-5 border bg-dark">
                    <form action="contact.php" method="post">
                        <input type="text" name="mail" placeholder="Votre adresse email"/>
                        <input type="text" name="sujet" placeholder="Sujet de votre demande" />
                        <br><br>
                        <textarea name="message" cols="50" rows="6" placeholder="Votre message"></textarea><br>
                        <span>tous les champs sont obligatoires</span>
                        <br><br>
                        <input type="submit" name="envoyer" value="Envoyer" />
                    </form>
                </div>
            </div>
          </div>
        </div>
    </main>

<?php
include("footer.php");
?>