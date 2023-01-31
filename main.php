<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Pet</title>
    <link rel="stylesheet" href="mainpage.css">
    <script src="myScript.js"></script>
    <style>
        #container {
        min-height:215%
    }
        .content p, h2 {
        position: relative;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
    }
    
    h2 {
        padding-top: 50px;
    }
    
    </style>
</head>

<body onload="startTime()">
    <div id="container">
    <?php
    include("header.php");
    ?>

    <div id="mySidenav">
        <a href="main.php">Home Page</a>
        <!-- <a href="BrowseAvailablePets.php">Browse Available Pets</a> -->
        <a href="find_a_pet_form.php">Find a dog/cat</a>
        <a href="DogCare.php">Dog Care</a>
        <a href="CatCare.php">Cat Care</a>
        <a href="login.php">Have a pet to give away</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="createAccount.php">Create an account</a>
    </div>

    <div class="content">
        <center><p>Adopt the perfect pet! Search adoptable pets from shelters, rescues & private owners.</p></center> 
        <img src="adopt.jpg" alt="" class="responsive">

        <div class="row">
            <div class="column">
              <center><p>Satisfied Customers</p></center>
              <center><img src="trainpet.jpg" alt="" style="width:70%"></center>
            </div>
            <div class="column">
            <center><img src="animalcare.png" alt="" style="width:70%"></center>
            </div>
            <div class="column">
              <center><p>New Friends for Life!</p></center>
              <center><img src="friendpet.jpg" alt="" style="width:70%"></center>
            </div>
          </div>

        <div class="aboutus">
        <img src="shelter.jpg" alt="" class="shelter">
            <center><h2>About us</h2></center>
            <p class="message">Looking to add a pet to your family? Raise the woof can be a great place to search for a new cat or dog!
            Raise the woof is an online, searchable database of animals who need homes. From the comfort of their 
            personal computers, pet lovers can search for a pet that best matches their needs.
        </p></div>
    </div>
</div>

    <footer class="footer">
        <p>We do not sell, rent or exchange any personal information collected from our supporters with any other organization or entity</p>
        <p>Copyright &copy; 2022 Raise the woof.</p>
    </footer>

</body>
</html>