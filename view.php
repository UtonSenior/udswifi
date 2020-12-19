<?php 
    $title = 'VIEW CUSTOMER';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    // Get Attendee by ID
    if(!isset($_GET['id'])){
        //echo "<h1 class='text-danger'>Please check details and try again</h1>";
        include 'includes/errormessage.php';        
    }else{
        $id = $_GET['id'];
        $result = $crud->getCustomerDetails($id);
    
?>
        <div class="container" style="margin-bottom: 80px">
            <div class="login-card shadow p-3 mb-5 bg-white rounded">
                <div>
                    <h2 class="text-center">Customer</h2>
                </div>
                    <div class="row">
                        <div class="col text-center">
                            <img class="img-fluid" src="<?php echo $result['profile_pic']?>" onerror="this.src='images/avatar_2x.png'" style="height:300px; width:350px" >
                        </div>
                    </div>
                    <div class="row"  style="margin-top:10px">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $result['firstname'] . ' ' . $result['lastname']; ?>
                                    </h5>
                                    
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo $result['name']?>
                                    </h6>
                                    <p class="card-text">
                                        Email Address: <?php echo $result['email_address']?>
                                    </p>
                                    <p class="card-text">
                                        Address: <?php echo $result['cus_address']?>
                                    </p>                                
                                </div> 
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col col-btn">
                                        <div class="btn-group" role="group">
                                            <a href="viewrecords.php" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to List</a>
                                            <a href="edit.php?id=<?php echo $result['customer_id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></i></a>
                                            <a href="confirmdelete.php?id=<?php echo $result['customer_id'] ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div
                                        </div>
                                </div>    
                            </div>
                        </div>
                    </div>                
                </div>
            </div>          
        </div> 
    <?php } ?>

<?php 
    require_once 'includes/footer.php';
?>