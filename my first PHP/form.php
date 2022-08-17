<?php
< html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <div class="ten"> 
    <form  action="results.html"  method="Get">
      <div >      
       <label for="name">firstname</label>
       <input id="firstname" value="name" >
      </div>
    <div>
    <label middlename>Middle Name</label>
    <input type="text" id="middlename" >
    </div>

    <div>
        <label>phone number</label>
        <input type="number" name="phone Number" id="phonenumber" required>
    </div>
    <div>
       <label>Email address</label>
       <input type="text" name=" Email address" id=" Email address"   required>
    </div>
      <button type="Submit" id="button1">login </button>
      <button type="Reset" id="button">Reset</button>

    </form>
</div>
</div>
<hr> -->
<!-- //new form/////////////////////////// -->
<h3>Details Required</h3>
<div class="form">
<form action="result.html" method="post">
  <input type="text" name="Firstname" placeholder="Firstname" id="mail" required>
  <br>
  <br>
  <input type="text" name="Middlename" placeholder="Middlename" id="mail" required>
  <br>
  <br>
  <input type="text" name="Surname" placeholder="Surename" id="mail" required>
  <br>
  <br>
  <input type="text" name="Email" placeholder="Email" id="mail" required>
  <br>
  <br>
  <input type="number" name="Phonnumber" placeholder="Phonenumer" id="mail" required>
<br>
  <br>
  <input type="radio" name="Gender" value="Female"  required>
  
  <input type="radio" name="Gender" value="male" >
  
  <input type="radio" name="Gender" value="others">
  <br>
  <br>
  
  <button type="Submit" id="btn">Submit</button>
  <button type="Reset" id="btn">Reset</button>
</div>

</form>





<script src="/script.js"></script> 
   
</body>
</html>
?>