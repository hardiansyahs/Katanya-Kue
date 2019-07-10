<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		//Mengaktifkan session php
		session_start();

		//Menyertakan koneksi yang telah dibuat
		include 'connection.php';

		//Menerima data dari form
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Memilih dan mencocokan data yang diinputkan dengan username dan password yang ada pada tabel admin
		$data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

		//Menghitung jumlah baris data yang ditemukan pada tabel admin
		$cek = mysqli_num_rows($data);

		if ($cek > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			header("location:managekue.php");
	 	} else {
			echo "<script>alert('Username/Password Salah'); window.history.back()</script>";
	 	}

	?>

</body>
</html>