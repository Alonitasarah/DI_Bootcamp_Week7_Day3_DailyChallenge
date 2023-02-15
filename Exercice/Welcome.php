<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
</head>
<body>
  <h1>Welcome Page</h1>
  <p>Welcome, <?php echo $username; ?>!</p>
  <form action="welcome.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
  <?php
        // Démarrer la session
        session_start();

         // Vérifiez si la variable de session 'username' est définie.
         // Si elle n'est pas définie, rediriger vers la page de connexion.
         if(!isset($_SESSION['username'])){
            header("Location: login.php");
         exit;
         }

         // Stocker la valeur de la variable de session 'username' dans une variable
         $username = $_SESSION['username'];

         // Vérifier si le bouton de déconnexion a été pressé
         if(isset($_POST['logout'])){
           // Détruire la session en cours
           session_destroy();
             // Redirection vers la page de connexion
             header("Location: login.php");
         exit;
          }  
    ?>
</body>
</html>