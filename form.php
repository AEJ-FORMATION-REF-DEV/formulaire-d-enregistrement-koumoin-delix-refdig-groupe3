<?php
require_once 'groupe.php';
if(isset($_POST['valider'])){
           
            $nom=htmlspecialchars($_POST['user_nom']);
            $prenoms=htmlspecialchars($_POST['user_prenoms']);
            $numero_AEJ=htmlspecialchars($_POST['user_numero_AEJ']);
            $telephone=htmlspecialchars($_POST['user_telephone']);
            $email=htmlspecialchars($_POST['user_email']);
            $fonction=htmlspecialchars($_POST['user_fonction']);

             $servname = 'localhost';
            $dbname = 'andrea';
            $user = 'root';
            $pass = '';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
            }
            
            catch(PDOException $e){
              echo "<p> Erreur : probleme d'access a la base de données </p>" . $e->getMessage();
            }
                $sql = "INSERT INTO etudiant (nom,prenoms,numero_aej,telephone,imail,fonction) 
                        VALUES ('$nom','$prenoms','$numero_AEJ','$telephone','$email','$fonction')";
                
              $dbco->exec($sql);
              echo 'Super !!! vous êtes enregistré ';








            // //requete d'isertion
            // $lire = $famille->prepare('INSERT INTO etudiant VALUES(null, :nom, :prenoms, :numero_AEJ, :telephone, :email, :fonction, null)');

            // //lier chaque marqueur a une valeurs 
            // $lire->bindValue(':nom', $name);
            // $lire->bindValue(':prenoms', $prenoms);
            // $lire->bindValue(':numero_AEJ', $numero_AEJ);
            // $lire->bindValue(':telephone', $telephone);
            // $lire->bindValue(':email', $email);
            // $lire->bindValue(':fonction', $fonction);
            // $lire->execute();
}

?>