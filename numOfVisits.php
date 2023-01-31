<?php

$cookieVal=0;
$cookieName='num_visits';

setcookie($cookieName,$cookieVal,time()+(86400 * 30));

date_default_timezone_set('America/Toronto');
$lastTime=0;
$cookieName2="last_visit";

setcookie($cookieName2,$lastTime, time()+(86400 * 30));

if(!isset($_COOKIE[$cookieName])){
    $cookieVal=1;
    setcookie($cookieName,$cookieVal,time()+(86400 * 30));
}else{
    $cookieVal=$_COOKIE['num_visits']+1;
    setcookie($cookieName,$cookieVal,time()+(86400 * 30));
}

if(!isset($_COOKIE[$cookieName2])){
    $lastTime=date("D M d H:i:s T Y");
    setcookie($cookieName2,$lastTime, time()+(86400 * 30));

}else{
    $lastTime=date("D M d H:i:s T Y");
    setcookie($cookieName2,$lastTime, time()+(86400 * 30));
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>numOfVisits</title>
</head>
<body>
<?php

if(!isset($_COOKIE[$cookieName])){
    echo "Welcome to my webpage! It is your first time that you are here";
}else{
    echo "Hello, this is the $_COOKIE[$cookieName] time that you are visiting my 
    webpage<br>";
}

if(!isset($_COOKIE[$cookieName2])){
    echo "The last time you visited my website was: ". date("D M d H:i:s T Y");

}else{
    echo "The last time you visited my website was: $_COOKIE[$cookieName2] ";
}

?>
</body>
</html>

