<?php
	$sql_lietke_phuongphap = "SELECT * FROM tbl_phuongphap,tbl_nhommun WHERE tbl_phuongphap.ma_nhommun=tbl_nhommun.ma_nhommun ORDER BY ma_phuongphap DESC";
	$query_lietke_phuongphap = mysqli_query($mysqli,$sql_lietke_phuongphap);
?>
<p style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Liệt kê phương pháp trị mụn</p>
<table style="width:100%; text-align: center"; border="1" style="border-collapse: collapse;">
  <tr>
  	<th style="width:30px ;text-align: center;">Id</th>
    <th style="width: 200px ;text-align: center;">Tên phương pháp</th>
    <th style="width:700px ;text-align: center;">Phương pháp</th>
    <th style=" text-align: center";>Nhóm mụn</th>
  	<th style=" text-align: center";>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_phuongphap)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenphuongphap'] ?></td>
    <td><?php echo $row['phuongphap'] ?></td>
    <td><?php echo $row['tennhom'] ?></td>
   	<td>
   		<a href="modules/quanlyphuongphap/xuly.php?ma_phuongphap=<?php echo $row['ma_phuongphap'] ?>">Xoá</a> | <a href="?action=quanlyphuongphap&query=sua&ma_phuongphap=<?php echo $row['ma_phuongphap'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
</table>