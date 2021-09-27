
<?php
	if(isset($_POST['submit'])){

		$gpa1 = (float) $_POST['first_cgpa'];
		$gpa2 = (float) $_POST['second_cgpa'];
		$gpa3 = (float) $_POST['third_cgpa'];
		$gpa4 = (float) $_POST['fourth_cgpa'];
		$gpa5 = (float) $_POST['fifth_cgpa'];
		$gpa6 = (float) $_POST['sixth_cgpa'];
		$gpa7 = (float) $_POST['seventh_cgpa'];
		$gpa8 = (float) $_POST['eighth_cgpa'];

		$cgpa = ($gpa1 * 0.05);
		$cgpa += ($gpa2 * 0.05); 
		$cgpa += ($gpa3 * 0.05);
		$cgpa += ($gpa4 * 0.15);
		$cgpa += ($gpa5 * 0.15);
		$cgpa += ($gpa6 * 0.20);
		$cgpa += ($gpa7 * 0.25);
		$cgpa += ($gpa8 * 0.10);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diploma in Engineering Bangladesh CGPA Calculator | 2010 Regulation</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
	<body class="bg-dark">
		<div class="container">
			<div class="form-container bg-light">
				<form name="calculate-cgpa" id="calculate-cgpa" action="" method="POST">
				<h3 class="page-title">Diploma In Engineering Bangladesh CGPA Calculator</h3>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="first-cgpa">First Semester CGPA</div>
							<div class="col-md-7">
								<input name="first_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa1))?$gpa1:"" ?>">
							</div>

						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="second-cgpa">Second Semester CGPA</div>
							<div class="col-md-7">
								<input name="second_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa2))?$gpa2:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="third-cgpa">Third Semester CGPA</div>
							<div class="col-md-7">
								<input name="third_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa3))?$gpa3:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="fourth-cgpa">Fourth Semester CGPA</div>
							<div class="col-md-7">
								<input name="fourth_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa4))?$gpa4:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="fifth-cgpa">Fifth Semester CGPA</div>
							<div class="col-md-7">
								<input name="fifth_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa5))?$gpa5:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="sixth-cgpa">Sixth Semester CGPA</div>
							<div class="col-md-7">
								<input name="sixth_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa6))?$gpa6:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="seventh-cgpa">Seventh Semester CGPA</div>
							<div class="col-md-7">
								<input name="seventh_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa7))?$gpa7:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5"><label for="eighth-cgpa">Eighth Semester CGPA</div>
							<div class="col-md-7">
								<input name="eighth_cgpa" type="text" class="form-control" min="1" max="4" required value="<?= (isset($gpa8))?$gpa8:"" ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-12"><input type="submit" class="btn btn-md btn-success btn-block" value="Calculate CGPA" name="submit"/></div>
						</div>
					</div>
				</form>
				<?php if (isset($cgpa)): ?>
					<div class='alert alert-success display-cgpa'>Your CGPA is : <strong><?php echo $cgpa ?></strong></div>
				<?php endif ?>
			</div>

	
		</div>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script>
			$("#calculate-cgpa").validate();
		</script>

	</body>
</html>
