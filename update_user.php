<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['edit'])){
		$user_id = $_POST['user_id'];
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
		
		mysqli_query($conn, "UPDATE `user` SET `fullname` = '$fullname', `chucvu` = '$chucvu', `username` = '$username', `password` = '$password', `status` = '$status' WHERE `user_id` = '$user_id'") or die(mysqli_error());
		
		echo "<script>alert('Successfully updated!')</script>";
		echo "<script>window.location = 'user.php'</script>";
	}
?>