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
  <script src="js/splash.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
	<img loading="lazy" draggable="false" onclick="window.location.href='index.php'" src="img/logo_login.svg" class="logo">
	<div class="box-form">

	<!--form-action-->
	<div class="form-action show">
		<div class="circle">
			<p class="done">✔</p>
		</div>
		<p class="ciao">PERFETTO!</p>
		<p class="resettata"> Operazione andata a buon fine! <br> Torna al log-in per effettuare l'accesso </p>
		<button class="bttLogin" onclick="toLogin()">TORNA AL LOG-IN</button>
	</div>		
</body>
</html>