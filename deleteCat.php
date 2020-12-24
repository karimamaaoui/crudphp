<?php
$msg = '';

$id=$_GET['id'];

require ("conx.php");

$sql="DELETE from categories where id =?";

$query=$pdo->prepare($sql);

$query->execute([$id]);

header("location:listeCat.php");

?>
