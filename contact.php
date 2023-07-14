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
    <title>Contact</title>
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
                <a class="link" href="prime.php"><b>PRIME MEMBER</b></a>
                <a id="active" href="contact.php"><b>CONTACT</b></a>
			</div>
        </div>
	
	
        <div class="heading">
            <h>CONNECT WITH US</h>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.1360360013687!2d86.68822231494738!3d24.48074298423444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f13d8f69fd117b%3A0xe1b6df389bf699b3!2sMCIT!5e0!3m2!1sen!2sin!4v1639472028566!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>

    <div class="contact">
        <div class="contact-row">
            <div class="contact-column"><br>
                <h>Get in Touch</h><br><br>
                <p>Tell us about your needs,</p>
                <p>we'd love to collaborate with you.</p><br>
                <p>Or Drop a mail/Call at</p>
                <p><b>hello@cheekymonkey.in</b></p>
                <p><b>+91 9663593210</b></p>
            </div>
            <div class="contact-column"><br>
                <p>For Queries</p>
                <p><b>Info@damech.in</b></p><br>
                <p>For Customer Support</p>
                <p><b>support@damech.in</b></p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
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