
<?php
    session_start() ;
?> 



<?php
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='signup_db';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    function handle_signup($conn){

       $userName  = trim(htmlspecialchars($_POST['user_name']));
       $password  =  trim(htmlspecialchars( $_POST['password']));
       $confirmPassword = trim(htmlspecialchars( $_POST['confirm_password']));
    
    
       if(empty($userName)){
            
          $erroruserName="you must entert your Name";
       
      }
    
      if(empty($password)){
          
          $errorpassword="enteryour password ";
      }
 
      if(!isset($erroruserName)&&!isset($errorpassword)){
          
          $_SESSION['user_name']=$userName;
          
         $_SESSION['password']=$password;
          
    
           echo("<script>location.href = 'home.php';</script>");
       
       }
      else{
          if(isset($erroruserName)){
              
          $_SESSION['erroruserName']=$erroruserName;
              
          }
         if(isset($errorpassword)){
              
          $_SESSION['errorpassword']=$errorpassword;
          
          }
    

       
          }

          $rt ="insert into signup_tab(user_name, password, confirm_password) values ('$userName','$password', '$confirmPassword')";
          $result1 = mysqli_query($conn,$rt);
          echo("<script>location.href = 'day5_2.php';</script>");


    }
  

    function handle_signin($conn){
        // Catch the username and password then validate their existance 
        // Call the db to verify the data 
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        $qr = "select * from signup_tab where user_name='$user_name' and password='$password'";
        $res = mysqli_query($conn, $qr);
        $fp = fopen('without.log','a');
        
        fwrite($fp, var_export($res, true));

         $result = mysqli_fetch_array($res);
        fwrite($fp,  var_export($result, true));
        if($result){
            $_SESSION["loggedin"] = "1";
            $_SESSION["username"] = $user_name;
            header("location:zooo.php");
        }else{
            header("location:day5_2.php?errMsg=user name or password doenot match ");
        }
        
    }

     
    if(isset($_POST['signup'])){
        handle_signup($conn);
    }elseif(isset($_POST['login'])){
            handle_signin($conn);
    }   
      

  
  ?>


<?php
require('config.php');
// If the values are posted, insert them into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $selectresult = mysql_query($slquery);
    if(mysql_num_rows($selectresult)>0)
    {
         $msg = 'user already exists';
    }
    elseif($password != $cpassword){
         $msg = "passwords doesn't match";
    }
    else{
          $query = "INSERT INTO `register` (username, password,confirmpassword, ) VALUES ('$username', '$password', '$cpassword',)";
          $result = mysql_query($query);
          if($result){
             $msg = "User Created Successfully.";
          }
    }
   }
?>


    
    

    




