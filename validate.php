<?php

// $users = [
//     "joe" => "abc123",
//     "john" => "def123",
//     "joy" => "ghi123"
// ]

$myuser = "joe";
$mypass = "abc123";


// $new = array_push($users, "gfgf", "hhh");


    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];

        if ($username==$myuser and $pass==$mypass){
                setcookie('username', $username, time()+60*60*14);
                setcookie('pass', $pass, time()+60*60*14);
            
            session_start();
            $_SESSION['username'] = $username;
            header("location: Pet_to_give.php");
        }
        else {
            echo "Username or Password is Invalid.<br> click here to <a href='login.php'>try again</a>";
        }
    } 
    else {
        header("location: login.php");
    }




?>