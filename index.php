<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Session</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST" class="login-email">
        <p class="title">Login</p>
        <div class="field">
            <p class = "mail">Masukkan Username : </p>
            <input type="text" placeholder="Username" name="username" value="" required class="mailed">
        </div>
        <div class="field">
            <p class = "pass">Masukkan password : </p>
            <input type="password" placeholder="Password" name="password" value="" required class="passed">
        </div> 
    <div class="field" align ="center"> 
        <button name="submit" class="button">Login</button>
    </div>
    <?php
            require 'koneksi.php';
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = mysqli_query($conn, "SELECT username from user WHERE username ='$username' ");
                  if (mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_assoc($result);
                    if(password_verify($password, $row['password'])){
                        $_SESSION['login'] = $row["username"];
                        $_SESSION['priv'] = $row["priv"];
                        if($_SESSION['priv'] == "admin"){
                            header("Location: admin1.php");
                        }
                        else{header("Location: index1.php");}
                        exit;
                    }
                }
                $error = true;
                if (isset($error)){
                    echo"<script>
                    alert(Username atau Password Salah!!!);  
                    document.location.href = 'Registrasi.php';
                    </script>";
                }
    ?> 
</body>
</html>