<?php
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['counter']+=1;
        $myfile = fopen('availablePetInfo.txt', 'a');
        if($_POST["breedofanimal"] !== "none" ){
          $text= $_SESSION["counter"] . ":" . $_SESSION["user"] .":". $_POST["choice"].":". $_POST["breedofanimal"] .":". $_POST["ageofanimal"] .":" . $_POST["genderofanimal"] . "\n";
        }else{
          $text= $_SESSION["counter"] .":". $_SESSION["user"] .":". $_POST["choice"].":". $_POST["breedofanimal"] .":". $_POST["ageofanimal"] .":" . $_POST["genderofanimal"]. "\n";
        }
        fwrite($myfile, $text);
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Have a Pet to give away</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="forms.css">
    <script src="myScript.js"></script>
    <script defer src="website.js"></script>
    <style>
        #container {
        min-height:140%
    }

    .content {
        top: 155px;
        left: 200px;
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
    <div id="container">
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
    
    <div id="main">
    <center><div class="recenter">
        <a href="logout.php">Click here to Log out</a>
        <center><h1>Have a pet to give away</h1></center>
    <form id="form" method="POST">
        <div class="input-control">
        <label for="choice">Is your pet a cat or dog?</label>
        <input type="text" id="choice" name="choice" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="breedofanimal">What is the breed of your dog or cat?</label>
        <input type="text" id="breedofanimal" name="breedofanimal" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="ageofanimal">What is the age of your animal?</label>
        <input type="text" id="ageofanimal" name="ageofanimal" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="genderofanimal">What is the gender?</label>
        <input type="text" id="genderofanimal" name="genderofanimal" required>
        <div class="error"></div>
        </div>
        
        <div class="input-control">
        <label for="relationshipDogs">Does it get along with other dogs?</label>
        <input type="text" id="relationshipDogs" name="relationshipDogs" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="relationshipCat">Does it get along with ohter cats?</label>
        <input type="text" id="relationshipCat" name="relationshipCat" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="relationshipChildren">Is it suitable for a family with small children?</label>
        <input type="text" id="relationshipChildren" name="relationshipChildren" required>
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="ownerName">What is your name?</label>
        <input type="text" id="ownerName" name="ownerName" required> 
        <div class="error"></div>
        </div>

        <div class="input-control">
        <label for="email">What is your email?</label>
        <input type="text" id="email" name="email">
        <div class="error"></div>
        </div>

        <label for="commentarea">Give us a little summary of your pet:</label></p>

        <textarea id="commentarea" name="inputfield" rows="4" cols="50" required>
        
        </textarea>

        <button type="submit" name="submit">Submit</button>
        <button type="reset">Clear</button>
        
        
    </form>
</center></div>
</div>
</div>

<footer>
    <p>We do not sell, rent or exchange any personal information collected from our supporters with any other organization or entity</p>
    <p>Copyright &copy; 2022 Raise the woof.</p>
</footer>

</body>
</html>