<! DOCTYPE html>
<html>
<head>
<meta charset ="utf-8"/>
<link rel="stylesheet" href="contact.css"/>
<title> contact </title>
</head>
<body>
<p>
<header>Bonjour <?php echo "Jenny";?> </header>
<nav>
<h1> Formulaire de contact </h1>
</p>
<form method = "post" action = "contact.php">
<p>
<label for ="pseudo"> Votre pseudo: </label>
<input type ="text" name = "pseudo" id = "pseudo"/> <br/>
<label for ="pass"> Votre mot de passe :</label>
<input type ="password" name ="pass" id = "pass"/> <br/>
<input type ="submit" value = "envoyer"/>
</p>
</nav>
</body>
</html>