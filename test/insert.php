<!--?php include('connect.php') ?-->
<?php include('insertserver.php'); ?>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/1F841744-980F-1F45-BE9C-F68ECC3EBDB8/main.js" charset="UTF-8"></script>
</head>
<body>
<div class="login-page">
	<div class="form">

	<form class="login-form" method="post" action="insert.php">
		<input type="text" name="name" placeholder="Name" value="<?php echo $name;?>"/>
		<input type="text" name="email" placeholder="E-mail" value="<?php echo $email;?>"/>
		<input type="number"  name="number" placeholder="Phone"/>
		<button type="submit" name="register">Create</button>
		<p class="message"> <a href="web.php">Back</a>
	</form>
	</div>
</div>
</body>
</html>