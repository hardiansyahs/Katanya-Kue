<?php
include 'connection.php';

  /* Insert Your Query to Edit and Delete User*/ //1301164097
    function edt($conn){
         /*Insert Your Query to Edit User*/
         if (isset($_POST['edit'])) {
	         $id = $_POST['idkue'];
	         $namakue = $_POST['namakue'];
	         $harga = $_POST['harga'];
	         $status = $_POST['status'];
	         $query = mysqli_query($conn,"UPDATE `kue` SET `namakue` = '$namakue', `harga` = '$harga', `status` = '$status' WHERE idkue = '$id';");
	         if (isset($query)) {
		 		header("location: managekue.php");
		 		exit;

		 	}
         }

         if(isset($_POST['edit'])) {
         	$id = $_POST['idkue'];
         	$namakue = $_POST['namakue'];
         	$harga = $_POST['harga'];
         	$status = $_POST['status'];
         	$query = mysqli_query($conn, "UPDATE 'kue' set 'namakue' = '$namakue', 'harga' = '$harga', '$status' = '$status' WHERE idkue = '$id'; ");
         	if (isset($query)) {
         		header("location:managekue.php");
         		exit;
         	}
         }
         

    }
    
    function del($conn){ //1301164367
        /* Insert Your Query to Delete User*/
        if (isset($_POST["delete"])) {
		 	$id = $_POST['idkue'];
		 	
		 	$query = mysqli_query($conn,"DELETE FROM `kue` WHERE idkue = '$id';");
		 	//$query1 = mysqli_query($conn,"DELETE FROM 'kue' WHERE 'idkue' = '$id';");
		 	if (isset($query)) {
		 		header("Location: managekue.php");
		 		exit;

		 	}
        }
        
    }
    edt($conn);
    del($conn);
  ?>