<?php
include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	

	<title></title>
</head>
<body>

<form action="upload_submit.php" method="post" enctype="multipart/form-data">
<div class="form-row mt-5">
	<div class="col-md-6 mx-auto">
	<label>Select Image File to Upload: </label>
   <input type="file" name="file" id="file" class="form-control">
	<!-- </div>

	<div class="col-md-4"> -->
		<label></label><br>
    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Upload">
	</div>
</div>
</form>

</body>
</html>



