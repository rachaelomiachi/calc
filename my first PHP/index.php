
<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
  
<?php
/////////////////Erro message////////////
// define variables and set to empty values
$firstnameErr = $middlenameErr = $surnameErr = $emailErr = $phonenumber =$gender = "";
$firstname = $middlename = $suername = $email = $phonenumber = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST['firstname'])){
  $firstname_error = "please enter  username";
}
if (empty($_POST['middlename'])){
  $middlename_error = "please enter  middlename";

}
if (empty($_POST['surname'])){
  $surname_error = "please enter  surname";

}
if (empty($_POST['email'])){
  $email_error = "please enter  email";

}
if (empty($_POST['phonenumber'])){
  $phonenumber_error = "please enter  phonenumber";

}
if (empty($_POST['gender'])){
  $gender_error = "please select gender";

}
}



<hr> 

 //new form/////////////////////////// -->
<h3>Details Required</h3>
<div class="form">
<form action="result.html" method="post">
  <input type="text" name="Firstname" placeholder="Firstname" id="mail" required>
  <span><?php if(isset($firstname_error))echo $firstname_error; ?></span>
  <br>
  <br>
  <input type="text" name="Middlename" placeholder="Middlename" id="mail" required>
  <span><?php if(isset($middlename_error))echo $middlename_error; ?></span>
  <br>
  <br>
  <input type="text" name="Surname" placeholder="Surename" id="mail" required>
  <span><?php if(isset($surname_error))echo $surname_error; ?></span>
  <br>
  <br>
  <input type="text" name="Email" placeholder="Email" id="mail" required>
  <span><?php if(isset($email_error))echo $email_error; ?></span>
  <br>
  <br>
  <input type="number" name="Phonenumber" placeholder="Phonenumer" id="mail" required>
  <span><?php if(isset($phonenumber_error))echo[ $phonenumber_error;] ?></span>
<br>
  <br>
  <input type="radio" name="Gender" value="Female"  required>
  <span><?php if(isset($gender_error))echo $gender_error; ?></span>
  
  <input type="radio" name="Gender" value="male" >
  
  <input type="radio" name="Gender" value="others">
  <br>
  <br>
  
  <button type="Submit" id="btn">Submit</button>
  <button type="Reset" id="btn">Reset</button>
</div>


</form>





<script src="/script.js"></script> 
   


 ?>
</body>
</html>