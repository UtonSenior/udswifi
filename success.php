<?php 
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'includes/uploads/';
        $destination = "$target_dir$email.$ext";
        move_uploaded_file($orig_file, $destination);

        //Check if email already exist in db        
        $exist = 0;    
        $check_email = $crud->checkCustomerEmail($email);
        if($check_email['num'] > 0){        
            echo "<div class='container'>
                    <div class='alert alert-danger' role='alert' style='text-align:center'>
                        <h5>Sorry! The email you entered is already taken. <a href='javascript:history.go(-1)'>Please try another</a>.</h5>
                    </div>
                </div>";   
                $exist = 1;               
        }
        else{
                // call function to insert and track if success or not
                $isSuccess = $crud->insertCustomer($fname, $lname, $email, $address, $gender, $destination); 
                $genderName = $crud->getGenderById($gender);

                if ($isSuccess) {
                    SendEmail::SendMail($email, 'UDS FREE WIFI SERVICE', 
                     '
                        <div style="width: 600px;margin:auto;box-shadow: 0 3px 3px rgba(0,0,0,0.2);">
                            <div style="text-align:center;background-color:#6C9392;padding-top:7px;padding-bottom:7;color:white">
                                <h2 style="color:white">UDS WIFI</h2>
                            </div>
                            <div style="padding:0px 7px 7px 20px;">
                                <div>
                                    <h3>Dear ' .$fname.',</h3>
                                </div>
                                <div>
                                    <p>Thanks for registering for our free wifi service. At UDS WIFI we offer the best speed money can buy at no cost to you with access to our wifi service island-wide.</p>
                                    <br/>
                                    <p>Please see our free access information below:</p>
                                    <br/>
                                </div>
                                <div style="padding-bottom: 10px">
                                    <p>
                                    WIFI: <strong>UDSWIFI</strong><br>PASSWORD: <strong>12345</strong>
                                    </p>
                                    <br/><br/>
                                </div>
                                <div>
                                    <p></p>
                                    <p>Best Regards. <br> UDS Team</p>
                                </div>
                            </div>
                        </div>
                     ');
                include 'includes/successmessage.php';
            }
            else{
                include 'includes/errormessage.php';
            }
        }       

        
    }
?>
        <div class="container" style="margin-bottom: 80px" <?php if($check_email['num']){ echo 'hidden';} ?>>
            <div class="login-card shadow p-3 mb-5 bg-white rounded">
                <div>
                    <h2 class="text-center">New Customer</h2>
                </div> 
                <div class="row">
                    <div class="col text-center">
                        <img class="img-fluid" src="<?php echo $destination ?>" onerror="this.src='images/avatar_2x.png'" style="height:300px; width:350px" >
                    </div>
                </div>               
                <div class="row" style="margin-top:10px">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?php echo $genderName['name']?>
                                </h6>
                                <p class="card-text">
                                    Email Address: <?php echo $_POST['email']?>
                                </p>
                                <p class="card-text">
                                    Address: <?php echo $_POST['address']?>
                                </p>
                            </div>
                        </div>
                        <div>
                                <div class="row">
                                    <div class="col col-btn">
                                        <div class="btn-group" role="group">
                                            <a href="index.php" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Home</a>
                                        </div
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