<?php
	// get data from textfields

$Hours = $_POST['Hours'];

$Rate = $_POST['Rate'];

// make sure to check $ inside formula
$salary = number_format($Hours * $Rate * 0.1805, 2);

$salarynotax = $Hours * $Rate;

$tax = number_format($salarynotax - $salary, 2);



?>
<h3>Results:</h3>
Your pay will be $ <?php echo "$tax" ?>. The government will take $ <?php echo "$salary" ?>

