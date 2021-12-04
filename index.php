<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Farzan | Registion Now</title>
    <?php require_once('includes/head_cdn.php'); ?>
</head>
<body>
<div class="wrapper vh-100 position-relative">

<div class="top-wave position-absolute">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,213.3C672,256,768,288,864,272C960,256,1056,192,1152,192C1248,192,1344,256,1392,288L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
</div>


<!-- form starts -->
<div class="form-wrapper position-absolute bg-light">
<div class="form-desc pb-3">
    <h2 class="text-center">Get Started!</h2>
    <p class="text-center pt-0">Fill this form to register with us</p>
</div>

<form id="reg-form">
  
  <div class="form-group">
    <div class="field-con position-relative">
        <span class="icon position-absolute"><i class="fas fa-user"></i></span>
        <input type="text" autofocus name="full-name" placeholder="Full Name" class="form-control" id="full-name" required />
    </div>
  </div>

  <div class="form-group">
    <div class="field-con position-relative">
        <span class="icon position-absolute"><i class="fas fa-mobile-alt"></i></span>
        <input type="tel" name="contact-no" pattern="[0-9]{10}" title="Please enter 10 digit contact no." class="form-control" placeholder="Contact No" id="contact-no" required />
    </div>
  </div>

  <div class="form-group">
        <div class="field-con position-relative">
            <span class="icon position-absolute"><i class="fas fa-envelope"></i></span>
            <input type="email" name="email" class="form-control" placeholder="Email" id="email" aria-describedby="email" required />
        </div>
    
  </div>

  <div class="form-group">
    <div class="field-con position-relative">
        <span class="icon position-absolute"><i class="fas fa-key"></i></span>
        <input type="password" name="passkey" placeholder="Password" class="form-control" id="passkey" pattern="^.{9,15}$" title="Please enter 9 to 15 characters" required />
    </div>
  </div>
  
  <div class="text-center">
    <button type="submit" class="btn btn-primary ct-btn">Submit</button>
  </div>
  
  <a href="#" class="d-block other-link text-center"> Already registered? Sign in</a>
</form>

</div>
<!-- form ends -->

<div class="bottom-wave position-absolute">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#efefef" fill-opacity="1" d="M0,256L60,250.7C120,245,240,235,360,234.7C480,235,600,245,720,224C840,203,960,149,1080,122.7C1200,96,1320,96,1380,96L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>    


</div>

<?php require_once('includes/footer_cdn.php'); ?>

<script>
    $("#reg-form").validate();
</script>
</body>
</html>