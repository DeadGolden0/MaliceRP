<!DOCTYPE html>
<html lang="fr">
<head>
	<title>MaliceRP | Administration</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<meta name="keywords" content="MaliceRP, roleplay, gta5rp, gtarp, Malice">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Css Styles -->
	<link rel="stylesheet" href="css/admin.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/670c9b9132.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<div class="container">
		<div class="img">
		</div>
		<div class="login-content">
			<form method="POST" action="">
				<img src="img/avatar.svg">
				<h2 class="title">Panel d'Administration</h2>
				<h3 clas="error"></h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Identifiant</h5>
           		   		<input type="text" name="pseudoconnect" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de Passe</h5>
           		    	<input type="password" name="mdpconnect" class="input" required>
            	   </div>
            	</div>
            	<input type="submit" name="formconnexion" class="btn" value="Login">
            </form>
		</div>
	</div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>

