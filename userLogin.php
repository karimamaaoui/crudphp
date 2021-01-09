<!Doctype html>
<html>
<head>
<meta charset="utf-8"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    body
    {
        background:linear-gradient(to right ,#cbb4d4,#20002c);
        background-position:center;
        background-size:cover;
        
    }
    
    .container{
        
        right:20px;
        top:60px;
        left:50%;
        font-size:25px;
        cursor:pointer;
        
        padding:20px;
        border-radius:4px;
        background:rgba(255,255,255,0.25);
        border:1px solid rgba(255,255,255,0.18);
        
    }
    h1{
        text-align:center;
        color:white;
        text-transform:uppercase;
    } 
    form{
        margin:40px;
    }
    label{
        display:block;
        color:white;
        font-size:18px;
        margin-top:20px;
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
    .login-box{
        max-width:700px;
        margin:150px auto;
        float:none;


    }

    #background		{background-image: url("https://images6.alphacoders.com/729/thumb-1920-729100.jpg");
				width: 1500px;
				height: 2000px;
				position: relative;
				margin-left: auto;
				margin-right: auto;
				vertical-align: middle;
				background-position: top center;
				background-repeat:no-repeat		
}

.login-left{
    background:rgba(211,211,211,0.5);
    padding:20px;
    
    
}
.login-right{
    background:RGB(215, 219, 221 );
    padding:20px;
    
    
}

</style>

</head>

<body>
<div id="background">

    <div class="container">

        <div class="login-box">
        <div class="row">
        <div class="col-md-15 login-left">
        <h1>Créer un compte </h1>

        <form action="register.php" method="post" >
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="user" class="form-control" required>    
        </div>

        <div class="form-group">        
            <label>PASSWORD</label>
            <input type="password" name="pwd" class="form-control ">   
        </div> 

        <div class=" col-sm-10 col-form" >        
            <button type="submit"  class="btn btn-primary">Connexion</button>
        </div>        
        </form>
    </div>

    <div class="col-md-15 login-right">
        <h1>Connecter</h1>

        <form action="Validation.php" method="post" >
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="user" class="form-control" required>    
        </div>

        <div class="form-group">        
            <label>PASSWORD</label>
            <input type="password" name="pwd" class="form-control ">   
        </div> 

        <div class=" col-sm-10 col-form" >        
            <button type="submit"  class="btn btn-primary">Connexion</button>
        </div>        
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>