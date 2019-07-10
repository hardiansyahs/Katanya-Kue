<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		//1301164255

		$nama = (isset($_POST['nama']) && !empty($_POST['nama'])) ? $_POST['nama'] : "" ;
		$username = (isset($_POST['username']) && !empty($_POST['username'])) ? $_POST['username'] : "" ;
		$password = (isset($_POST['password']) && !empty($_POST['password'])) ? $_POST['password'] : "" ;
		$email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : "" ;
		include "connection.php";
		$query = mysqli_query($conn, "INSERT INTO member(nama_m, username_m, password, email) VALUES ('".$nama."','".$username."','".$password."','".$email."')");
		if ($query) echo "<script>alert('Anda Berhasil Menjadi Member!!'); window.location.href='formlogin.php'</script>";//echo header("location:formlogin.php");
		else echo "Data gagal diinput";
	?>


</body>
</html>