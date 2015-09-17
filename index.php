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

<?php require 'pwdgen.php' ?>

<form id="newpassword" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	<label for="numwords">Number of Words</label> 
	<input type="number" name="numwords" value="<?php echo $_POST['numwords']; ?>">
	<br />

	<label for="num">Include a number?</label>
	<input type="radio" name="num" <?php echo $num_yes ?> value="yes"> Yes
	<input type="radio" name="num" <?php echo $num_no ?> value="no"> No
	<br />

	<label for ="symbol">Include a symbol?</label>
	<input type="radio" name="symbol" <?php echo $symbol_yes ?> value="yes"> Yes
	<input type="radio" name="symbol" <?php echo $symbol_no ?> value="no"> No
	<br />

	<br />
	<input type="submit" name="submit" value="submit">
</form>

Number of words: <?php echo $numwords; ?><br>
Include a number: <?php echo $num ?><br>
Include a symbol: <?php echo $symbol ?><br>

<?php if (isset($_POST['submit'])) { ?>
	<h1><?php echo $new_password; ?></h1>
<?php } ?>


	
</body>
</html>