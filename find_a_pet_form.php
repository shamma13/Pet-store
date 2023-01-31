<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a dog/cat</title>
    <link rel="stylesheet" href="mainpage.css">
    <link rel="stylesheet" href="forms.css">
    <script src="myScript.js"></script>
    <script src="website.js"></script>
    <style>
        #container {
        min-height:100%
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

       .image {
    float: left;
    width: 140px;
    height: 130px;
}


.footer {
    font-size: 10px;
    overflow: hidden;
    position: relative;
    padding: 0px;
    /* margin-top: -142px; */
    clear: both;
    /* display: block; */
    bottom: 0 !important; 
    left:0;
    right:0;
    /* margin: 4px; */
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
        <a href="login.php">Have a pet to give away</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="createAccount.php">Create an account</a>
    </div>
    
    <div id="main">
    <center><div class="recenter">
        <center><h1>Find your new pet!</h1></center>
    <form method="POST" action="" onsubmit="return checkForm(this);">
        <label for="pet">Would you like a Cat or Dog?</label>
        <label for="cat">Cat</label>
        <input type="checkbox" id="pet1" name="checkboxfield">
        <label for="dog">Dog</label>
        <input type="checkbox" id="pet2" name="checkboxfield">
        
        <!-- <br> -->
        <label for="breed">Breed of dog or cat</label>
        <select name="breed" id="breed" name="inputfield" required>
            <option value="default">Doesn't matter</option>
            <option value="persian">Persian Cat</option>
            <option value="siamese">Siamese Cat</option>
            <option value="burmese">Burmese Cat</option>
            <option value="ragdoll">Ragdoll Cat</option>
            <option value="birman">Birman Cat</option>
            <option value="bulldog">Bulldog</option>
            <option value="shepherd">German Shepherd Dog</option>
            <option value="pomeranian">Pomeranian Dog</option>
            <option value="yorkshire">Yorkshire Terrier Dog</option>
            <option value="chihuahua">Chihuahua Dog</option>
        </select>
        <br>
        <label for="age">Preferred age of animal</label>
        <select name="age" id="age" required>
            <option value="default">Doesn't matter</option>
            <option value="1">0-1 yr</option>
            <option value="2">1-2 yr</option>
            <option value="3">2-3 yr</option>
            <option value="4">3-4 yr</option>
            <option value="5">Senior Pet (5+ yr)</option>
        </select>
        <br>
        <label for="gender">Preferred gender of animal</label>
        <select name="gender" id="gender" required>
            <option value="default">Doesn't matter</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>

        <label for="getAlong">Does your new pet need to get along with other pets or children?</label>
        <select name="getAlong" id="getAlong" required>
            <option value="default">Doesn't matter</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>

        <button type="submit">Submit</button>
        <button type="reset">Clear</button>
    </form>
</center></div>
</div>
</div>

<footer>
    <p>We do not sell, rent or exchange any personal information collected from our supporters with any other organization or entity</p>
    <p>Copyright &copy; 2022 Raise the woof.</p>
</footer>

<script>
    function startTime() {
    var today = new Date();

    var date = 'Date: ' + today.getDate() + ' / ' + (today.getMonth() + 1) + ' / ' + today.getFullYear();

    document.getElementById("currentDate").innerHTML = date;

    var hours = today.getHours();
    var minutes = today.getMinutes();
    var seconds = today.getSeconds();

    document.getElementById("currentTime").innerHTML = "Current Time: " + hours + ":" + minutes + ":" + seconds;

    setTimeout(function(){startTime()}, 1000);
}
</script>
</body>
</html>