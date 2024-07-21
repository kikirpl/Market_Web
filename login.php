<?php
session_start();
require 'functions.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0 ){
        echo "<script> 
                alert('user baru di tambahkan') ;
                </script>";
    }else {
        mysqli_error($db);
    }
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $role = login($db, $username, $password);

    if ($role !== false) {
        // Login berhasil
        $_SESSION["role"] = $role;
        if ($role === 1) {
            header("Location: ./index.php");
            exit();
        } elseif ($role === 0) {
            header("Location: ./index.php");
            exit();
        }
    } else {
        $error = true;
    }
}
  if(isset($error)):
    echo "<script> 
                alert('username atau password salah') ;
                </script>";
  endif; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Daftar</title>
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
   <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300;400&family=Sansita+Swashed:wght@300&display=swap");

    body {
    margin: 0;
    padding: 0;
    /* display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; */
    font-family: "Poppins", sans-serif;
    height:100vh;
    }
    .main {
    width: 350px;
    height: 500px;
    background-color: #fff;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
    position:absolute;
    top:50%;
    right: 50%;
    transform: translate(50%, -50%);
    }
    #chk {
    display: none;
    }
    .signup {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #fff;
    }
    label{
    color: #000;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s ease-in-out;
    }
    .seluruhnya{
        width:100%;
        height:100%;
        background-color:black;
        position: relative;
    object-fit: cover;
    }

   /* .seluruhnya {
    background-color:black;
    position: relative;
    object-fit: cover;
    width :100%;
    height:100vh;
} */

    input{
    width: 60%;
    height: 20px;
    background: #fff;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
    }
    .login button{
        background-color:#e66a00;
    }
    button {
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background-color: #e66a00;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: 0.2s ease-in;
    cursor: pointer;
    }
    button:hover {
    background: #000;
    }

    .login {
    height: 460px;
    background: #472202;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: 0.8s ease-in-out;
    }
    .login label {
    color: #fff;
    transform: scale(0.6);
    }
    #chk:checked ~ .login {
    transform: translateY(-500px);
    }
    #chk:checked ~ .login label {
    transform: scale(1);
    }
    #chk:checked ~ .signup label {
    transform: scale(0.6);
    }
   </style>
</head>
<body>
 <div class="seluruhnya">
    <!-- <img src="lights-night-city.jpg" alt=""> -->
  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="register">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login">Login</button>
				</form>
			</div>
	</div>
</div>
</body>
</html> 