<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if (!$_GET['id']) {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php"); // prevent anyone from navigating directly to this page
    }else{
        // Get ID value
        $id = $_GET['id'];

        // Call Delete function
        $result = $crud->deleteCustomer($id);
        // Redirect to list
        if ($result) {
            header("Location: viewrecords.php");
        }else{
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
?>