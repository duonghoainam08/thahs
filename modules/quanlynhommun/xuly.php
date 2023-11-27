<?php
include('../../config/config.php');

$tennhom = $_POST['tennhommun'];
//xuly hinh anh
$images = $_FILES['images']['name'];
$images_tmp = $_FILES['images']['tmp_name'];
$images = time().'_'.$images;


if(isset($_POST['themnhommun'])){
	//them
	$sql_them = "INSERT INTO tbl_nhommun(tennhom,images) VALUE('".$tennhom."','".$images."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($images_tmp,'uploads/'.$images);
	header('Location:../../index.php?action=quanlynhommun&query=them');
}elseif(isset($_POST['suanhommun'])){
	//sua
	if(!empty($_FILES['images']['name'])){
		move_uploaded_file($images_tmp,'uploads/'.$images);
		$sql_update = "UPDATE tbl_nhommun SET tennhom='".$tennhom."',images='".$images."' WHERE ma_nhommun='$_GET[ma_nhommun]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_nhommun WHERE ma_nhommun = '$_GET[ma_nhommun]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['images']);
		}

	}else{
		$sql_update = "UPDATE tbl_nhommun SET tennhom='".$tennhom."' WHERE ma_nhommun='$_GET[ma_nhommun]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlynhommun&query=them');
}else{
	$id=$_GET['ma_nhommun'];
	$sql = "SELECT * FROM tbl_nhommun WHERE ma_nhommun = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['images']);
	}
	$sql_xoa = "DELETE FROM tbl_nhommun WHERE ma_nhommun='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlynhommun&query=them');
}

?>