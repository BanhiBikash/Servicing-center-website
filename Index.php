<?php
  require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" column="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Dtech Home</title>
</head>

<body><center>
    <div class="header">
        <div class="flex-container1">
            <a href="index.php"><img class="flex-item1" src="images\DaMech-Logo.png"></a>
            <div class="flex-item11">
                <p class="city">City</p>

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
                <a id="active" href="index.php"><b>HOME</b></a>
                <a class="link" href="service.php"><b>SERVICES</b></a>
                <a class="link" href="prime.php"><b>PRIME MEMBER</b></a>
                <a class="link" href="contact.php"><b>CONTACT</b></a>
            </div>
        </div>
        <?php  
        
        $sql="SELECT * FROM banner WHERE hide=1";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($result)){
            $name=$row['name'];
    ?>
        <div class="slideshow-container">
            <div class="mySlides">

            <?php echo"<img src='AdminEnd/banners/".$row['Filename']."'>"?>
            
            <div class="bttn">
                <button onclick="plusSlides(-1)" id="prev">&#10094;</button>
                <button onclick="plusSlides(1)" id="next">&#10095;</button>
            </div>
            </div>
        </div>
    <?php } ?>

    </div>
    <h1 class="topnotch"><b>
    TOP NOTCH SERVICES
    </b></h1>
    <div class="content">
    <div class="flex-container3">

    <?php  
        
        $sql="SELECT * FROM service WHERE hide=1 AND status='On-going'";
        $result=mysqli_query($conn,$sql);
        //for class indexing
        $i=-1;
        while($row=mysqli_fetch_array($result)){
            $name=$row['name'];
    ?>

        <a href="inservice.php?srv=<?php echo $row['name'] ?>" class="block">
            <?php echo"<img src='AdminEnd/Service Images/".$row['Filename']."'>"?>
            <h6><?php echo $name; ?></h6>
        </a>
    <?php } ?>
</div></div>
    
    

  
    <center>
        <h2><b>STORY BEHIND DA-MECH</b></h2><br>
        <div class="main">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem rem est, dolor, officia, unde
            incidunt voluptates eum a facilis consequuntur ad fugit. Quos placeat fugiat eaque. Repellendus, corporis
            nihil? Doloremque?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos necessitatibus, repellat et quae explicabo id
            enim quisquam totam autem nobis voluptatibus perspiciatis sunt laudantium inventore, ad molestias dolorum
            minus voluptatum.</p>
    </center>
    </div>
    <div class="main-row">
        <div class="column">
            <b>
                <h4><img src="images\gray.jpg"><p>WHY US</p></h4>
            </b>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodiLorem,
                ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi</p>
        </div>


        <div class="column">
            <b>
                <h4><img src="images\gray.jpg"><p>VISION</p></h4>
            </b>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
            </p>
        </div>
        <div class="column">
            <h4><img src="images\gray.jpg"><p>MISSION</p></h4>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus commodi
            </p>
        </div>

    </div>
    <div class="head">
        <div class="head-row">
            <div class="head-column">
                <h1><b>1000+</b></h1>
                <p>Satisfied customers</p>
            </div>
            <div class="head-column">
                <h1><b>100+</b></h1>
                <p>Skillfull professionals</p>

            </div>
            <div class="head-column">
                <h1><b>3 hrs</b></h1>
                <p>Services Guarnteed<br>
                    within given hours</p>

            </div>
        </div>
    </div>
    <div class="click">
        <div class="oneclick">
            <h1>One-Click service app</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis impedit accusantium explicabo nobis vel
                atque omnis</p>

            <div class="apps">
                <a href="#"><img src="images/app-store.jpg" alt="app store"></a>
                <br>
                <a href="#"><img src="images/play-store.jpg" alt="play store"></a>
            </div>
        </div>
        <div class="oneclick">
            <img src="images/hold-phone.png">
        </div>
    </div>

    <br>




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
                            <a href='#' target="blank"><i class=" fab fa-facebook-f"></i></a>
                            <a href='#'><i class=" fab fa-twitter"></i></a>
                            <a href='#'><i class=" fab fa-instagram"></i></a>
                            <a href='#'><i class=" fab fa-linkedin-in"></i></a>
                        </div><br>
                        <p>Powered by Chikey Monkey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");

                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    slides[slideIndex - 1].style.display = "block";

                }

                function showTray()
                {
                    document.getElementById('active').style.display="block";
                    document.getElementById('cancel').style.display="block";
                    document.getElementById('menu').style.display="none";
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
                    for(var i=0;i<3;i++){
                        document.getElementsByClassName('link')[i].style.display="none";
                    }
                    document.getElementsByClassName('flex-container2')[0].style.display="none";
                }
            </script>


</center>
</body>

</html>