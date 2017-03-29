<html>
	<head>
		<title>login</title>
	</head>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				 <form name = "frmModalLogin" action="valida_login.php" method="post">
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
		  
		  
		<body>
			<form name="frmLogin" action="valida_login.php" method="post">
			
			<center><h2>Faca seu Login</h2></center><br><br><br>
			
			<center> Usuario: <input type="text" name="usuario" id="usuario"></center><br>
			<center> Senha: <input type="password" name="senha" id="senha"></center><br>
			
			<br><center> <input type="submit" class="btn btn-primary" value="Acessar"></center>
			
			</form>
			
			
			<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
		<div class="row">
				<div class="col-lg-4">
					<p>
						2017-Desenvolvido por Giliard
							Vasconcelos</p> 
							</div>
			<div class="col-lg-8">
							Linkedin   <a
							href="https://br.linkedin.com/in/giliard-vasconcelos-3126a468/en"><img src="imagens/linkedin.jpeg"
			class="img-circle" alt="Cinque Terre" width="35"
			height="35"><a>
					
				</div>
			
			
          
			
			<div class="col-lg-12">
			
			Facebook
			<a href="https://www.facebook.com/giliard.goncalves.3"><img src="imagens/seguir.bmp"
			class="img-circle" alt="Cinque Terre" width="35"
			height="35"></a>
			</div>
            
            </div>
        </footer>

    </div>
    <!-- /.container -->
		</body>
</html>