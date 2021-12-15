<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="animation.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<center>
    <a href="#"><img src="images/DaMech-Logo.png" alt="Logo" id="logo"></a>
    <div class="nav">
        <a href="#" class="link">DASHBOARD</a>
        <a href="AdminBanner.php" class="link">BANNER</a>
        <a href="AdminServices.php" class="link">SERVICES</a>
        <a href="AdminInService.php" id="active-link">IN.SERVICES</a>
        <a href="#" class="link">PRIME</a>
        <a href="#" class="link">ACCOUNT</a>
    </div>

    <div class="container">
        <div id="header-box">
            <h1 id="header">SERVICES</h1>
        </div>

        <div class="content-box">
            <div class="list">
                <h class="header">
                    LIST OF INNER SERVICES SERVICES
                </h>


                <form action="#" class="InService" method="">
        <select id="dropbtn">
            <option value="">Select Main Services</option>
        </select>
    </form>

    <div id="service-heading">
                        <img src="icons/sharp_menu_black_24dp.png" alt="icon" id="heading-icon">
                        <img src="images/banner.jpg" alt="Service-image" id="heading-service-image">
                        <p id="service-title">SERVICE TITLE</p>
    </div>
                <div class="content">
                    
                    <div id="visible">
                        <img src="icons/sharp_menu_black_24dp.png" alt="icon" id="icon">

                        <img src="images/banner.jpg" alt="Service-image" id="service-image">

                        <div id="banner-details">
                            <p id="banner-title">SERVICE TITLE 1</p>
                        </div>

                            <p id="cost"><span>&#8377;</span>400</p>

                        <div class="visible-buttons">
                            <button id="edit" onclick="edit()">EDIT</button>
                            <p id="hide">Hide</p>
                            <button id="hide-bttn" onclick="hide()"></button>
                            <button id="unhide-bttn" onclick="unhide()"></button>
                        </div>
                    </div>

                    <form id="show">
                        <img src="icons/sharp_menu_black_24dp.png" alt="icon" id="icon">

                        <div id="image-sec">
                            <img src="images/banner.jpg" alt="Banner-image" id="service-image">
                            <input id="choose-banner" type="file" name="banner" value="Select banner image">
                        </div>

                        <div id="input">
                            <input type="text" name="new-title" placeholder="Inner Service Title">
                            <label id="head-label">Charges</label>
                            <input type="text" name="new-service" placeholder="Service">
                            <input type="text" name="new-repair" placeholder="Repair">
                            <input type="text" name="new-install" placeholder="Charges">
                            <input type="text" name="new-service" placeholder="Charges">

                            <div id="button-group">
                                <button type="delete">DELETE</button>
                                <button type="submit">SAVE</button>
                                <button type="cancel">CANCEL</button>

                                <p id="hide">Hide</p>
                                <button id="hide-bttn2" onclick="hide2()"></button>
                                <button id="unhide-bttn2" onclick="unhide2()"></button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
            <div class="add">
                <h class="header">
                    ADD NEW INNER SERVICES
                </h>

                    <form action="#" class="content">
                        <div class="input-group">
                            <input id="choose-service" type="file" name="banner">
                            <pre class="error-message"></pre>
                        </div>
                        
                        <pre id="photo-requirement">**Size:Width 1000px to 600px</pre>

                        <div class="input-group">
                            <input type="text" name="title" placeholder="Inner Service Title">
                            <pre class="error-message"></pre>
                        </div>
                    <label>Charges</label>
                    <div class="input-group">
                            <input type="text" name="service-charge" placeholder="Services">
                            <pre class="error-message"></pre>
                    </div>
                    <div class="input-group">
                            <input type="text" name="repair-charge" placeholder="Repair">
                            <pre class="error-message"></pre>
                    </div>                    
                    <div class="input-group">
                            <input type="text" name="install-charge" placeholder="Installation/Uninstallation">
                            <pre class="error-message"></pre>
                    </div>
                    <div class="input-group">
                            <input type="text" name="total" placeholder="Total Cost">
                            <pre class="error-message"></pre>
                    </div>
                        <div class="input-group">
                            <select name="options">
                                <option >Select</option>
                                <option value="Value 1">Option 1</option>
                                <option value="Value 2">Option 2</option>
                                <option value="Value 3">Option 3</option>
                                <option value="Value 4">Option 4</option>
                            </select>
                            <pre class="error-message"></pre>
                        </div>

                        <input type="submit" id="submit" value="UPLOAD">
                    </form>      
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>Powered by Cheeky Monkey</p>
    </footer>

</center> 
</body>
<script>
function edit()
{
    document.getElementById("edit").style.display="none";
    document.getElementById("hide").style.display="none";
    document.getElementById("hide-bttn").style.display="none";
    document.getElementById("unhide-bttn").style.display="none";
    document.getElementById("show").style.display="flex";
    document.getElementById("show").style.height="50vh";
    document.getElementById("visible").style.height="0vh";
    document.getElementById("banner-title").style.display="none";
    document.getElementById("service-image").style.display="none";
    document.getElementById("icon").style.display="none";
    document.getElementById("cost").style.display="none";

}
</script>
</html>