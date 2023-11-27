<?php
include('../../config/config.php');

$dacdiem = $_POST['dacdiem'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$nhommun = $_POST['nhommun'];


if(isset($_POST['themdacdiem'])){
	//them
	$sql_them = "INSERT INTO tbl_dacdiem(dacdiem,hinhanh,ma_nhommun) VALUE('".$dacdiem."','".$hinhanh."','".$nhommun."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlydacdiem&query=them');
}elseif(isset($_POST['suadacdiem'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_dacdiem SET dacdiem='".$dacdiem."',hinhanh='".$hinhanh."',ma_nhommun='".$nhommun."' WHERE ma_dacdiem='$_GET[ma_dacdiem]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_dacdiem WHERE ma_dacdiem = '$_GET[ma_dacdiem]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_dacdiem SET dacdiem='".$dacdiem."',ma_nhommun='".$nhommun."' WHERE ma_dacdiem='$_GET[ma_dacdiem]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydacdiem&query=them');
}else{
	$id=$_GET['ma_dacdiem'];
	$sql = "SELECT * FROM tbl_dacdiem WHERE ma_dacdiem = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_dacdiem WHERE ma_dacdiem='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydacdiem&query=them');
}

?>