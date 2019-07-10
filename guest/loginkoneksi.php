<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		//1301164085

		//Mengaktifkan session php
		session_start();

		//Menyertakan koneksi yang telah dibuat
		include 'connection.php';

		//Menerima data dari form
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Memilih dan mencocokan data yang diinputkan dengan username dan password yang ada pada tabel akademik3
		$data = mysqli_query($conn, "select * from member where username='$username' and password='$password'");

		//Menghitung jumlah baris data yang ditemukan pada tabel member
		$cek = mysqli_num_rows($data);

		if ($cek > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			header("location:menu.php");
	 	} else {
			echo "<script>alert('Username/Password Salah'); window.history.back()</script>";
	 	}

	?>

</body>
</html>