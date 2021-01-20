<!DOCTYPE html>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Sign Up Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
                <section class="signup-form">
                    <form action="includes/signup.inc.php" method="post">

                    <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                                <input type="text" class="form-control" name="name" placeholder="Nombre Completo">
                    </div>

                    <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                        <input type="text" class="form-control" name="email" placeholder="Correo Electronico"> 
                    </div>

                    <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                        <input type="text" class="form-control" name="user" placeholder="Usuario"> 
                    </div>

                    <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                        <input type="password" class="form-control" name="pwd" placeholder="Contraseña"> 
                    </div>

                    <div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                        <input type="password" class="form-control" name="confirmpwd" placeholder="Confirmar contraseña"> 
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn float-right login_btn">Sign up</button>
                    </div>
                    </form>
					<?php
					if (isset($_GET["error"]))
					{
						if($_GET["error"] == "emptyinput"){
							echo "<p>Fill in all fields!</p>";
						}
					}
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "invalidUser"){
							 echo "<p >Escoge otro username</p>";
						 }
					 }
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "invalidEmail"){
							 echo "<p>Email incorrecto</p>";
						 }
					 }
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "passwordsdontmatch"){
							 echo "<p>Contraseña incorrecta</p>";
						 }
					 }
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "stmfailed"){
							 echo "<p> Error en el sistema, intenta d enuevo</p>";
						 }
					 }
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "Usernamealredyexist"){
							 echo "<p> Nombre de usuario ya existente, escoge otro</p>";
						 }
					 }
					 else if (isset($_GET["error"]))
					 {
						 if($_GET["error"] == "none"){
							 echo "<p> ya estas dentro apa</p>";
						 }
					 }


					?>


                </section>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>

