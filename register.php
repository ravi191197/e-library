<?php
	$connection = mysqli_connect("localhost","root","", lms3) or die(mysqli_error($connection));

	$query = "insert into users values(null,'$_POST[name]','$_POST[fname]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>