<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<?php
  include('enregistrement.php');
  ?>
    <header>
        <div class="container">
        <div class="p-3 mb-2 text-white p-4 rounded-4 background">
        <div class="row">
        <div class="container">
      <div class="row align-items-start">
          <div class="col">
         <a href="liste.php"><img src="image/joseph.png" alt="" width="40"></a>   
      </div>
      <div class="col ">
      <div class="dive">
          Université Joseph-ki Zerbo
      </div>
    </div>
        <div class="col x">
          <div class="div">unité-progrès-justice</div>
        </div>
        <div class="col">
          <img src="image/flag.png" alt="" whidh="40">
        </div>
      </div>
</div>

    </div>
    </header>
<section class="class">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-xs-5 col-xl-5">
            <div class="co">
            <div class="cole">Bienvenue  sur la plateform de L'UFR/SDS</div>
            <div class="para">UFR/SDS INSCRIPTION</div><br><br><br><br>
           
            <button type="button" class="btn btn-successbtn btn-success">
             <a href="liste.php"><input class="type3" type="submit" value="Affiché la liste"></a>
          </button>
            </div>
        </div>

        <div class="col-md-5 col-lg-5 col-xs-5 col-xl-5 co1">
        <div class="co1"> 
       
             <div>
                <img class="img" src="image/joseph.png" alt="" width="90">
            </div>
          <button   type="button" class="btn btn-successbtn btn-success "><p>inscription</p></button>
           
    <form method="POST" action=""><br>
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col">
          <div class="gold">
          <label for="nom">nom : </label>
          <input type="vachar(20)" id="nom" name="nom">
      </div>
        </div>
    <div class="col">
    <div class="c100">
   <label class="in" for="prenom">prenom : </label>
   <input class="inp" type="vachar(20)" id="prenom" name="prenom">
   </div>
    </div>
  </div>
</div> <br>
 
    <div class="col">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    </div>
    </div> 
    <div class="col">
    <div class="c100">
      <label for="DAte_de_naissance">Date_de_naissance: </label>
     <input type="date" id="Date_de_naissance" name="date_de_naissance">
    
      </div>
    </div>
    <label class="option1" for="validé">Genre: </label>
  <select name="genre" id="" >
    <option>Genre</option>
    <option>Masuclin</option>
    <option>Féminin</option>
  </select><br>
    <div class="col">
    <div class="c100">
      <label for="Date_d'inscription">Date_d'inscription: </label>
     <input type="Date" id="date_d'inscription" name="inscription"><br>
     
      </div>
        </div>
        <label class="option2" for="validé">IC: </label>
        <input type=""name="prevenir"><br>
        <label for="validé">Address_E-Mail </label>
        <input class="type1" name="email" placeholder="E-Mail Address" class="form-control"  type="text"><br>
       <input class="type3" type="submit" name="submit" Value="validé">
</form>
<section class="but">

</section>
      </div>
   
        </div>
    </div>
</div>
</section>
<footer class="footer">
    <div class="row">
     
  <div class="col">
  <div class="">
    Contactez nous
    </div>
  </div>
    <div class="col ">
    <div><br><br>
      ©Copyright 2023 tous droit reservé de l'application. 
</div>
    </div>
    <div class="col">
        <ul class="ul">
            <li>Espace etudiant</li>
            <li>Disponnibilité des enseignant</li>
            <li>2 Début des cours</li>
            <a href="liste.php"><li>voir plus</li></a>
        </ul>
    </div>
</div>
</footer>
</body>
</html>