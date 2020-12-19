<?php 
    require_once '../sendemail.php';

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        
        $new_subject = 'UDS Contact Form Submission - ' . $subject;
        $messgae = "Name: " . $firstname . " " . $lastname . "<br/>" . "Email: " . $email ."<br/><br/>Re: " . $subject . "<br/><br/><br/>" . "Wrote the following: " . "<br/><br/>" . $content;

        $issuccess = SendEmail::ContactUs($new_subject, $messgae);
        
        if($issuccess == 1){
            echo "<h1 class='alert alert-success' role='alert' style='text-align:center'>Sent Successfully! Thank you" . " " . $firstname . ". </h1>"; 
        }
        else{
             echo "Something went wrong!";
        }
    }
?>

<!-- <meta http-equiv="refresh" content="7; url='contactus.php'" /> -->