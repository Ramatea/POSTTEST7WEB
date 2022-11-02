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
        <p class="title">Registrasi Akun</p>
        <div class="field">
            <p class = "mail">Masukkan Username : </p>
            <input type="text" placeholder="Username" name="username" value="" required class="mailed">
        </div>
        <div class="field">
            <p class = "pass">Masukkan Password : </p>
            <input type="password" placeholder="Password" name="password" value="" required class="passed">
        </div>
        <div class="field">
            <p class = "pass">Masukkan Password Ulang : </p>
            <input type="password" placeholder="Password" name="cpass" value="" required class="passed">
        </div> 
    <div class="field" align ="center"> 
        <button name="register" class="button">Register</button>
    </div>
    <?php
            require 'koneksi.php';
            $username = $_POST['username']
            $password = $_POST['password']
            $cpass = $_POST['cpass']
            if (isset($_POST['register'])) {
                  if ($password === $cpass){
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $result = mysqli_query($conn, "SELECT username from user WHERE username ='$username' ");
                  }
                  if (mysqli_fetch_assoc($result)){
                    echo"<script>
                            alert(username telah digunakan!);  
                            document.location.href = 'Registrasi.php';
                        </script>";
                  } else{
                    $sql= "INSERT INTO user values('','$username','$password')";
                    $result = mysqli_query($conn,$sql);
                  }
                    if (mysqli_affected_rows($conn) > 0){  
                        echo"<script>
                            alert(Registrasi Berhasil !!!);  
                            document.location.href = 'Index.php';
                        </script>";
                  } else{
                        echo"<script>
                        alert(Registrasi Gagal!!!);  
                        document.location.href = 'Registrasi.php';
                        </script>";
                  }  
                  else{
                    echo "
                        <script>
                            alert('Password tidak sama!!');
                            document.location.href = 'Registrasi.php';
                        </script>";
                }
            }       
    ?>  
</body>
</html>