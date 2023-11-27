<!DOCTYPE html>
<?php 
	require 'validator.php';
	require_once 'config/config.php'
?>
<html lang = "en">
<?php include 'header.php' ?>
<body>

	<?php include 'title.php'?>

	<?php include 'sidebar.php'?>
	<div id = "content">
		<br /><br /><br />
		<div class="alert alert-info"><h3>Quản lý tài khoản cán bộ</h3></div> 
		<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Thêm cán bộ</button>
		<br /><br />
		<table id = "table" class="table table-bordered">
			<thead>
				<tr>
					<th>Họ tên</th>
					<th>Chức vụ</th>
					<th>Tài khoản</th>
					<th>Mật khẩu</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
					<tr class="del_user<?php echo $fetch['user_id']?>">
						<td><?php echo $fetch['fullname']?></td>
						<td><?php echo $fetch['chucvu']?></td>
						<td><?php echo $fetch['username']?></td>
						<td>********</td>
						<td><center><button class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['user_id']?>"><span class="glyphicon glyphicon-edit"></span> Cập nhật</button> 
						<?php
							if($_SESSION['user'] != $fetch['user_id']){
						?>
							| <button class="btn btn-danger btn-delete" id="<?php echo $fetch['user_id']?>" type="button"><span class="glyphicon glyphicon-trash"></span> Xóa</button></center></td>
						<?php
							}
						?>
					</tr>
					
					<div class="modal fade" id="edit_modal<?php echo $fetch['user_id']?>" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form method="POST" action="update_user.php">	
									<div class="modal-header">
										<h4 class="modal-title">Cập nhật thông tin</h4>
									</div>
									<div class="modal-body">
										<div class="col-md-3"></div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Họ tên</label>
												<input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>"/>
												<input type="text" name="fullname" value="<?php echo $fetch['fullname']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Chức vụ</label>
												<select name="chucvu" class="form-control" required="required">
													<option value=""></option>
													<option value="1">Đội trưởng</option>
													<option value="2">Đội phó</option>
													<option value="0">Cán bộ</option>
												</select>
											</div>
											<div class="form-group">
												<label>Tài khoản</label>
												<input type="text" name="username" value="<?php echo $fetch['username']?>" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Mật khẩu</label>
												<input type="password" name="password" class="form-control" required="required"/>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Đóng</button>
										<button name="edit" class="btn btn-warning" ><span class="glyphicon glyphicon-save"></span> Cập nhật</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
					
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Thông báo</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">Bạn có chắc chắn muốn xóa dữ liệu này?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng </button>
					<button type="button" class="btn btn-success" id="btn_yes"> Đồng ý</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="save_user.php">	
					<div class="modal-header">
						<h4 class="modal-title">Thêm cán bộ</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Họ tên</label>
								<input type="text" name="fullname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Chức vụ</label>
									<select name="chucvu" class="form-control" required="required">
										<option value=""></option>
										<option value="1">Đội trưởng</option>
										<option value="2">Đội phó</option>
										<option value="0">Cán bộ</option>
									</select>
							</div>
							<div class="form-group">
								<label>Tài khoản</label>
								<input type="text" name="username" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<input type="password" name="password" class="form-control" required="required"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Đóng</button>
						<button name="save" class="btn btn-success" ><span class="glyphicon glyphicon-save"></span> Lưu</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'?>

<?php include 'script.php'?>
<script type="text/javascript">
$(document).ready(function(){
	$('.btn-delete').on('click', function(){
		var user_id = $(this).attr('id');
		$("#modal_confirm").modal('show');
		$('#btn_yes').attr('name', user_id);
	});
	$('#btn_yes').on('click', function(){
		var id = $(this).attr('name');
		$.ajax({
			type: "POST",
			url: "delete_user.php",
			data:{
				user_id: id
			},
			success: function(){
				$("#modal_confirm").modal('hide');
				$(".del_user" + id).empty();
				$(".del_user" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");
				setTimeout(function(){
					$(".del_user" + id).fadeOut('slow');
				}, 1000);
			}
		});
	});
});
</script>	
</body>
</html>