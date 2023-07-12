<?php 
include'header.php';
 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <a class="navbar-brand" href="index.php">My ARBS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </div>
  </button>

  
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="note.php">Notification</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index.php">Deconnexion</a>
      </li>
     
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Recherche">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
 
</nav>

<!--Post-->

<!DOCTYPE html>
<html>
<head>
    <title>Publier Sur My ARBS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 400px;
            margin-top: 30px;
        }
        .post {
            margin-bottom: 20px;
        }
        div{
          margin-bottom: 20px;
          max-width: 400px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><center><b>Publier Sur My ARBS</b></center></h2>
        <form action="profil.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre">Titre :</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="form-group">
                <label for="contenu">Contenu :</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Ajouter une photo :</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary" name="pub">Publier</button>
        </form>
    </div>

</body>
</html>



<!--PHP Post-->
<?php 
if (isset($_POST['pub'])) {

$titre = $_POST['titre'];
$contenu = $_POST['contenu'];


$photo = $_FILES['photo']['name'];
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["photo"]["name"]);


move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);


$sql = "INSERT INTO post (titre, contenu, photo) VALUES ('$titre', '$contenu', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo "Post publié avec succès.";
} else {
    echo "Erreur lors de la publication du post: " . $conn->error;
}

 

}
?>




<?php 
        $sql = "SELECT * FROM post ORDER BY id_p DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          
            while ($row = $result->fetch_assoc()) {
                $id_p = $row['id_p'];
                $titre = $row['titre'];
                $contenu = $row['contenu'];
                $photo = $row['photo'];
                $aime = 0;
                $comment = array();
                
                echo '<div class="post">';
                echo '<h4>' . $titre . '</h4>';
                echo '<p>' . $contenu . '</p>';
                if (!empty($photo)) {
                    echo '<img src="uploads/' . $photo . '" class="img-fluid" alt="Image">';
                }
                echo '<div class="actions">';
                echo '<button class="btn btn-secondary">J\'aime (' . $aime . ')</button>';
                echo '<button class="btn btn-secondary">Commenter (' . count($comment) . ')</button>';
                echo '<button class="btn btn-secondary">Partager</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Aucun post disponible.';
        }
        
 ?>

        
 <?php 
include'footer.php';
  ?>