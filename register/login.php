<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Connexion</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Nom d'utilisateur / Mot de passe incorrect.</h3>
<br/>Veillez vous  <a href='login.php'>Réconnecter</a> à nouveau</div>";
 }
    }else{
?>
<div class="form">
<h1>Connexion</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Nom d'utilisateur" required />
<input type="password" name="password" placeholder="Mot de passe" required />
<input name="submit" type="submit" value="Connexion" />
</form>
<p>Pas encore inscrit? <a href='registration.php'>inscrivez-vous ici</a></p>
</div>
<?php } ?>
</body>
</html>
