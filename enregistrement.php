
<?php
      
           if(isset($_POST['submit'])) {
      
              $nom =$_POST['nom'];
              $prenom=$_POST['prenom'];
              $date_de_naissance=$_POST['date_de_naissance'];
              $genre=$_POST['genre'];
              $inscription=$_POST['inscription'];
              $prevenir=$_POST['prevenir'];
              $email=$_POST['email'];

              include('connexion.php');
              try{
                $sql = "INSERT INTO liste (nom, prenom, date_de_naissance, genre, inscription, prevenir, email) VALUES (:nom,:prenom,:date_de_naissance,:genre,:inscription,:prevenir,:email)";
                $stmt = $conn->prepare($sql );
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam (':prenom', $prenom);
                $stmt->bindParam(':date_de_naissance', $date_de_naissance);
                $stmt->bindParam(':genre', $genre);
                $stmt->bindParam(':inscription', $inscription);
                $stmt->bindParam(':prevenir', $prevenir);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $success = true;
                header('location: liste.php');
                exit();
              }
              catch(PDOException $e){
                die ('erreur:' . $e->getMessage());
              }
              echo('reussi');
              }
            
      