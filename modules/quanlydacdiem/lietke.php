<?php
	$sql_lietke_dacdiem = "SELECT * FROM tbl_nhommun,tbl_dacdiem WHERE tbl_dacdiem.ma_nhommun=tbl_nhommun.ma_nhommun ORDER BY ma_dacdiem DESC";
	$query_lietke_dacdiem = mysqli_query($mysqli,$sql_lietke_dacdiem);
?>
<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Liệt kê đặc điểm mụn</p>
<table style="width:100%; text-align: center" border="1" style="border-collapse: collapse;">
  <tr>
  	<th style="width:30px ;text-align: center;">Id</th>
    <th style="width:600px ;text-align: center;">Đặc điểm</th>
    <th style=" text-align: center";>Hình ảnh</th>
    <th style=" text-align: center";>Nhóm mụn</th>
  	<th style=" text-align: center";>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dacdiem)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['dacdiem'] ?></td>
    <td><img src="modules/quanlydacdiem/uploads/<?php echo $row['hinhanh'] ?>" width="200px";height="200px"></td>
    <td><?php echo $row['tennhom'] ?></td>
   	<td>
   		<a href="modules/quanlydacdiem/xuly.php?ma_dacdiem=<?php echo $row['ma_dacdiem'] ?>">Xoá</a> | <a href="?action=quanlydacdiem&query=sua&ma_dacdiem=<?php echo $row['ma_dacdiem'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>