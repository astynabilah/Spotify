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
<body>
    
    <p class ="text-center"><img src="assets/logo2.PNG" style="width:60px; height:60px;"><b><font color :black; font size="100"> Spotify</font></b></p>
    
    <div class="login-form">
    <form action="<?php echo site_url('Login/log_in');?>" method="post">
        <h2 class="text-center"></h2> 
        <div class="form-group">
            <input type="text" class="form-control" placeholder="e-mail" required="required" name="e-mail">
        </div> 
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" required="required" name="Name">
        </div>      
        <div class="form-group">
            <input type="date" class="form-control" required="required" name="date">
        </div>             
        <div class="form-group">
              <input type="radio" name="gender" value="male" checked> Male
              <input type="radio" name="gender" value="female"> Female
              <input type="radio" name="gender" value="other"> Other
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
    </div>
</body>
</html>   