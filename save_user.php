<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$fullname = $_POST['fullname'];
		$tam = $_POST['chucvu'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		if($tam==1){
			$chucvu = "Đội trưởng";
			$status = 1;
		}
		if($tam==2){
			$chucvu = "Đội phó";
			$status = 1;
		}
		if($tam==0){
			$chucvu = "Cán bộ";
			$status = 0;
		}
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$fullname', '$chucvu', '$username', '$password', '$status')") or die(mysqli_error());
		
		header('location: user.php');
	}
?>