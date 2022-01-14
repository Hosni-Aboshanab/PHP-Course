<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="margin: 100px 350px 100px 575px; padding: 60px 60px 60px 60px;"> 
<!-- <body>  -->


<?php if (isset($_SESSION['erroruserName']))
{
    echo $_SESSION['erroruserName'];
    
    unset($_SESSION['erroruserName']);
    
}?>
    
 <?php if (isset($_SESSION['errorpassword']))
{
    echo $_SESSION['errorpassword'];
    
    unset($_SESSION['errorpassword']);
 }
   
    ?>


    <form class="row g-3"  enctype="multipart/form-data" action="day5conn.php" method ="post">

    <legend><h1>Sign UP </h1> </legend>
    <pr>Please fill this form to create an acount</pr>  
    <br>  <br> 

  <div class="col-md-6">
    <label for="input" class="form-label">Username</label>
    <input type="name" name="user_name" class="form-control" id="inputName4" required>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4" required>
  </div>


  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Comfirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="inputPassword4" required>
  </div>


<br>

<input type="submit" name = "signup" class="btn btn-primary" value="Submit" />

  <button type="reset" class="btn btn-light">Reset</button>
  <br>
  <br>
  <pr>Already have an acount? <a href="./day5_2.php"  class="text-decoration-none">login here.</a></pr>

</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>
</html>

