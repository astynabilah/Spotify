<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
body {
    font-family: "Lato", sans-serif;
}
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        width : 45%;
        padding-left : 100;
    }
</style>
</head>
<body >
    <p class ="text-center"><img src="assets/cat.PNG" style="width:60px; height:60px;"><b><font color :black; font size="100"> Catify </font></b></p>
    
    <div class="login-form"  >
    <form action="<?php echo site_url('SignUp/register');?>" method="post">
        <h2 class="text-center"></h2> 
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" required="required" name="name">
        </div> 
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="username">
        </div> 
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>             
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Sign Up</button>
        </div>
        <?php echo $this->session->flashdata('message');?>       
    </form>
    <p class="text-center">Already have account?   <a href="Login">Login</a></p>
    </div>
</body>
</html>   