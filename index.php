<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RHJ: XKCD Password Generator</title>
</head>
<body>

<form id="newpassword" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<label for="numwords">Number of Words</label> 
	<input type="number" name="numwords" value="<?php echo $_POST["numwords"]; ?>">
	<br />

	<label for="number">Include a number?</label>
	<input type="radio" name="number" <?php if ($_POST["number"] == 'yes') { ?>checked <?php }; ?>value="yes"> Yes
	<input type="radio" name="number" <?php if ($_POST["number"] == 'no') { ?>checked <?php }; ?>value="no"> No
	<br />

	<label for ="symbol">Include a symbol?</label>
	<input type="radio" name="symbol" <?php if ($_POST["symbol"] == 'yes') { ?>checked <?php }; ?>value="yes"> Yes
	<input type="radio" name="symbol" <?php if ($_POST["symbol"] == 'no') { ?>checked <?php }; ?>value="no"> No
	<br />

	<br />
	<input type="submit" name="submit" value="submit">
</form>

Number of words: <?php echo $_POST["numwords"]; ?><br>
Include a number: <?php echo $_POST["number"]; ?><br>
Include a symbol: <?php echo $_POST["symbol"]; ?><br>

	
</body>
</html>