<?php
	$sql_sua_dacdiem = "SELECT * FROM tbl_dacdiem WHERE ma_dacdiem='$_GET[ma_dacdiem]' LIMIT 1";
	$query_sua_dacdiem = mysqli_query($mysqli,$sql_sua_dacdiem);
?>
<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Sửa đặc điểm mụn</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_dacdiem)) {
?>
 <form method="POST" enctype="multipart/form-data" action="modules/quanlydacdiem/xuly.php?ma_dacdiem=<?php echo $row['ma_dacdiem'] ?>" >
	  <tr>
	  	<td>Đặc điểm</td>
		<td><textarea rows="10" cols="100"  name="dacdiem" id="editor" style="resize: none"><?php echo  $row['dacdiem'] ?></textarea></td>
	  </tr>
	  <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlydacdiem/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>
	  </tr>
	  <tr>
	    <td>Nhóm mụn</td>
	    <td>
	    	<select name="nhommun">
	    		<?php
	    		$sql_nhommun = "SELECT * FROM tbl_nhommun ORDER BY ma_nhommun DESC";
	    		$query_nhommun = mysqli_query($mysqli,$sql_nhommun);
	    		while($row_nhommun = mysqli_fetch_array($query_nhommun)){
	    			if($row_nhommun['ma_nhommun']==$row['ma_nhommun']){
	    		?>
	    		<option selected value="<?php echo $row_nhommun['ma_nhommun'] ?>"><?php echo $row_nhommun['tennhom'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_nhommun['ma_nhommun'] ?>"><?php echo $row_nhommun['tennhom'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suadacdiem" value="Sửa đặc điểm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>