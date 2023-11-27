<?php
	$sql_sua_phuongphap = "SELECT * FROM tbl_phuongphap WHERE ma_phuongphap='$_GET[ma_phuongphap]' LIMIT 1";
	$query_sua_phuongphap = mysqli_query($mysqli,$sql_sua_phuongphap);
?>
<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Sửa phương pháp trị mụn</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_phuongphap)) {
?>
 <form method="POST" action="modules/quanlyphuongphap/xuly.php?ma_phuongphap=<?php echo $row['ma_phuongphap'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên phương pháp</td>
	  	<td><input type="text" value="<?php echo $row['tenphuongphap'] ?>" name="tenphuongphap"></td>
	  </tr>
	   <tr>
	  	<td>Phương pháp</td>
	  	<td><textarea rows="10" cols="100"  name="phuongphap" id="editor" style="resize: none"><?php echo  $row['phuongphap'] ?></textarea></td>
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
	    <td colspan="2"><input type="submit" name="suaphuongphap" value="Sửa phương pháp"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>