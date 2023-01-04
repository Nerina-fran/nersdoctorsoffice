
<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getGender()
?>
    <!-- 
        - First Name
        - Last Name
        - Date of Birth (use DatePicker)
        - Gender (Male, Female)
        - Email Address
        - Contact Number
        - Home Address
    -->

    <h1 class="text-center">Patients Registration Form </h1>
    
    <form method="post" enctype="multipart/form-data" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
        

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
       
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input required type="text" class="form-control" id="dob" name="dob"> 
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select form-select- mb-3" aria-label=".gender" name="gender">
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php echo $r['gender_id']; ?>"><?php echo $r['name']; ?></option>
            <?php }?> 
        </select>
    </div>

    <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input required type="text" class="form-control" id="contact" aria-describedby="phoneHelp" name="contact">
        <div id="phoneHelp" class="form-text">Your number stays confidential</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else</div>
    </div>

    <div class="mb-3">
        <label for="homeaddress" class="form-label">Home Address</label>
        <input required type="text" class="form-control" id="homeaddress" aria-describedby="homeaddress" name="homeaddress">
        <div id="homeaddress" class="form-text">Your Address stays confidential</div>
    </div>

    <!-- <div class="input-group mb-3"> -->
    
   
        <!-- <label for="avatar">Upload Image</label> THIS WAS HERE-->
        <!-- <input type="file" accept="image/*" class="form-control" id="inputGroupFile02"> THIS WAS HERE-->
        <!-- <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
        <label class="input-group-text" for="avatar">Upload</label>  
        <div id="avatar" class="form-text text-primary"> Upload is Optional</div>
    </div> -->

    <div class="custom-file">
        
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar"></label>
        <div id="avatar" class="form-text text-success">Uploading File is Optional.</div>
       
    </div>

   
    <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>   
    </div>
    
    
</form>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
   