<?php session_start();?>
<html>
<head>
<title>Login Page</title>

</head>
<body bgcolor="lightgreen">
<script type="text/javascript" src="./fbapp/fb.js"></script>

	<h2>
		Welcome 
		<?php
		if(isset($_SESSION['name'])) { echo $_SESSION['name']; }
		?>
	</h2>
		<?php
		if(isset($_SESSION['name'])) {}
		else { ?>
	<div class="fb-login-button" data-scope="public_profile,email" 
		onlogin="checkLoginState();" data-size="xlarge" >
		
	</div>
	
		<?php } ?>
		

</body>
</html>