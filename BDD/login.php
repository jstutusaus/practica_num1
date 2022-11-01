<?php 

session_start();

if (isset($_SESSION['user_id'])) {
    header ('Location: /BDD');
}

require 'database.php';

if(!empty($_POST['email'])&&!empty($_POST['password'])){
 $records= $conn -> prepare ('SELECT id, email, password FROM php_login_database WHERE email=:email');
 $records->bindParam(':email',$_POST['email']);
 $records->execute();
 $results = $records ->fetch(PDO::FETCH_ASSOC);


 $message = '';

if (count($results) > 0 && !password_verify($_POST['password'],$results['password'])){

    $_SESSION['user_id']= $results['id'];
    header ('Location: /BDD');

 } 
 else {
    $message= 'Les dades no coincideixen';
 }

}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">





    </head>
    <body>
       <?php require 'partials/header.php' ?>
        <h1>Login</h1>
        <span>or <a href="signup.php">Signup</a></span>

        <?php if (!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif;?>
        
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Correu">
            <input type="password" name="password" placeholder="Contrasenya">
            <button class="btn" href="login.php">ENVIAR</button>
        </form>
    </body>
</html>