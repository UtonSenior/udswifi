<?php 
    require_once 'db/conn.php';
    //Get values from post operation   
    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];     

        //Call Crud function
        $result = $crud->editCustomer($id, $fname, $lname, $email, $address, $gender);
        // Redirect to viewrecords.php
        if($result){
            header("location: viewrecords.php");
        }else{
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }else{

    }    
?>