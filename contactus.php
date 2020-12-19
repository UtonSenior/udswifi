<?php 
    $title = 'Home';
    $page = "contactus";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

    <div   div id="contact-banner">
        <div class="container-fluid" style="margin: 0px;margin-top: 0;padding-top: 30px;padding-bottom: 30px;text-align: center;">
            <h1 style="color: rgb(255,255,255);">Contact Us</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4" style="text-align: center;">
                <div class="row">
                    <div class="col" style="padding-top: 35px;"><i class="fa fa-mobile-phone" style="font-size: 70px;"></i>
                        <h1>Contact Us</h1>
                        <p><strong>Headquarters (Toll Free):</strong></p>
                        <p>876-889-0292</p>
                        <p><strong>Fax</strong></p>
                        <p>876-889-0292</p>
                        <p><a style="color: rgb(19,137,255);">utonseniormbhs@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" style="text-align: center;">
                <div class="row">
                    <div class="col" style="padding-top: 35px;"><i class="fa fa-map-marker" style="font-size: 70px;"></i>
                        <h1>Come see us</h1>
                        <p><strong>UDS WIFI</strong></p>
                        <p>33 Queen Street, Morant Bay St. Thomas.</p>
                    </div>
                </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCuyQhWTK9LomeZka2R4HZWqBsDr8_ZW4c&amp;center=-33.8569%2C151.2152&amp;zoom=11" width="100%" height="150" style="margin-bottom: 20px;"></iframe></div>
            <div
                class="col-12 col-md-4" style="text-align: center;">
                <div class="row">
                    <div class="col" style="padding-top: 35px;"><i class="fa fa-clock-o" style="font-size: 70px;"></i>
                        <h1>24/7 Support</h1>
                        <p><a href="#">Open Live Chat</a></p>
                        <p><img src="assets/img/logo.png" style="color: rgb(0,0,0);background: #6c9392;"></p>
                        <p>The right choice for you.</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div id="contact-form">
        <div class="container">
            <h1 style="color: rgb(255,255,255);text-align: center;">Contact Us</h1>
            <p style="color: rgb(255,255,255);text-align: center;">Fill out the form below and we'll get back to you shortly.</p>
            <form action="includes/contactusmail.php" method="post">
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group"><input required class="form-control" type="text" placeholder="First Name" name="firstname" id="firstname"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group"><input required class="form-control" type="text" placeholder="Last Name" name="lastname" id="lastname"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group"><input required class="form-control" type="text" placeholder="Email" name="email" id="email"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group"><input class="form-control" type="text" placeholder="Subject" name="subject" id="subject"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <div class="form-group"><textarea required class="form-control" placeholder="Please enter your message..." style="height: 140px;" name="content" id="content"></textarea></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col" style="text-align: center;">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="SEND MESSAGE"></input>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php 
    require_once 'includes/footer.php';
?>