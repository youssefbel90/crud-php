<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <?php
    $con=mysqli_connect("localhost","root","","bibliothéque");
    $s=mysqli_query($con,"SELECT * FROM livre");
    ?>
    <table border="1" width="100%">
    <tr>
    <th>titre</th>
    <th>auteur</th>
	 <th>image</th>
	  <th>prix</th>
	   <th>quantite</th>
	    <th>date_achat</th>
		<th>date_de_publication</th>
    <th>Remove</th>
    <th>Edit</th>
   
    </tr>
    <?php
while($rows=mysqli_fetch_array($s)){

?>
<tr>
        <td><?php echo $rows['titre']; ?></td>
        <td> <?php echo $rows['auteur']; ?>  </td>
        <td> <?php echo $rows['image']; ?>  </td>
		 <td><?php echo $rows['prix']; ?></td>
        <td> <?php echo $rows['quantite']; ?>  </td>
        <td> <?php echo $rows['date_achat']; ?>  </td>
		<td> <?php echo $rows['date_de_publication']; ?>  </td>
        <td><a href="del.php?i=<?php echo $rows['id'];?>">Supprimer</a></td>
        <td><a href="Edite.php?i=<?php echo $rows['id'];?>">Editer</a></td>


</tr>
<?php
}
?>

  
</body>
</html>