<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<div class="p-3 mb-2 text-white">
    <h2 class="h2">liste des apprenants
    <div class="col">
         <a href="index.php"><img class="flag" src="image/joseph.png" alt="" width="40"></a>   
      </div>
    </h2>
    
</div>

   <table class="table table-striped table-bordered tableau ta">
<tr >
    <th scope="col">Nom</th>
    <th scope="col">Prenom</th>
    <th scope="col">Naissance</th>
    <th scope="col">Genre</th>
    <th scope="col">Date_inscription</th>
    <th scope="col">I.C</th>
    <th scope="col">Adress_Email</th>
</tr>
<?php
require'connexion.php';

$query ="SELECT * from liste";
$stmt =$conn-> query($query);
while($row = $stmt->fetch()) {
    echo"<tr>";   
        echo"<td>".$row['nom']."</td>";
        echo"<td>".$row['prenom']."</td>";
        echo"<td>".$row['date_de_naissance']."</td>";
        echo"<td>".$row['genre']."</td>";
        echo"<td>".$row['inscription']."</td>";
        echo"<td>".$row['prevenir']."</td>";
        echo"<td>".$row['email']."</td>";
    echo "</tr>";  
};

?>
</table>
</body>
</html>
</div>
     