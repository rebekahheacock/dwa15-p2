<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RHJ: XKCD Password Generator</title>
</head>
<body>

<form id="newpassword">
	<label for="numwords">Number of Words</label> 
	<input type="number" id="numwords">
	<br />

	<label for="number">Include a number?</label>
	<input type="radio" name="number" value="yes" checked> Yes 
	<input type="radio" name="number" value="no"> No
	<br />
	
	<label for ="symbol">Include a symbol?</label>
	<input type="radio" name="symbol" value="yes" checked> Yes 
	<input type="radio" name="symbol" value="no"> No

	<br />
	<input type="submit" id="submit" value="submit">
</form>
	
</body>
</html>