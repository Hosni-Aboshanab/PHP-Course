<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="padding: 60px 60px 60px 60px;">  
    <center>
<h1>Users Details 
   <button type="button" class="btn btn-success" style=" margin-left: 200px;">
   <a href="./day4_form.php" style="text-decoration: none; color: white;"> Add New User</a></button> 
</h1>
<?php
//create db & select

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='users';

   //step 1
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if(!empty($_POST))

{

   $name  =$_POST['name'];
   $email  = $_POST['email'];
   $gender = $_POST['gender']=="male"?"M":"F";
   $mailStatus = isset( $_POST['mailStatus'])?"yes":"no";
   $ps ="insert into users_details (users_name, users_email, gender, mail_status) values ('$name','$email', '$gender','$mailStatus')";
   $result1 = mysqli_query($conn,$ps);
}?>

<?php



   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
//    echo 'Connected successfully <br> <br>';
   echo ' <br> <br>';




//if($result1 ) {echo "your result";}
  

   //step 2
   $sql = 'SELECT users_id, users_name, users_email, gender, mail_status FROM users_details';
   
   mysqli_select_db($conn,$dbname);
   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   //step 3

      // output data of each row
   ?>
    <table class="table table-striped" border ="2" style="width: 50%; hight:50% ;text-align: center; ">
   <tr>
       <th>   # Id  </th>
       <th>    Name    </th>
       <th>    Email    </th>
       <th>    Gender    </th>
       <th>    Mail status    </th>

   </tr>

<?php
      while($row = mysqli_fetch_assoc($result)) { ?>
   <tr>

    <td> <?php  echo  $row['users_id']   ?> </td>
    <td> <?php  echo  $row['users_name']   ?> </td>    
    <td> <?php  echo  $row['users_email']   ?> </td>
    <td> <?php  echo  $row['gender']   ?> </td>
    <td> <?php  echo  $row['mail_status']   ?> </td>

   </tr>
   
        
         

      <?php } ?>

</table>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

      </center>
</body>
</html>