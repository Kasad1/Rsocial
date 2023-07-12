<!-- <?php
include'header.php';
?>
<?php 
if (isset($_POST['ok'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $naiss=$_POST['naiss'];
    $genre=$_POST['genre'];

    $sql="INSERT INTO users(nom,prenom,email,password,naiss,genre)VALUES('$nom','$prenom','$mail','$password','$naiss','$genre')";
    $resultat=mysqli_query($conn,$sql);
        if ($resultat) {
            echo "Incription reussie";
        }
}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-primary col-md-6 col-md-offset-3">
    <div class="panel panel-heading">
        
    <h3><center>Inscription</center></h3>
    </div>
    <div class="panel panel-body">
        <form class="form" action="profil.php" method="POST">
            <div class="form-group">
            <label class="control-label">
                Nom
            </label>
            <input class="form-control" type="text" name="nom"> 
            </div>
            <div class="form-group">
            <label class="control-label">
                Prenom
            </label>
            <input class="form-control" type="text" name="prenom">  
            </div>
            <div class="form-group">
            <label class="control-label">
                Email
            </label>
            <input class="form-control" type="text" name="mail">   
            </div>
            <div class="form-group">
            <label class="control-label">
                Mot De Passe
            </label>
            <input class="form-control" type="text" name="password">    
            </div>
            <div class="form-group">
            <label class="control-label">
                Date de Naissance
            </label>
            <input class="form-control" type="date" name="naiss">    
            </div>
            <div class="form-group">
            <label class="control-label">
                Sexe
            </label>
            <input type="radio" name="genre" value="M">M
            <input type="radio" name="genre" value="F">F
            </div>
           
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="ok">S'inscrire</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php 
include'footer.php';
 ?> -->






<?php
include'header.php';
?>


<?php 
if (isset($_POST['ok'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $naiss=$_POST['naiss'];
    $genre=$_POST['genre'];

    $sql="INSERT INTO users(nom,prenom,email,password,naiss,genre)VALUES('$nom','$prenom','$mail','$password','$naiss','$genre')";
    $resultat=mysqli_query($conn,$sql);
        if ($resultat) {
            echo "Incription reussie";
        }
}

 ?>

<!DOCTYPE html>
<head>
        <title>My ARBS | login</title>
</head>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
        #bar{
            height:100px; 
            background-color: rgb(59,89,152); 
            color: #d9dfeb; 
            padding: 4px;
        }
        #signup_button{
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;

        }
        #bar2{
            background-color: white;
             width:400px;
              margin: auto; 
              margin-top:50px;
              padding: 10px;
              padding-top: 30px;
              text-align: center;
              font-weight: bold;
        }
        #text{

            height: 25px;
            width: 300px;
            border-radius: 4px;
            border:solid 1px #ccc;
            padding: 4px;
            font-size: 14px;

        }

        #button{
            width: 300px;
            height: 40px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color: rgb(59,89,152); 
            color: white;
            
        }
    
    </style>
    <body style="font-family: tahoma; background-color: #e9ebee;">
        <!-- <div id="bar">
            <div style="font-size: 40px;">My ARBS</div>
            <div id="signup_button">Log in</div>
        </div> -->

        <div class="panel panel-body">
        <form class="form" action="profil.php" method="POST">
            <div class="form-group">
        <div id="bar2">
            Sign up to ARBS<br><br>

            <input type="text" id="text" placeholder="Nom" name="Nom"><br><br>
            <input type="text" id="text" placeholder="Prenom" name="Prenom"><br><br>
            
            <div>genre:</div><br>
            <select id="text">
                <option> </option>
                <option>M</option>
                <option>F</option>
            </select>
            <br>
            <br>
            <input type="text" id="text" placeholder="Email" name="Email"><br><br>

            <input type="date" id="text" placeholder="Naiss" name="nass"><br><br>

            
            <input type="password" id="text" placeholder="Password" name="password"><br><br>
            <input type="password" id="text"placeholder="Retype-Password" name="password"><br><br>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="ok">S'inscrire</button>
            </div>
            <br>
            <br>
            <br>
            
        </div>

    </body>
</html>

<?php
include'footer.php';
?>