
<!DOCTYPE HTML>  
<html>
<head>
          <style>
                .nav {color: #FF0000;}
          </style>
</head>

<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $groupErr = $agreeErr = "";
$name = $email = $gender = $group =  $class_details =   $course = $agree =  "";
$subject = [];
$isValid = true;
$submited = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $submited = true;
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $isValid = false;
  } else {
    $name = inputs($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $isValid = false;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $isValid = false;
  } else {
    $email = inputs($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $isValid = false;
    }
  }

  if (empty($_POST["course"])) {
    $course = "";
 }else {
    $course = inputs($_POST["course"]);
    $isValid = false;
 }
    
  if (empty($_POST["group"])) {
    $groupErr = "";
  } else {
    $group = inputs($_POST["group"]);
    
  }
  

  if (empty($_POST["class_details"])) {
    $class_details = "";
  } else {
    $class_details = inputs($_POST["class_details"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = inputs($_POST["gender"]);
  }
  if (empty($_POST["subject"])) {
    $subjectErr = "You must select 1 or more";
 }else {
    $subject =$_POST["subject"];	
 }

if (empty($_POST["agree"])) {
    $agreerErr = "You must agree to terms";
  } else {
    $agree = inputs($_POST["agree"]);
  }
}

function inputs($data) {
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Application name: AAST_BIS class regisration</h2>
<p><span class="nav">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table>
<tr>
               <td><label for="name">Name:</label></td>
               <td><input type = "text" name="name" id="name" required>
                  <span class = "nav">* <?php echo $nameErr;?></span>
               </td>
            </tr>

            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email" required>
                  <span class = "nav">* <?php echo $emailErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Group # </td>
               <td><input type = "text" name = "group">
                  <span class = "nav"> <?php echo $groupErr;?></span>
               </td>
            </tr>

            <tr>
               <td>Class Details:</td>
               <td> <textarea name = "class_details" rows = "5" cols = "40"></textarea></td>
            </tr>
  
             <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female" >Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "nav">* <?php echo $genderErr;?></span>
               </td>
            </tr>
            


            <tr>
               <td><label for = "subject"> select subject:</label></td>
               <td>
                  <select name = "subject[]" id="subject" size = "4" multiple>
                     <option value = "php">PHP</option>
                     <option value = "JavaScript">JavaScript </option>
                     <option value = "mysql">MYSQL</option>
                     <option value = "HTML">HTML</option>
                     <option value = "VCS">VCS</option>
                     <option value = "commmunication Skills">comm Skills</option>
                  </select>
               </td>
            </tr>

            </table>

            <tr>
               <td>Agree</td>
               <td><input type = "checkbox" name = "checked" value = "1" required></td>
               <?php if(!isset($_POST['checked'])){ ?>
               <span class = "nav">   * <?php echo "You must agree to terms";?></span>
               <?php } ?> 
            </tr>
  
  
  <br>
  <br>
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
          

</form>

<?php
if($isValid && $submited){ 
echo "<h2>Your given values are as:</h2>";

echo ("<p> Name : $name</p>");

echo ("<p>email : $email</p>");

echo ("<p>  Group : $group</p>");


echo ("<p>  class details : $class_details</p>");


echo ("<p>  gender : $gender</p>");

echo $agree;

print ("<p>  Your Courses Are : $course</p>");
for($i = 0; $i < count ($subject); $i++) {
  echo($subject[$i] . " ");}
}
?>

</body>
</html>




