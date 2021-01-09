<?php
session_start();
if (isset($_POST['login']))
{
	if ( $_POST['login'] == 'user1' && $_POST['pwd'] == '1234')
	{

		$_SESSION['user'] = ['id'=>1,'nom'=>'','login'=>'user1'];
        header ('location: ListeProduit.php');
        exit();
	}
	else
	{
        include("login.phtml");
    }
}
else
{
	include("login.phtml");
}


?>

