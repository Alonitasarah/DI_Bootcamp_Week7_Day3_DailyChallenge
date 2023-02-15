<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h1>Login Page</h1>
  <?php 
     if(isset($error))
     {
       echo "<p>$error</p>";
     }

     session_start();

       // Vérifier si le formulaire a été soumis
       if(isset($_POST['submit'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
  
          // Valider le nom d'utilisateur et le mot de passe
          if($username == "user1" && $password == "pass1"){
             // Si le nom d'utilisateur et le mot de passe sont corrects, définissez le nom d'utilisateur dans la session.
             $_SESSION['username'] = $username;
    
             // Rediriger l'utilisateur vers la page de bienvenue
             header("Emplacement : welcome.php");
          exit;
            } elseif($username == "user2" && $password == "pass2"){
             // Si le nom d'utilisateur et le mot de passe sont corrects, définissez le nom d'utilisateur dans la session.
             $_SESSION['username'] = $username;
    
             // Rediriger l'utilisateur vers la page de bienvenue
             header("Location: welcome.php");
           exit;
            } else {
              // Si le nom d'utilisateur ou le mot de passe sont incorrects, définir un message d'erreur
              $error = "Nom d'utilisateur ou mot de passe invalide";
            } 
        }
    ?>


  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>