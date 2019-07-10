<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	// mengaktifkan session
	session_start();

	// menghapus semua session
	session_destroy();

	// mengalihkan halaman sambil mengirim pesan logout
	header("location:formlogin.php?pesan=logout");
	?>

</body>
</html>