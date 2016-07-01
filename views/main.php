<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Users control</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">

  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
               <script type="text/javascript" src="js/bootstrap.js"></script>
<!--        <script type="text/javascript" src="js/npm.js"></script>-->

    </head>
    <div class="container">
        <div class="centrado1">
            <div class="texto">VECSA</div>
        </div>
        <div class="centrado2">
<!--            <a href="index.php?c=controller&a=listadoUsuarios2&; ?" class="btn btn-danger btn-lg">Entrar</a>-->
                <a href="#" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#login-modal">Entrar</a>
                
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
                                        <form action="">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
<!--					<input type="submit" name="login" class="login loginmodal-submit" value="Login">-->
                                                        <a href="index.php?c=controller&a=listadoUsuarios2&; ?" class="btn btn-default  ">Login</a>					
				  </form>
                      <br/>
				  <div class="login-help">

					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
        </div>
    </div>
    
