<?php 
    $title = 'Edit Record';

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getGender();

    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $patients = $crud->getPatientsDetails($id);
       
?>
    <!-- 
        - First Name
        - Last Name
        - Date of Birth (use DatePicker)
        - Specialty (Database Admin, Software Developer, Web Administrator, Other, IT Specialist)
        - Email Address
        - Contact Number
    -->

    <h1 class="text-center">Edit Record </h1>
   
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $patients['patient_id'] ?>" />
         <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $patients['firstname'] ?>" id="firstname" name="firstname">
        

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $patients['lastname'] ?>" id="lastname" name="lastname">
       
        </div>

            <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" value="<?php echo $patients['dateofbirth'] ?>" id="dob" name="dob"> 
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select form-select- mb-3" aria-label=".gender" name="gender">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['gender_id']; ?>" <?php if($r['gender_id']
                     == $patients['gender_id']) echo 'selected'?>>
                     <?php echo $r['name']; ?>
                    </option>
                <?php }?> 
            </select>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" value="<?php echo $patients['contactnumber'] ?>" 
            aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">Your number stays confidential</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="Email" value="<?php echo $patients['emailaddress'] ?>" 
            aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else</div>
        </div>

        <div class="mb-3">
            <label for="homeaddress" class="form-label">Home Address</label>
            <input type="text" class="form-control" id="homeaddress" value="<?php echo $patients['homeaddress'] ?>" 
            aria-describedby="homeaddress" name="homeaddress">
            <div id="homeaddress" class="form-text">Your address stays confidential</div>
        </div>
   
        
            <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
            <a href="viewrecords.php" class="btn btn-default">Back to List</a>  
        
    
    </form>
<?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
     