<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/exercice.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!--[if IE]>
   <script type="text/javascript" src="js/modernizr.custom.53495.js">
   </script>
<![endif]-->
</head>
<body>
<h1>Créer un message</h1>
<div class="container">
	<form action="postmessage.php?id=<?=$_GET['id']?>" method="post">
	<textarea placeholder="Ecris ton message ..." name="message"></textarea>
	<input type="submit" value="Envoyer">
	</form>
	</div>
</body>
</html>