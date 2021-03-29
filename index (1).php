<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <h1  class="logo">LIBRARY</h1>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#" class="active">Books</a></li>
            </ul>
        </nav>
    </header>
<form method="POST">
   
<input type="text" name="titre"></br></br>
    <input type="text" name="auteur"></br></br>
<input type="file" name="image"></br></br>
    <input type="number" name="prix"></br></br>
	<input type="number" name="quantite"></br></br>
    <input type="date" name="date_achat"></br></br>
	<input type="date" name="date_de_publication"></br></br>
    <input type="submit" name="ins" value="Ajouter">
    </form>
    <?php
    if(isset($_POST['ins'])){
$con=mysqli_connect("localhost","root","","bibliothéque");
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$image=$_POST['image'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$date_achat=$_POST['date_achat'];
$date_de_publication=$_POST['date_de_publication'];
mysqli_query($con,"INSERT INTO livre(titre,auteur,image,prix,quantite,date_achat,date_de_publication) VALUES ('$titre','$auteur','$image','$prix','$quantite','$date_achat','$date_de_publication')");
echo"<h1> Success </h1>";
    }
    ?>
</body>
</html>