<?php 
    $title = 'HOME';
    $page = "index";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

<div id="banner">
        <div class="container">
            <div class="row" id="row-na">
                <div class="col text-center">
                    <h3 class="display-4" id="now-avail" style="color: rgb(255,255,255);">Now Available!</h3>
                </div>
            </div>
            <div class="row" style="color: rgb(221,97,97);">
                <div class="col text-center" style="color: rgb(221,97,97);">
                    <h1 id="hd-uds-free-wifi" style="color: rgb(255,255,255);">UDS&nbsp;<strong>FREE</strong> WIFI SERVICE</h1>
                </div>
            </div>
            <div class="row" style="color: rgb(221,97,97);">
                <div class="col text-center" style="color: rgb(221,97,97);">
                    <h4 id="condition" style="color: rgb(255,255,255);">Fast | Secure | Reliable&nbsp;</h4>
                </div>
            </div>
            <div class="row" id="row-register">
                <div class="col text-center">
                    <h4><a class="btn btn-primary btn-lg" role="button" style="margin: 32px;" href="register.php">Register Now!</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="body-content">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col">
                        <h3><strong>UDS FREE WIFI</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 18px;">How fast is your download or upload speed? Are you tired of paying for so call reliable internet and you're not getting the speed your ISP advertise? Have you ever wonder if there was a way to access the internet for free and also
                            get the speed you truly deserve? USD WIFI offers free WIFI service island-wide with no hidden fees. Yes, you heard right now you can enjoy free WIFI service anywhere in Jamaica all you need to do is to&nbsp;<a href="register.php">register</a>&nbsp;and
                            you will get access to UDS FREE WIFI Service.<br></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Is this the right choice for you?</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 18px;">Sure it is. Who wouldn't want to have free WIFI access available to them all the time? Hassle-free. No long line to signup or register and waiting for days to get the service install, setup, and ready for use. With UDS FREE WIFI
                            Service registration is fast and your login credentials will be sent directly to your email.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 align-self-center" style="text-align: center;margin-bottom: 5px;"><img class="img-fluid" id="wifi-img" src="assets/img/wifi.png"></div>
        </div>
    </div>
    <div id="udswifi-sec">
        <div class="container" id="offers">
            <h1 class="text-center" style="color: rgb(255,255,255);padding-top: 10px;"><strong>UDS WIFI</strong></h1>
            <div class="row" id="row-h" style="padding-bottom: 25px;">
                <div class="col-12 col-md-4" style="text-align: center;">
                    <div class="card">
                        <div class="card-body"><i class="fa fa-rocket" style="font-size: 60px;color: #007BFF;"></i>
                            <h4 class="card-title">FAST</h4>
                            <h6 class="text-muted card-subtitle mb-2"><strong>Speed</strong> is Everyting.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="text-align: center;">
                    <div class="card">
                        <div class="card-body"><i class="fa fa-lock" style="font-size: 60px;color: #007BFF;"></i>
                            <h4 class="card-title">SECURE</h4>
                            <h6 class="text-muted card-subtitle mb-2">Browse <strong>safe.</strong>&nbsp;No worries.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="text-align: center;">
                    <div class="card">
                        <div class="card-body"><i class="fa fa-shield-alt" style="font-size: 60px;color: #007BFF;"></i>
                            <h4 class="card-title">RELIABLE</h4>
                            <h6 class="text-muted card-subtitle mb-2"><strong>Stay connected</strong> all the time.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    require_once 'includes/footer.php';
?>