<?php
 
session_start();
if(empty($_POST))
{
    include 'conx.php';

    $query=$pdo->query('SELECT id,nom FROM categories');
    $categories=$query->fetchAll(PDO::FETCH_ASSOC);
    
    include 'addProduit.phtml';

}
else{     
     
     include "conx.php";  
    

        $images=$_FILES['image']['name'];
        $type=$_FILES['image']['type'];
        $size=$_FILES['image']['size'];
        $temp=$_FILES['image']['tmp_name'];
        var_dump($temp);
        $folder ="upload/";
        $path=$folder.$images;
        $allowed=array('jpeg','png' ,'jpg'); $images=$_FILES['image']['name']; 

        $ext=pathinfo($images, PATHINFO_EXTENSION);
        
        if (file_exists($path)) {
            $images=rand().$images;
            $path=$folder.$images;
          }
        if(!in_array($ext,$allowed) ) 
        
        { 
         
          echo" Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
      
        
        }
        
        else{ 
        
        move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
      
          
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query=$pdo->prepare('INSERT INTO `produits`(`nom`, `description`,`prix`, `image`,`categories_id`, `created_at`, `updated_at`) VALUES (? ,? ,? ,? ,? ,NOW(),NOW())');
        $query->execute(array($_POST['nom'],$_POST['description'],$_POST['prix'], $images,$_POST['categorie']));
     

        header('location:ListeProduit.php?id=' .$pdo->lastInsertId());
        exit();

 
    }  
         

}

  $_SESSION['message']="Produit a ajoutée ";
  $_SESSION['msg']= "succees";
        
    


?>

