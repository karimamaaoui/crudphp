<?php
$id=$_GET['id'];

require ("conx.php");

$sql="DELETE from produits where id =?";

$query=$pdo->prepare($sql);

$query->execute([$id]);


header("location:ListeProduit.php");

/*if ()
{
    $todelete = $_POST['deletetask']; 
    $sql = $pdo->prepare("DELETE FROM produits WHERE id = ?");
        foreach ($todelete as $id)
            $sql->execute($id);
}*/

?>
