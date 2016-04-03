<!DOCTYPE html>
<html lang="en">
<!--Head-->
<head>
	<?php
		require 'all_require.php';
	?>
</head>

<!--Body content-->
<body>
<!--Header-->
<?php
require 'header.php';
?>

<!--Member information-->
<div class="container" id="members">
	<?php
	require 'member.php';
	?>
</div>                                  
<hr>

<!--Team Vision -->
<div class="teamVision">
	<?php
		require 'index_vision.php';
	?>
</div>
<hr>

<!--Footer-->
<?php
require 'footer.php';	
?>
	
<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	
</body>
</html>