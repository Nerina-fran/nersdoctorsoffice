<?php 
    $title = 'ContactUS';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

   
?>
    <p class="h4 text-center">REQUEST AN APPOINTMENT</p>
<br>
<br>

<nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">CONTACT US</a>
</nav>
<br>
<br>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Drop us a line!</a>
  </li>
</ul>

<form>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlMessage1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControl1" rows="3"></textarea>
</div>
  <button type="send" class="btn btn-primary">Send</button>
</form>

<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">This site is protected by reCAPTCHA and the Google Privacy Police
                                        and Terms of Service apply</a>
</nav>
<br>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">NER'S MEDICAL CENTER</a>
</nav>
  <nav class="nav justify-content-center"> 
  <a class="nav-link active" aria-current="page" href="#">1401 Jerusalem Avenue, Constant Spring, Kingston 8, Jamaica</a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">(876) 881-1964</a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">info@nersmedcent.com</a>
</nav>
<br>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Opening Hours</a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Mon. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Tue. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Wed. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Thur. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Fri. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Sat. 9am - 7pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Sun. 10am - 5pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Mon. 8am - 8pm </a>
</nav>
<nav class="nav justify-content-center">
  <a class="nav-link active" aria-current="page" href="#">Times subject to change. Please call to request an appointment. </a>
</nav>












<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>