<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Thêm phương pháp trị mụn</p>
<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" enctype="multipart/form-data" action="modules/quanlyphuongphap/xuly.php" >
	  <tr>
	  	<td>Tên phương pháp</td>
	  	<td><input  rows="10" cols="100" type="text" name="tenphuongphap"></td>
	  </tr>
	   <tr>
	  	<td>Phương pháp</td>
	  	<td><textarea  rows="10" cols="100"  name="phuongphap" id="editor" style="resize: none"></textarea></td>
	  </tr>
	  <tr>
	    <td>Nhóm mụn</td>
	    <td>
	    	<select name="nhommun">
	    		<?php
	    		$sql_nhommun = "SELECT * FROM tbl_nhommun ORDER BY ma_nhommun DESC";
	    		$query_nhommun = mysqli_query($mysqli,$sql_nhommun);
	    		while($row_nhommun = mysqli_fetch_array($query_nhommun)){
	    		?>
	    		<option value="<?php echo $row_nhommun['ma_nhommun'] ?>"><?php echo $row_nhommun['tennhom'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themphuongphap" value="Thêm phương pháp"></td>
	  </tr>
 </form>
</table>