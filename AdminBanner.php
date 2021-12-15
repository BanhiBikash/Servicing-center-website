<?php
    require_once 'config.php';

     
// Define variables and initialize with empty values
$name = $link =$status ="";
$name_err=$link_err=$status_err= $image_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_FILES["banner"]["name"]))
    {
        $image_err="Enter a image";
    }

    // Check if name is empty
    if(empty(trim($_POST["title"])))
	{
        $name_err = "Please enter title.";
    } 
	else
	{
        $name = trim($_POST["title"]);
    }
    
    // Check if link is empty
    if(empty(trim($_POST["link"])))
	{
        $link_err = "Please enter your link.";
    } 
	else
	{
        $link = trim($_POST["link"]);
    }
    
     // Check if status is empty
    if(empty(trim($_POST["status"])))
	{
        $status_err = "Please enter status.";
    } 
	else
	{
        $status = trim($_POST["status"]);
    }
    
    // Validate credentials
    if(empty($name_err) && empty($link_err) && empty($status_err) && empty($image_err))
	{
        // Prepare a select statement
        $sql = "SELECT name FROM banner WHERE name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_name);
            
            // Set parameters
            $param_name = $name;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if name exists, if yes then ask for diffrent name
                if(mysqli_stmt_num_rows($stmt) == 1)
				{  
                    $name_err="This banner name already exists.";
                } 
				else
				{

                    $filename = $_FILES["banner"]["name"];
                    $tempname = $_FILES["banner"]["tmp_name"];	
                        $folder = "banners/".$filename;
                
                        // Insert data into form
                        $sql = "INSERT INTO banner (name,link,status,filename) VALUES ('$name','$link','$status','$filename')";
                
                        // Execute query
                        mysqli_query($conn, $sql);
                        
                        // move the uploaded image into the folder: banner
                        if (move_uploaded_file($tempname, $folder)) {
                            $msg = "Image uploaded successfully";
                        }else{
                            $msg = "Failed to upload image";
                    }

                    echo $msg;
                }
            }
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }

        }
    }
}   
    // Close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="animation.js"></script>
    <title>Banners</title>
    </style>
</head>
<body>
<center>
    <a href="#"><img src="images/DaMech-Logo.png" alt="Logo" id="logo"></a>
    <div class="nav">
        <a href="AdminDashboard.php" class="link">DASHBOARD</a>
        <a href="AdminBanner.php" id="active-link">BANNER</a>
        <a href="AdminServices.php" class="link">SERVICES</a>
        <a href="AdminInService.php" class="link">IN.SERVICES</a>
        <a href="#" class="link">PRIME</a>
        <a href="#" class="link">ACCOUNT</a>
    </div>

    <div class="container">
        <div id="header-box">
            <h1 id="header">BANNER</h1>
        </div>

        <div class="content-box">
            <div class="list">
                <h class="header">
                    LIST OF BANNER
                </h>

                <div class="content">
                    <div id="visible">
                        <img src="icons/sharp_menu_black_24dp.png" alt="icon" id="icon">

                        <img src="images/banner.jpg" alt="Banner-image" id="banner-image">

                        <div id="banner-details">
                            <p id="banner-title">BANNER TITLE 1</p>
                            <p id="banner-link">www.damech.co.in</p>
                        </div>
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
                            <img src="images/banner.jpg" alt="Banner-image" id="banner-image">
                            <input id="choose-banner" type="file" name="banner" value="Select banner image">
                        </div>

                        <div id="input">
                            <input type="text" name="new-title" placeholder="Banner Title 1">
                            <input type="text" name="" placeholder="Banner url">

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
                    ADD NEW BANNER
                </h>

                    <form class="content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input id="choose-banner" type="file" name="banner" value="">
                            <pre class="error-message"><?php echo $image_err ?></pre>
                        </div>
                        
                        <pre id="photo-requirement">**Size:Width 1000px to 600px</pre>

                        <div class="input-group">
                            <input type="text" name="title" placeholder="Banner Title">
                            <pre class="error-message"><?php echo $name_err ?></pre>
                        </div>

                        <div class="input-group">
                            <input type="text" name="link" placeholder="Link / URL">
                            <pre class="error-message"><?php echo $link_err ?></pre>
                        </div>

                        <div class="input-group">
                            <select name="status">
                                <option>Select</option>
                                <option value="On-going">On-going</option>
                                <option value="Up-coming">Up-coming</option>
                            </select>
                            <pre class="error-message"><?php echo $status_err ?></pre>
                        </div>

                        <input type="submit" id="submit" name="submit" value="UPLOAD">
                    </form>      
            </div>
        </div>
    </div>
<footer class="footer">
    <p>Powered by Cheeky Monkey</p>
</footer>
</center>
</body>
</html>