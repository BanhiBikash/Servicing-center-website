<?php
error_reporting(0);
  require_once 'config.php';

  $main_service=$_GET['srv'];
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
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Inner Services</title>
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
                <a id="active" href="service.php"><b>SERVICES</b></a>
                <a class="link" href="prime.php"><b>PRIME MEMBER</b></a>
                <a class="link" href="contact.php"><b>CONTACT</b></a>
            </div>
        </div>
	
	
        <div class="heading">
            <h>SERVICES</h>
        </div>
    </div>

    <div class="bts">
        <a href="service.php">Back to Services</a>
    </div><br>
    <center>
    <p class="cen">
        <?php echo $main_service ?>
    </p><br>
    </center>

    <div class="container">

<?php  
    
    $sql="SELECT * FROM inservice WHERE main_service='$main_service' AND hide=1";
    $result=mysqli_query($conn,$sql);
    //for class indexing
    $i=-1;
    while($row=mysqli_fetch_array($result)){
?>
        <div class="card">
        <?php echo"<img src='AdminEnd/In-Service images/".$row['Filename']."'>"?>
            <div class="container1">
                <h4><b><?php echo $row['name'] ?></b></h4>
                
                <p class="p1"><?php echo'Service  ₹'.$row['service_charge'] ?> </p>
                <p class="p1"><?php echo'Repair  ₹'.$row['repair_charge'] ?></p>
                <p class="p1"><?php echo'Installation/Uninstallation ₹'.$row['install_charge'] ?></p>
                <p>
                    Note:<br>
                    **Any additional part will cost extra. Cost will be provided after inspection.
                    Final bill will reflect including parts(if any).
                </p>
            </div>
        </div><?php } ?><br><br>

        <div class="card">
            <div class="container2">
               <p class="card-head">PRIME MEMBERSHIP</p>
                <img src="images\Crown.png">
               <p>       Prime user will get <br> 10% discount on every service</p>
                <a href="prime.php"><button class="book"><b>Book Us Now</b></button></a>
                <h6><b>Save 100 on final bill</b></h6>
                <br>
                <h5><b>Call: +91 9663593210</b></h5>
            </div>
        </div>
    </div>
<br><br>



<div class="footer">
        <div class="contain"><br>
            <div class="row">
                <div class="footer-col">
                <p class="p3"> QUICK LINKS <br><a href="service.php">Services</a> |<a href="prime.php"> Prime Membership </a>
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