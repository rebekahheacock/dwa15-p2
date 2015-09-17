<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RHJ: XKCD Password Generator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<?php require 'scraping.php' ?>
<?php require 'pwdgen.php' ?>

<form id="newpassword" action="index.php" method="post">
	<div class="form-group">
		<label for="numwords">Number of Words</label> 
		<input type="number" name="numwords" required max="9" value="<?php echo $numwords; ?>" class="form-control">
	</div>
	<div class="form-group">
	<label for="num">Include a number?</label>
		<input type="radio" name="num" required <?php echo $num_yes ?> value="yes"> Yes
		<input type="radio" name="num" required <?php echo $num_no ?> value="no"> No
	</div>
	<div class="form-group">
	<label for="symbol">Include a symbol?</label>
		<input type="radio" name="symbol" required <?php echo $symbol_yes ?> value="yes"> Yes
		<input type="radio" name="symbol" required <?php echo $symbol_no ?> value="no"> No
	</div>
	<div class="form-group">
		<label for="memorable">Make it memorable-ish?</label>
		<input type="radio" name="memorable" required <?php echo $memorable_yes ?> value="yes"> Yes
		<input type="radio" name="memorable" required <?php echo $memorable_no ?> value="no"> No
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-default">Password, please</button>
</form>

<?php if (isset($_POST['submit'])) { ?>
	<h1><?php print_r($password_string); ?></h1>
<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>