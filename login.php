<!-- <?php
    if(isset($_COOKIE['username']) and isset($_COOKIE['pass']))
    $username = $_COOKIE['username'];
    $pass = $_COOKIE['pass'];
    echo "<script>
        document.getElementById('username').value = '$username';
        document.getElementById('pass').value = '$password';
        </script>"
?> -->
<?php
    if(isset($_POST['submit'])){
      $myfile = fopen('users.txt', 'a+');
      $username = $_POST['username'];
      $password = $_POST['password'];
      $text = "$username:$password";
      if(strpos(file_get_contents("users.txt"),$text)!==false && empty($username)!==true  && empty($password)!==true){
        echo "<script>alert(\"You have successfully logged in!\")</script>";
        session_start();
        $_SESSION["user"]=$_POST["username"];
        $_SESSION["counter"]=0;
        echo "<script>window.location.href='Pet_to_give.php'</script>";
      }else if(strpos(file_get_contents("users.txt"),$text)==false && empty($username)!==true  && empty($password)!==true){
        echo "<script>alert(\"This account does not exist\")</script>";
      }

      fclose ($myfile); 
      }
    
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="mainpage.css">
    <script src="myScript.js"></script>
    <style>
        content {
            top: 155px;
        }
        th {
            padding: 10px;
            text-align: right;
        }

        .btn-login {
            text-align: center;
        }
        footer {
            font-size: 10px;
            overflow: hidden;
            position: relative;
            bottom: 0 !important; 
            left:0;
            right:0;
            margin: 4px;
            text-align: center;
            border: 3px solid darkblue;
            color: black;   
        }
    </style>
</head>
<body onload="startTime()">

<div class="container">
    <?php include("header.php"); ?>
    <div id="mySidenav">
        <a href="main.php">Home Page</a>
        <!-- <a href="BrowseAvailablePets.php">Browse Available Pets</a> -->
        <a href="find_a_pet_form.php">Find a dog/cat</a>
        <a href="DogCare.php">Dog Care</a>
        <a href="CatCare.php">Cat Care</a>
        <a href="Pet_to_give.php">Have a pet to give away</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="createAccount.php">Create an account</a>
    </div>
    <div class="content">
    <h2>Before proceeding, please login</h2>
    <table cellpadding="5" cellspacing="10" align="center">
        <form method="POST">
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" placeholder="Enter your Username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" placeholder="Enter your Password"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="LOGIN" class="btn-login"></td>
            </tr>
        </form>
    </table>
    </div>
</div>

<footer>
    <p>We do not sell, rent or exchange any personal information collected from our supporters with any other organization or entity</p>
    <p>Copyright &copy; 2022 Raise the woof.</p>
</footer> 

</body>
</html>