<?php
  require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Buy Prime</title>
</head>

<body>
    <div class="header">
        <div class="flex-container1">
            <a href="index.php"><img class="flex-item1" src="images\DaMech-Logo.png"></a>
            <div class="flex-item11">
                <label for="city"><p>City</p></label>
                <select name="city" id="city" class="select">
                    <option value="select">Select City</option>
                    <option value="deoghar">Deoghar</option>
                    <option value="dhanbad">Dhanbad</option>
                    <option value="ranchi">Ranchi</option>
                    <option value="jamshedpur">Jamshedpur</option>
            </select>
            </div>
                <img src="images/menu.svg" alt="menu icon" id="menu" onclick="showTray()">
                <img src="images/cancel.svg" alt="menu icon" id="cancel" onclick="collapseTray()">

        </div>

        <div class="flex-container2">
            <div class="flex-item2">
                <a class="link" href="index.php"><b>HOME</b></a>
                <a class="link" href="service.php"><b>SERVICES</b></a>
                <a id="active" href="prime.php"><b>PRIME MEMBER</b></a>
                <a class="link" href="contact.php"><b>CONTACT</b></a>
            </div>
    </div>


        <div class="heading">
            <h>PRIME</h>
        </div>
    </div>
    <div class="top">
        <h1>Choose Prime <br>
    Be Special </h1>
        <img src="images\Crown.png">
    </div>
    <div class="cont">
        <h4>Save Extra Rs. 100</h4>
        <p>on Electrician, Plumber, Carpenter, AC, TV, RO & many more. </p>
        <p>You can save upto <b>Rs.5,000</b> in a year</p>
<center>
        <div class="promo">
    <?php  
        
        $sql="SELECT * FROM prime WHERE hide=1";
        $result=mysqli_query($conn,$sql);
        //for class indexing
        $i=-1;
        while($row=mysqli_fetch_array($result)){
    ?>
            <div class="card1">
                <div class="card-container1">
                    <h4>Be Prime User </h4>
                    <h4>at Just</h4>
                    <h1>₹ <?php echo $row['amount'] ?>/-</h1>
                    <h4>for  <?php echo $row['time'] ?>  <?php echo $row['unit'] ?></h4>
                </div>
            </div>
        <?php } ?>
        </div>
</center>
<br>

        <p>Call our representative now</p>
        <h2>+91 9663593210</h2>
        <div class="cont-banner">

            <p>Note:</p>
            <p>You can also pay to our customer
                representative directly and get your</p>
            <p> registration done as soon as possible to get services on priority.</p>
        </div>
    </div>
</div>
    <br><br>
    <div class="footer">
        <div class="contain"><br>
            <div class="row">
                <div class="footer-col">
                <p class="p3"> QUICK LINKS <br> <a href="service.php">Services</a> |<a href="prime.php"> Prime Membership </a>
                        |<a href="contact.php"> Contact</a></p>
                    <br><br>
                    <p>@2020 DA MECH.<br>All Right Reserved</p>
                </div>

                <!-- Add font awesome icons -->
                <div class="footer-col">
                    <div class="footer-col1">

                        <p class="p3"> Follow Us </p>
                        <div class="social-links">
                            <a href='#'><i class=" fab fa-facebook-f"></i></a>
                            <a href='#'><i class=" fab fa-twitter"></i></a>
                            <a href='#'><i class=" fab fa-instagram"></i></a>
                            <a href='#'><i class=" fab fa-linkedin-in"></i></a>
                        </div><br>
                        <p>Powered by Chikey Monkey</p>
                    </div>
                </div>
            </div>
</body>


<script>
function showTray()
                {
                    document.getElementById('active').style.display="block";
                    document.getElementById('cancel').style.display="block";
                    document.getElementById('menu').style.display="none";
                    document.getElementsByClassName('heading')[0].style.display="none";
                    for(var i=0;i<3;i++){
                        document.getElementsByClassName('link')[i].style.display="block";
                    }
                    document.getElementsByClassName('flex-container2')[0].style.display="block";
                }

                function collapseTray()
                {
                    document.getElementById('active').style.display="none";
                    document.getElementById('cancel').style.display="none";
                    document.getElementById('menu').style.display="block";
                    document.getElementsByClassName('heading')[0].style.display="block";
                    for(var i=0;i<3;i++){
                        document.getElementsByClassName('link')[i].style.display="none";
                    }
                    document.getElementsByClassName('flex-container2')[0].style.display="none";
                }
            </script>
</html>