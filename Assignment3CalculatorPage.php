<?php 
require_once 'Assignment3calculator.php';
$calculator = new Calculator();



?><!DOCTYPE html>
<html>
<body>

<h2>Calculator Page</h2>

<?php
  
   
  $calculator->calculation(  $_POST["Operator"], $_POST["operand1"], $_POST["operand2"]);
  echo $output1.$output2;
  
  
  ?>
  <br>
  <br>
<form action="Assignment3CalculatorPage.php" method="post">
<select name= "Operator"  >
    <option>Select an Operator</option>
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
</select>
<br>
<br>
  Number 1:<br>
  <input type="text" name="operand1"  >
  <br>
  Number 2:<br>
  <input type="text" name="operand2"  >
  <br> 
 
<br>
  <input type="submit" value="Calculate">
</form> 



</body>
</html>