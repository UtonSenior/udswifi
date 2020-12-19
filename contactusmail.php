<?php 
    require_once 'sendemail.php';
    include_once 'includes/header.php';

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        
        $new_subject = 'UDS Contact Form Submission - ' . $subject;
        $messgae = "Name: " . $firstname . " " . $lastname . "<br/>" . "Email: " . $email ."<br/><br/>Re: " . $subject . "<br/><br/><br/>" . "Wrote the following: " . "<br/><br/>" . $content;

        $issuccess = SendEmail::ContactUs($new_subject, $messgae);
        
        $contactsuccess = false;
        if($issuccess == 1){
            
            echo "<div class='container'>
                    <div class='alert alert-success' role='alert' style='text-align:center'>
                        <h5>Sent Successfully! Thank you $firstname. </h5>
                    </div>
                </div>";   
            
            $contactsuccess = true;
        }
        else{
             echo "Something went wrong!";
        }
    }
?>

<meta http-equiv="refresh" content="2; url='https://udswifi.herokuapp.com/contactus.php'" />

<?php 

    include_once 'includes/footer.php';

?>