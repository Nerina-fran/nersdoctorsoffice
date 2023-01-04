<?php
     require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];  
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $gender = $_POST['gender'];
        $homeaddress = $_POST['homeaddress'];

        //Call Crud Function
        $result = $crud->editpatients($id,$fname, $lname, $dob, $email, $contact, $gender, $homeaddress);

        //Redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            //echo'error';
            include 'includes/errormessage.php'; 
            header("Location: viewrecords.php");  
        }
    }
    else{
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }

    


?>