<?php 
require 'database.php';


$message = '';


if (!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['name'])&& !empty($_POST['cognoms'])&& !empty($_POST['user'])/*&& !empty($_POST['confirm_password'])*/){
    
    $sql = "INSERT INTO php_login_database (email, password, name, cognoms, user/*, confirm_password */) VALUES (:email, :password, :name, :cognoms, :user/*, :confirm_password*/)";
    
    $stmt = $conn -> prepare($sql);
    
    $stmt -> bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt -> bindParam(':password',$password);
    $stmt-> bindParam(':name',$_POST['name']);
    
    $stmt->bindParam(':cognoms',$_POST['cognoms']);
    $stmt->bindParam(':user',$_POST['user']);/*
    $stmt -> bindParam(':confirm_password',$confirm_password);*/

    

    if ($stmt -> execute()){
        $message ='Usuari creat correctament';

    }else{
        $message ='Hi ha hagut un error';
    }

    
}


/*Enviar correo*/



/*----------*/ 
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SignUp</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">





    </head>
    <body>
       <?php require 'partials/header.php' ?>

       <?php if(!empty($message)): ?>
            <p><?= $message?> </p>

        <?php endif; ?>

        <h1>SignUp</h1>
        <span>or <a href="login.php">Login</a></span>
        <form action="signup.php" method="post">
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="cognoms" placeholder="Cognoms">
            <input type="text" name="user" placeholder="Usuari">
            <input type="text" name="email" placeholder="Correu">
            <input type="password" name="password" placeholder="Contrasenya">
            <!--<input type="password" name="confirm_password" placeholder="Confirmar Contrasenya">-->
            <!--<input type="submit" name="Enviar">-->
            <button class="btn" href="signup.php">ENVIAR</button>
        </form>
    </body>
</html>