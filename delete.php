<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get ID Values
        $id = $_GET['id'];

        // Call Delete Function
        $result = $crud->deletePatients($id);
        // Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormesage.php';
        }

    }
?>
