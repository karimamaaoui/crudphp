<?php
session_start();
if (!isset($_SESSION['user']))
{
  header('location:userLogin.php');   
}

?>

<html>
<head>

<title>Home Page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

    body
    {
        background:linear-gradient(to right ,#cbb4d4,#20002c);
        background-position:center;
        background-size:cover;
        
    }
    
    
    h1{
        text-align:center;
        color:white;
        text-transform:uppercase;
    } 
    button{
        display:block;
        width:150px;
        padding:8px;
        border:none;
        outline:none;
        background:linear-gradient(to right ,#cbb4d4,#20002c);
        color:white;
        font-size:20px;
        cursor:pointer;

    }

    a{
      color:#fff !important;
      margin-top:-200px !important;

    }

    h1{
      color:#fff !important;
      margin-top:200px;
      text-align:center;
      text-transform:uppercase;
    }
</style>


</head>
<body>
  
<div class="container">
<button type="button"><a href="logout.php">Deconnecter</a></button>

  <h1>  Bienvenue <?php echo $_SESSION['user']; ?> </h1>
  </div>
<br>
<br>
<br>

  <div class="form-group row">
         <div class="offset-sm-10 col-sm-10">
         <button type="submit"  name="next"><i class="fa fa-save" ></i> <a href="ListeProduit.php"> SUIVANT </a></button>

        </div>
    </div>
   
</body>


</html>
 