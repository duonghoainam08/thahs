<?php
	$sql_lietke_nhommun = "SELECT * FROM tbl_nhommun ORDER BY ma_nhommun DESC";
	$query_lietke_nhommun = mysqli_query($mysqli,$sql_lietke_nhommun);
?>
<p   style=" margin: 0;padding-top: 25px;color: #ffbf00;text-align: center;font-size: 30px;padding-bottom: 10px;">Liệt kê nhóm mụn</p>
<table style="width:100%; text-align: center"; border="1" style="border-collapse: collapse;">
  <tr >
  	<th style=" text-align: center";>Id</th>
    <th style=" text-align: center";>Tên nhóm mụn</th>
    <th style=" text-align: center";>Hình ảnh</th>
  	<th style=" text-align: center";>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_nhommun)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tennhom'] ?></td>
    <td><img src="modules/quanlynhommun/uploads/<?php echo $row['images'] ?>" width="200px";height="200px"></td>
   	<td>
   		<a href="modules/quanlynhommun/xuly.php?ma_nhommun=<?php echo $row['ma_nhommun'] ?>">Xoá</a> | <a href="?action=quanlynhommun&query=sua&ma_nhommun=<?php echo $row['ma_nhommun'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>