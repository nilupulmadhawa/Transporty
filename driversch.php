<html>
<head><title>Transporty</title>
<link rel="stylesheet" type-text="css" href="css/driversch.css">
<link rel="stylesheet" type-text="css" herf="css/admin-style.css">
</head>
<body>

<?php include_once 'sidebar.php' ?>
<div class="container">
<div class="boarder">
<div class="center"><!--border-->
<h2>Schedule</h2>
<hr>

<form action="add_sch.php" method="POST">
  <label for="Service Vehicle">Service Vehicle</label><!--section option-->
  <select name="Select_Vehicle" id="Select_Vehicle" placeholder="Select">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select><!--/selection option-->
  <br><br>
  
  <label for="From">From</label>
  <select name="From" id="From" placeholder="Select"><!--section option-->
    <option value="Colombo">Colombo</option>
    <option value="Monaragala">Monaragala</option>
    <option value="Kandy">Kandy</option>
	<option value="Kegalla">Kegalla</option>
	<option value="Badulla">Badulla</option>
  </select><!--/section option-->
  <input type="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  
  <label for="To">To</label>
  <select name="To" id="To" placeholder="Select"><!--section option-->
    <option value="Colombo">Colombo</option>
    <option value="Monaragala">Monaragala</option>
    <option value="Kandy">Kandy</option>
	<option value="Kegalla">Kegalla</option>
	<option value="Badulla">Badulla</option>
  </select><!--/section option-->
  <input type="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  
   <label for="Date">Date</label>
  <input type="date" id="Date" name="Date" placeholder="DD-MM-YYYY">
  <br><br>
  <label for="Price per person">Price per person</label> 
  <input type="Price"  id="Price" placeholder="Price">
  <br><br>
  
  <input type="submit" value="Add"><!--subit button-->
 </form> 
</div> <!--/border-->
</div>
</div>
</body>
</html>