<?php
include('../../config/config.php');

$tenphuongphap = $_POST['tenphuongphap'];
$phuongphap = $_POST['phuongphap'];
$nhommun = $_POST['nhommun'];


if(isset($_POST['themphuongphap'])){
	//them
	$sql_them = "INSERT INTO tbl_phuongphap(tenphuongphap,phuongphap,ma_nhommun) VALUE('".$tenphuongphap."','".$phuongphap."','".$nhommun."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlyphuongphap&query=them');
}elseif(isset($_POST['suaphuongphap'])){
	//sua
	$sql_update = "UPDATE tbl_phuongphap SET tenphuongphap='".$tenphuongphap."',phuongphap='".$phuongphap."',ma_nhommun='".$nhommun."' WHERE ma_phuongphap='$_GET[ma_phuongphap]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyphuongphap&query=them');
}else{
	$id=$_GET['ma_phuongphap'];
	$sql_xoa = "DELETE FROM tbl_phuongphap WHERE ma_phuongphap='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyphuongphap&query=them');
}

?>