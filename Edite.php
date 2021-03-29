<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i = isset($_GET['i']) ? $_GET['i'] : '';
//empty()
$i = !empty($_GET['i']) ? $_GET['i'] : '';
$i = $_GET['i'] ?? '';

?>
<form method="POST">
     <input type="Hidden" name="id" value="<?php echo $i;?>">
    <input type="text" name="titre"></br></br>
    <input type="text" name="auteur"></br></br>
<input type="file" name="image"></br></br>
    <input type="number" name="prix"></br></br>
	<input type="number" name="quantite"></br></br>
    <input type="date" name="date_achat"></br></br>
	<input type="date" name="date_de_publication"></br></br>
    <input type="submit" name="up" value="Editer">
    </form>
    <?php
    if(isset($_POST['up'])){
$con=mysqli_connect("localhost","root","","bibliothéque");
$id=$_POST['id'];
$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$image=$_POST['image'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$date_achat=$_POST['date_achat'];
$date_de_publication=$_POST['date_de_publication'];
mysqli_query($con,"UPDATE livre set titre='$titre',auteur='$auteur',image='$image',prix='$prix',quantite='$quantite',date_achat='$date_achat',date_de_publication='$date_de_publication' where id='$id'");
    header("location:affichage.php");
    }
    ?>
</body>
</html>