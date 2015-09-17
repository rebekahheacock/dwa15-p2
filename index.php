<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RHJ: XKCD Password Generator</title>
</head>
<body>

<?php require 'scraping.php' ?>
<?php require 'pwdgen.php' ?>

<form id="newpassword" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	<label for="numwords">Number of Words</label> 
	<input type="number" name="numwords" required max="9" value="<?php echo $_POST['numwords']; ?>">
	<br />

	<label for="num">Include a number?</label>
	<input type="radio" name="num" required <?php echo $num_yes ?> value="yes"> Yes
	<input type="radio" name="num" required <?php echo $num_no ?> value="no"> No
	<br />

	<label for="symbol">Include a symbol?</label>
	<input type="radio" name="symbol" required <?php echo $symbol_yes ?> value="yes"> Yes
	<input type="radio" name="symbol" required <?php echo $symbol_no ?> value="no"> No
	<br />

	<label for="memorable">Make it memorable?</label>
	<input type="radio" name="memorable" required <?php echo $memorable_yes ?> value="yes"> Yes
	<input type="radio" name="memorable" required <?php echo $memorable_no ?> value="no"> No

	<br />
	<input type="submit" name="submit" value="submit">
</form>

<?php if (isset($_POST['submit'])) { ?>
	<h1><?php print_r($password_string); ?></h1>
<?php } ?>


	
</body>
</html>