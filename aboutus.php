<?php 
    $title = 'ABOUT US';
    $page = "aboutus";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

    <div id="contact-banner">
        <div class="container-fluid" style="margin: 0px;margin-top: 0;padding-top: 30px;padding-bottom: 30px;text-align: center;">
            <h1 style="color: rgb(255,255,255);">About Us</h1>
        </div>
    </div>
    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <div class="col" style="margin-top: 0;padding-top: 20px;">
                <div class="row">
                    <div class="col" style="text-align: center;">
                        <p>Staying connected all the time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 text-center" style="margin-top: 0px;padding-top: 20px;margin-bottom: 5px;"><img class="img-fluid" src="assets/img/wifi.png" width="300" height="300"></div>
                    <div class="col-12 col-md-8" style="margin-top: 0px;padding-top: 20px;">
                        <h3>Our Story</h3>
                        <p>UDS WIFI was founded in 2008 to provide free WIFI connection across Jamaica.&nbsp; We started out sharing WIFI with our mobile phone (Hotspot) with friends who were unable to purchase internet plans all the time. Over the years
                            we expanding our WIFI range with the help of WIFI Modems, Switches, and WIFI Extenders so that not just our friends could get access but an entire community. Now, UDS WIFI has over 17 WIFI Towers Island-Wide providing connection
                            that is Fast, Secure, and Reliable.<br></p>
                        <h3>Mission Statement</h3>
                        <p>With the growing challenges we face every year and the improvement of technology, not everyone can access the internet. At UDS our mission is to see that everyone will have WIFI access anywhere, anytime in Jamaica at no charge.
                            We look to see a brighter further where everyone can stay connected with families and friends with WIFI access everywhere in the world.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="the-team">
        <div class="container" style="margin-top: 5px;">
            <div class="row">
                <div class="col" style="padding: 5px;">
                    <div class="row">
                        <div class="col">
                            <h2 style="text-align: center;color: rgb(255,255,255);padding-top: 5px;">Our Team</h2>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 25px;">
                        <div class="col-12 col-md-4 text-center" style="margin-top: 10px;">
                            <div class="card">
                                <div class="card-body"><img class="img-fluid" src="assets/img/blank.jpg" style="font-size: 0;" width="200" height="200">
                                    <h4 class="card-title">Uton Senior</h4>
                                    <h6 class="text-muted card-subtitle mb-2">Founder/Web Master</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center" style="margin-top: 10px;">
                            <div class="card">
                                <div class="card-body"><img class="img-fluid" src="assets/img/blank.jpg" style="font-size: 0;" width="200" height="200">
                                    <h4 class="card-title">Yanick Levy</h4>
                                    <h6 class="text-muted card-subtitle mb-2">Network Specialist</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center" style="margin-top: 10px;">
                            <div class="card">
                                <div class="card-body"><img class="img-fluid" src="assets/img/blank.jpg" style="font-size: 0;" width="200" height="200">
                                    <h4 class="card-title">Nuham Kelly</h4>
                                    <h6 class="text-muted card-subtitle mb-2">Technical Consultant</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    require_once 'includes/footer.php';
?>