<?php
$id=$_GET['i'];
$con=mysqli_connect("localhost","root","","bibliothéque");
mysqli_query($con,"DELETE FROM livre where id='$id'");
header("location:affichage.php");
?>
