<?php 
    // This includes the session file. The file contains code that starts/resumes a session.
    //By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
    include_once 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/datatables.min.css">
        <link rel="stylesheet" href="css/mainstyles.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
        <title>UDS WIFI - <?php echo $title; ?></title>
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-dark navigation-clean-button">
        <div class="container">    
            <!-- Brand/logo -->
            <div>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" style="width:95px;">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($page == 'index'){ echo 'active'; }?>">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>

                <li class="nav-item <?php if($page == 'aboutus'){ echo 'active'; }?>">
                    <a class="nav-link" href="aboutus.php">ABOUT US</a>
                </li>

                <li class="nav-item <?php if($page == 'ourservices'){ echo 'active'; }?>">
                    <a class="nav-link" href="ourservices.php">OUR SERVICES</a>
                </li>

                <li class="nav-item <?php if($page == 'register'){ echo 'active'; }?>">
                    <a class="nav-link" href="register.php">REGISTER</a>
                </li>  

                <li class="nav-item <?php if($page == 'viewrecords'){ echo 'active'; }?>" <?php if(!isset($_SESSION['userid'])){ echo 'hidden';} ?>>
                    <a class="nav-link" href="viewrecords.php">VIEW CUSTOMERS</a>
                </li>  

                <li class="nav-item <?php if($page == 'ourpolicy'){ echo 'active'; }?>">
                    <a class="nav-link" href="ourpolicy.php">OUR POLICY</a>
                </li> 

                <li class="nav-item <?php if($page == 'contactus'){ echo 'active'; }?>">
                    <a class="nav-link" href="contactus.php">CONTACT US</a>
                </li> 
                                    
            </ul>
            <ul class="navbar-nav ml-auto">  
                <?php 
                    if(!isset($_SESSION['userid'])){
                ?>                      
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOGIN</a>
                    </li>  
                <?php }else {?>  
                    <li>
                    <a class="nav-link" href="#"><spam>Welcome <?php echo $_SESSION['username'] ?>!</spam></a>
                    </li>
                    <li>
                        
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                <?php }?>                    
            </ul>
        </div>      
    </nav> 