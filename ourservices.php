<?php 
    $title = 'OUR SERVICES';
    $page = "ourservices";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

<div id="contact-banner">
        <div class="container-fluid" style="margin: 0px;margin-top: 0;padding-top: 30px;padding-bottom: 30px;text-align: center;">
            <h1 style="color: rgb(255,255,255);">Our Services</h1>
        </div>
    </div>
    <div class="container" style="margin-bottom: 25px;">
        <div class="row" style="margin-top: 5px;">
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="fas fa-newspaper" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">Web Development&nbsp;</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="fas fa-network-wired" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">Network Support</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="fa fa-stack-exchange" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">Technical Support</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="far fa-hdd" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">Cloud Storage&nbsp;</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="fas fa-user-plus" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">Online Training&nbsp;</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" style="text-align: center;padding-top: 20px;">
                <div class="card">
                    <div class="card-body"><i class="fas fa-rss" style="font-size: 100px;color: #007BFF;"></i>
                        <h4 class="card-title">WIFI&nbsp;</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="courage">
        <div class="container">
            <div class="row" style="margin-top: 5px;">
                <div class="col" style="text-align: center;padding-top: 20px;padding-bottom: 20px;">
                    <h3 style="color: rgb(255,255,255);">UDS WIFI Courage Area</h3><img class="img-fluid" src="assets/img/courage.png"></div>
            </div>
        </div>
    </div>

<?php 
    require_once 'includes/footer.php';
?>