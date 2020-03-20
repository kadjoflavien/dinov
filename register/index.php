<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>connexion</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Bienvenue pour l'achat de votre article :<?php echo $_SESSION['username']; ?>!</p>
<p>Vous etre en sécurité ici pour tout achat.</p>
<p><a href="../calculate/index.html">ACHETER</a></p>
<a href="logout.php">Se Déconnecter</a>
</div>
</body>
</html>
