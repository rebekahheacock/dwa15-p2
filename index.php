<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RHJ: XKCD Password Generator</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:700,400|Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/p2.css">
</head>
<body>

<?php require 'scraping.php' ?>
<?php require 'pwdgen.php' ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>xkcd Password Generator <small>Remember words, not gibberish</small></h1>
		</div>
		<div class="col-md-5">
			<a href="http://xkcd.com/936/"><img src="img/xkcd_password_strength.png" alt="XKCD Password Strength" class="img-responsive" title="Original hovertext: 'To anyone who understands information theory and security and is in an infuriating argument with someone who does not (possibly involving mixed case), I sincerely apologize.'"></a>
		</div>
		<div class="col-md-7">
			<div class="row">
				<div class="col-sm-12">
					<p class="password">
				<?php if (isset($_POST['submit'])) {
					if ($dino == 'checked') {
						echo '<img src="img/dino_small.png" alt="Dinosaur" width="21" height="24" />';
					}
					print_r($password_string);
				} else {
					echo '********';
				} ?>
					</p>
				</div>
			</div>
			<form id="newpassword" action="index.php" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="numwords" class="col-sm-4 control-label">Number of Words</label>
					<div class="col-sm-8">
						<input type="number" name="numwords" id="numwords" min="1" max="9" value="<?php echo $numwords; ?>" required class="form-control"> (max 9)
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 control-label">Include a number?*</div>
					<div class="col-sm-8">
						<label for="numyes" class="radio-inline">
							<input type="radio" name="num" id="numyes" required <?php echo $num_yes ?> value="yes"> Yes
						</label>
						<label for="numno" class="radio-inline">
							<input type="radio" name="num" id="numno" required <?php echo $num_no ?> value="no"> No
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 control-label">Include a symbol?*</div>
					<div class="col-sm-8">
						<label for="symbolyes" class="radio-inline">
							<input type="radio" name="symbol" id="symbolyes" required <?php echo $symbol_yes ?> value="yes"> Yes
						</label>
						<label for="symbolno" class="radio-inline">
							<input type="radio" name="symbol" id="symbolno" required <?php echo $symbol_no ?> value="no"> No
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 control-label">Separator*</div>
					<div class="col-sm-8">
						<label for="separatorspace" class="radio-inline">
							<input type="radio" name="separator" id="separatorspace" required <?php echo $separator_space ?> value="space"> Space
						</label>
						<label for="separatordash" class="radio-inline">
							<input type="radio" name="separator" id="separatordash" required <?php echo $separator_dash ?> value="dash"> -
						</label>
						<label for="separatordot" class="radio-inline">
							<input type="radio" name="separator" id="separatordot" required <?php echo $separator_dot ?> value="dot"> .
						</label>
						<br />
						<label for="separatornone" class="radio-inline">
							<input type="radio" name="separator" id="separatornone" required <?php echo $separator_none ?> value="none"> No separator
						</label>
						<label for="separatorrandom" class="radio-inline">
							<input type="radio" name="separator" id="separatorrandom" required <?php echo $separator_random ?> value="random"> Surprise me
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4 control-label">Let's get fancy</div>
					<div class="col-sm-8">
						<label for="memorable" class="radio-inline">
							<input type="radio" name="fancy" id="memorable" <?php echo $memorable ?> value="memorable"> Make it memorable <small>Four words in grammatically correct order</small>
						</label><br />
						<label for="dino" class="radio-inline">
							<input type="radio" name="fancy" id="dino" <?php echo $dino ?> value="dino"> Dinosaurs! <small>Include a <a href="https://github.com/dariusk/corpora">dinosaur</a> in the password</small>
						</label>
					</div>
				</div>
				<button type="submit" name="submit" value="submit" class="btn btn-lg btn-default col-sm-offset-4">Password, please!</button>
			</form>

		</div>
	</div>
</div>

<footer>
	<p><a href="https://thenounproject.com/search/?q=dinosaur&i=161852">Dinosaur icon</a> by <a href="https://thenounproject.com/goodmajr2827">Jennifer Goodman</a> on the <a href="https://thenounproject.com/">Noun Project</a>. Used under a <a href="http://creativecommons.org/licenses/by/3.0/us/">CC-BY 3.0</a> license.</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/p2.js"></script>
</body>
</html>