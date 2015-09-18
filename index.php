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

<form id="newpassword" action="index.php" method="post" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-2 control-label">Let's get fancy</div>
		<div class="col-sm-10">
			<label for="memorable" class="radio-inline">
				<input type="radio" name="fancy" id="memorable" <?php echo $memorable ?> value="memorable"> Make it memorable
			</label>
			<label for="dino" class="radio-inline">
				<input type="radio" name="fancy" id="dino" <?php echo $dino ?>value="dino"> Dinosaurs!
			</label>
		</div>
	</div>
	<div class="form-group">
		<label for="numwords" class="col-sm-2 control-label">Number of Words</label> 
		<div class="col-sm-10">
			<input type="number" name="numwords" required max="9" value="<?php echo $numwords; ?>" class="form-control">
		</div>
	</div>
	<div class="form-group">
	<div class="col-sm-2 control-label">Include a number?</div>
		<div class="col-sm-10">
			<label for="numyes" class="radio-inline">
				<input type="radio" name="num" id="numyes" required <?php echo $num_yes ?> value="yes"> Yes
			</label>
			<label for="numno" class="radio-inline">
				<input type="radio" name="num" id="numno" required <?php echo $num_no ?> value="no"> No
			</label>
		</div>
	</div>
	<div class="form-group">
	<div class="col-sm-2 control-label">Include a symbol?</div>
		<div class="col-sm-10">
			<label for="symbolyes" class="radio-inline">
				<input type="radio" name="symbol" id="symbolyes" required <?php echo $symbol_yes ?> value="yes"> Yes
			</label>
			<label for="symbolno" class="radio-inline">
				<input type="radio" name="symbol" id="symbolno" required <?php echo $symbol_no ?> value="no"> No
			</label>
		</div>
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-default col-sm-offset-2">Password, please!</button>
</form>

<?php if (isset($_POST['submit'])) { ?>
	<h1><?php print_r($password_string); ?></h1>
<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/p2.js"></script>
</body>
</html>