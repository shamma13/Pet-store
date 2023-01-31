<?php
    session_start();
    session_destroy();
    // session_destroy();
    // if(isset($_COOKIE['username']) and isset($_COOKIE['pass'])) {
    //     $username = $_COOKIE['username'];
    //     $pass = $_COOKIE['pass'];
    //     setcookie('username', $username, time()-1);
    //     setcookie('pass', $pass, time() - 1);
    // }
    header("location:main.php");
    exit();
    // echo "<script>window.location.href='login.php'</script>";
    // echo "You succesfully logged out. Click here to <a href='login.php'>login again</a>"
?>