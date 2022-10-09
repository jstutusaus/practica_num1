<?php
  session_start();

  require 'database.php';


  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM php_login_database WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Benvingut</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">

  
        


    </head>
    <body>
        
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
        <br><p class="missatge" style="text-align:center;">Benvingut. <?= $user['email']; ?></p>
        <br>

        
       
        <a href="logout.php" style="text-align:center; display:block;text-decoration:underline;
    color: #333;">Logout</a>
    <div class="curriculum" style="margin-top:20px;"> 
        <?php require 'assets/curriculum/curriculum.html' ?>
    <div>
    <?php else: ?>

        <h1>Siusplau Entreu o Registreu-vos</h1>
        <a href= "login.php" alt='login'>Login</a> or
        <a href="signup.php" alt='signup'>Signup</a>
    <?php endif; ?>
    </body>
</html>
