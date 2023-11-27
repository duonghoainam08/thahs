<?php
	$sql_sua_nhommun = "SELECT * FROM tbl_nhommun WHERE ma_nhommun='$_GET[ma_nhommun]' LIMIT 1";
	$query_sua_nhommun = mysqli_query($mysqli,$sql_sua_nhommun);
?>
<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Sửa nhóm mụn</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_nhommun)) {
?>
 <form method="POST" enctype="multipart/form-data" action="modules/quanlynhommun/xuly.php?ma_nhommun=<?php echo $row['ma_nhommun'] ?>" >
	  <tr>
	  	<td>Tên nhóm mụn</td>
	  	<td><input type="text" size="50%" value="<?php echo $row['tennhom'] ?>" name="tennhommun"></td>
	  </tr>
	  <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="images">
	  		<img src="modules/quanlynhommun/uploads/<?php echo $row['images'] ?>" width="150px">
	  	</td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suanhommun" value="Sửa nhóm mụn"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>