<?php
include 'conx.php';
if (!empty($_GET['id']))
{
    $id=$_GET['id'];
    $nom=$_POST['nom'];
    $description=$_POST['description'];
    $prix=$_POST['prix'];
    $categorie=$_POST['categorie'];  
    $imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];
        
  if($imgFile)
  {
   $upload_dir = 'upload/'; // upload directory 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   $userpic = rand(1000,1000000).".".$imgExt;
   if(in_array($imgExt, $valid_extensions))
   {   
    if($imgSize < 5000000)
    {
     unlink($upload_dir.$produit['image']);
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else
    {
     echo "Sorry, your file is too large it should be less then 5MB";
    }
   }
   else
   {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   } 
  }
  else
  {
   // if no image selected the old image remain as it is.
   $userpic = $produit['userPic']; // old image from database
  } 
      
  
  // if no error occured, continue ....
  if (!empty($_GET['id']))
  {
      $id=$_REQUEST['id'];
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * from produits where id=?";
      $query=$pdo->prepare($sql);
      $query->execute(array($id));
      $produit=$query->fetch(PDO::FETCH_ASSOC);
      $nom=$produit['nom'];
      $description=$produit['description'];
      $prix=$produit['prix'];
      $image=$produit['image'];
    
  }
  
      $query=$pdo->query('SELECT id,nom FROM categories');
      $categories=$query->fetchAll(PDO::FETCH_ASSOC);
  
 }

 include "editerProd.phtml";
 ?>