<?php
if(empty($_POST))
{

    include 'addCat.phtml';

}
else{
    //insertiton categorie
    include 'conx.php';
    $sql='INSERT INTO categories (nom,description,created_at,updated_at)
    VALUES (?,?,NOW(),NOW())';
    $query=$pdo->prepare($sql);

    $query->execute([$_POST['nom'],$_POST['description']]);
    
    //print_r ($_POST);

    header('location:listeCat.php');
    exit();
}


?>