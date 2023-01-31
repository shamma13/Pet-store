<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="ContactUs.css">
    <script src="myScript.js"></script>
</head>
<body onload="startTime()">

<?php include('../SOEN 287/header.php'); ?>

    <div id="mySidenav">
        <a href="main.php">Home Page</a>
        <!-- <a href="BrowseAvailablePets.php">Browse Available Pets</a> -->
        <a href="find_a_pet_form.php">Find a dog/cat</a>
        <a href="DogCare.php">Dog Care</a>
        <a href="CatCare.php">Cat Care</a>
        <a href="logind.php">Have a pet to give away</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="createAccount.php">Create an account</a>
    </div>
    
    <div id="main">
    <center><div class="recenter">
        <center><h1>Contact Us</h1></center>
    <form>
        <label for="name">What is your name?</label>
        <input type="text" id="name">

        <label for="studentId">What is your student Id?</label>
        <input type="text" id="studentId">

        <label for="email">What is your email?</label>
        <input type="text" id="email">

        <label for="message">Leave us a message:</label></p>

        <textarea id="message" rows="8" cols="50">
        
        </textarea>
        
        
    </form>
</center></div>
</div>

<footer>
    <p>We do not sell, rent or exchange any personal information collected from our supporters with any other organization or entity</p>
    <p>Copyright &copy; 2022 Raise the woof.</p>
</footer>

</body>
</html>