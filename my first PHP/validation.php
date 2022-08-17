<!-- $ =firstname "$ =middlename "$ =surname"$ =email"$ =ponenumer"$ ="$=""; -->
<?php
// define variables and set to empty values
$firstname = $middlename = $surname = $email = $phonenumber = $gender "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $middlename = test_input($_POST["middlename"]);
  $surname = test_input($_POST["surname"]);
  $email = test_input($_POST["email"]);
  $phonenumber = test_input($_POST["phonenumber"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
Fistname: <input type="text" name="name" value="<?php echo $firstname;?>">
Middlename: <input type="text" name="email" value="<?php echo $middlename;?>">
Phonenumber: <input type="text" name="website" value="<?php echo $phonenumber;?>">
Email: <input type="text" name="name" value="<?php echo $email;?>">
Phonenumber: <input type="text" name="name" value="<?php echo $phonenumber;?>">
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other

?>
