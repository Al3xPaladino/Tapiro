<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
  <?php session_start(); require 'secure/notForLog.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <script src="js/validateLogin.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body> 
	<img loading="lazy" draggable="false" onclick="window.location.href='index.php'" src="img/logo_login.svg" class="logo">
	<div class="linkTo">
		<p> Non hai un account? <a href="singup.php" id="aRegister">Registarati</a></p>
	</div>
	<div class="box-form">

	    <ul class="tabs">
			<li>
				<a class="active">LOG-IN</a>
				
			</li>
			<hr id="hr_log">
	  	</ul>

		<div id="login" class="form-action show">
		
	    	<form name="loginForm" id="loginForm"  action="mod_login.php" onsubmit="return validateLogin()"  method="post">
				<!-- --elimina span- -->
				<span <?php if(isset($_SESSION['erroL']) && ($_SESSION['erroL'] == "Registrazione effettuata!" || $_SESSION['erroL'] == "Email per recupero password inviata!" || $_SESSION['erroL'] == "Password resettata!")){
		          			echo "class='succ'";
		          		} else if(isset($_SESSION['erroL'])){ 
		          			echo "class='erro'";
		          		}
						?> id="resL"><?php if(isset($_SESSION['erroL'])){ echo $_SESSION['erroL']; } ?>
				</span>
				<?php 
					if(isset($_SESSION['erroL'])){ echo "<script>setTimeout(function(){ document.getElementById('resL').removeAttribute('class') }, 5000);</script>"; }
					unset($_SESSION['erroL']);
				?>
				<br>
				<input type="email" id="email" name="email" placeholder="Email*" required>
				<br>
				<input type="password" id="pasw" name="pass" placeholder="Password*" class="pasw" required><div id="showPaswL" class="mostra" onclick="showPasw('showPaswL', 'pasw')">Mostra</div>
				<br>
					<div id="footerLogin">
						<p class="obbligatorio">*Campo obbligatorio</p>
						<br>
						<input type="checkbox" id="savePasw" name="savePasw" value="savePassword"> <label for="savePasw"> Ricorda la mia password</label>
						<br>
						<input type="submit" name="submit" value="ACCEDI" class="button" rel="noopener noreferrer">
					</div>
				<a onclick="document.getElementById('popup').style.display='block';" rel="noopener noreferrer" class="dimenticata">Password dimenticata?</a>
			</form>
			<!-- ----------- POPUP -------------- -->
				<div id="popup" class="modal">
					<div class="modal-content">
					    <form name="richiestaEmail" id="richiestaEmail" onsubmit="return validateEmail()" action="mod_email.php" method="post">
					    	<div id="popClose" class="popClose" onclick="document.getElementById('popup').style.display='none'">X
							</div>
								<p class="titlePop">PASSWORD DIMENTICATA?</p>
								<span <?php if(isset($_SESSION['erroE'])){
											echo "class='erro'";
										}
										?> id="resE"><?php if(isset($_SESSION['erroE'])){ echo $_SESSION['erroE']; } ?>
								</span>
									<?php 
										if(isset($_SESSION['erroE'])){ echo "<script>setTimeout(function(){ document.getElementById('resE').removeAttribute('class') }, 5000);</script>"; }
										unset($_SESSION['erroE']);
									?>
								<input type="email" name="email" class="popEmail" placeholder="Inserisci la tua email" required>
								<br>
								<div id="footerLogin">
									<p class="obbligatorio">*Campo obbligatorio</p>
									<br>
									<input type="submit" name="submit" value="PROSEGUI" class="popButton" rel="noopener noreferrer">
								</div>
						</form>
					</div>
				</div>
			<!-- ----------------------------------- -->
	  	</div>
	</div>

	<footer id="footer">@diritti riservati al Gruppo 2</footer>
		
	<script src="js/form.js"></script>
</body>
</html>