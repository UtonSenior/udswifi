<?php 
    $title = 'REGISTER';
    $page = "register";
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getGenders();
?>

<!-- 
        - First name
        - Last name
        - Gender (Male, Female)
        - Email Address
        - Address
        - Profile Picture
    -->

<div id="contact-banner">
        <div class="container-fluid" style="margin: 0px;margin-top: 0;padding-top: 30px;padding-bottom: 30px;text-align: center;">
            <h1 style="color: rgb(255,255,255);">Register</h1>
        </div>
    </div>
<div class="container">
        <div class="row">
            <div class="col" style="background: #464f4f;">
                <h1 style="color: rgb(255,255,255);">Information</h1>
                <h5 style="color: rgb(214,121,121);">PERSONAL INFORMATION COLLECTION<br></h5>
                <p style="color: rgb(255,255,255);">All personal information collected by USD WIFI is done so exclusively with your consent, by means of this form posted on our website. No information is collected automatically.<br></p>
                <h5 style="color: rgb(214,121,121);">USE OF YOUR PERSONAL INFORMATION<br></h5>
                <p style="color: rgb(255,255,255);">The personal information collected is only used by UDS WIFI staff for the purposes of you being able to accessing UDS WIFI Service.&nbsp;We do not share your information with any third parties.<br></p>
                <p style="color: rgb(255,255,255);">If you have granted us the permission to, we can use your personal information in order to send you newsletters, with the intent of offering you the best service possible.<br></p>
                <h5 style="color: rgb(214,121,121);">SHARING OF YOUR PERSONAL INFORMATION<br></h5>
                <p style="color: rgb(255,255,255);">We will not, in any circumstances, share your personal information with <br>other individuals or organizations without your permission, including <br>public organizations, corporations or individuals, except when <br>applicable by law.
                    We will not sell, communicate or divulge your <br>information to any mailing lists.<br></p>
            </div>
            <div class="col" style="border-top: 2px none rgb(108,147,146) ;border-right: 2px solid rgb(108,147,146) ;border-bottom: 2px none rgb(108,147,146) ;">
                <form id="regForm" name="regForm" method="post" action="success.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <h1 class="text-center"><strong>Registration</strong></h1>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12 col-md-6">
                                <label for="firstname">First name <small class="text-danger">*</small></label>
                                <input required type="text" class="form-control" id="firstname" name="firstname">
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="lastname">Last name <small class="text-danger">*</small></label>
                                <input required type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender </small></label>
                        <select class="form-control"  id="gender" name="gender">
                            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address <small class="text-danger">*</small></label>
                        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label>Address</label>
                                <!-- <textarea class="form-control" style="height: 106px;"></textarea> -->
                                <textarea class="form-control" id="address" name="address" aria-describedby="addressHelp" style="height: 106px;"></textarea>
                                <small id="addressHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-group" id="avatar" name="avatar" accept="image/*">
                                    <label class="custom-file-label" for="avatar">Choose File</label>
                                    <small id="phoneHelp" class="form-text text-success bg-light">File Upload is Optional</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block" style="margin-top:10px">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php 
    require_once 'includes/footer.php';
?>