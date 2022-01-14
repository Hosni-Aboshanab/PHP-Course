<?php 


session_start();
if(!isset($_SESSION["loggedin"])){
    header("location:day5_2.php");
}

?>

<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<br>
<h3 style="text-align:center;"> Hi, <b style="color: blue;"> <?php echo  $_SESSION["username"] ; ?></b>. Welcome to our site.</h3>
<div class="mx-auto" style="width: 50%;">

<img src="img1.jpg" class="img-fluid" alt="iti photo" >
<br><br><br>



    <p class="text-center">
    <button type="button" class="btn btn-danger"><a href="logout.php"  class="text-decoration-none" style="color: white;">Sign Out of Your Account</a></button>
 </p>




</div>

</body>
</html>