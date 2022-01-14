<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="margin: 100px 400px 100px 600px; padding: 60px 60px 60px 60px;"> 



<form   enctype="multipart/form-data" action="day4.php" method ="post">

    <legend><h1>User Registration Form </h1> </legend>
    <pr>Please fill this form and submit to add user record to the database</pr>  
    <br>  <br> 
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text"  name="name" class="form-control" style="width:80%" >
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text"  name="email" class="form-control" style="width:80%">
    </div>


    <div class="mb-3">
      <label  class="form-label"> Gender</label>
      <input  type = "radio" name = "gender" value = "female" > Female
      <input  type = "radio" name = "gender" value = "male" > Male
    </div>




    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" name="mailStatus" type="checkbox" id="disabledFieldsetCheck" >
        <label class="form-check-label" for="disabledFieldsetCheck">
        Receive E-Mails from us.
        </label>
      </div>
    </div>
    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>
</html>