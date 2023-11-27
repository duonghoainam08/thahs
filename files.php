<!DOCTYPE html>
<?php
require 'validator.php';
require_once 'config/config.php'
?>
<html lang="en">
<?php include 'header.php' ?>

<body>

	<?php include 'title.php' ?>

	<?php include 'sidebar.php' ?>
	<div id="content">
		<br /><br /><br />
		<div class="alert alert-info">
			<h3>Quản lý hồ sơ chấp hành xong án phạt tù</h3>
		</div>
		<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Thêm hồ sơ</button>
		<br /><br />
		<table id="table" class="table table-bordered">
			<thead>
				<tr>
					<th>Họ tên</th>
					<th>Chức vụ</th>
					<th>Tài khoản</th>
					<th>Mật khẩu</th>
					<th>Mật khẩu</th>
					<th>Mật khẩu</th>
					<th>Mật khẩu</th>
					<th>Mật khẩu</th>
					<th>Mật khẩu</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($conn, "SELECT * FROM `user`") or die(mysqli_error());
				while ($fetch = mysqli_fetch_array($query)) {
				?>
					<tr class="del_user<?php echo $fetch['user_id'] ?>">
						<td><?php echo $fetch['fullname'] ?></td>
						<td><?php echo $fetch['chucvu'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td><?php echo $fetch['username'] ?></td>
						<td>********</td>
						<td>
							<center><button class="btn btn-warning" data-toggle="modal" data-target="#edit_modal<?php echo $fetch['user_id'] ?>"><span class="glyphicon glyphicon-edit"></span> Cập nhật</button>
								| <button class="btn btn-danger btn-delete" id="<?php echo $fetch['user_id'] ?>" type="button"><span class="glyphicon glyphicon-trash"></span> Xóa</button></center>
						</td>
					</tr>

					<div class="modal fade" id="edit_modal<?php echo $fetch['user_id'] ?>" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form method="POST" action="update_user.php">
									<div class="modal-header">
										<h4 class="modal-title">Cập nhật thông tin</h4>
									</div>
									<div class="modal-body">
										<div class="col-md-3">
											<div class="form-group">
												<label>Họ tên</label>
												<input type="hidden" name="user_id" value="<?php echo $fetch['user_id'] ?>" />
												<input type="text" name="fullname" value="<?php echo $fetch['fullname'] ?>" class="form-control" required="required" />
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
												<input type="text" name="username" value="<?php echo $fetch['username'] ?>" class="form-control" required="required" />
											</div>
											<div class="form-group">
												<label>Mật khẩu</label>
												<input type="password" name="password" class="form-control" required="required" />
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Đóng</button>
										<button name="edit" class="btn btn-warning"><span class="glyphicon glyphicon-save"></span> Cập nhật</button>
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
					<center>
						<h4 class="text-danger">Bạn có chắc chắn muốn xóa dữ liệu này?</h4>
					</center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng </button>
					<button type="button" class="btn btn-success" id="btn_yes"> Đồng ý</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog-centered col-sm-12">
			<div class="modal-content col-sm-12">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Thêm sồ sơ</h3>
					</div>
					<div class="modal-body">
						<div class="col-sm-3">
							<div class="text-center">
								<img src="./images/avatar_2x.png" class="avatar img-thumbnail" style="height: 300px; width:300px;" alt="avata">
								<h3>Ảnh</h3>
								<input type="file" name="avata" class="text-center center-block file-upload">
							</div>

							<div class="text-center">
								<h3>Giấy chấp hành xong án phạt tù</h3>
								<input class="form-control" type="file" id="formFile">
							</div>

						</div><!--/col-3-->
						<div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane active">
									<form class="form" action="##" method="post" id="registrationForm">
										<div class="form-group">

											<div class="col-xs-6">
												<label for="full_name">
													<h4>Họ tên</h4>
												</label>
												<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Họ tên" title="Vui lòng nhập Họ tên.">
											</div>

											<div class="col-xs-2">
												<label for="name">
													<h4>Tên khác</h4>
												</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Tên khác">
											</div>

											<div class="col-xs-2">
												<label for="mobile">
													<h4>Năm sinh</h4>
												</label>
												<input type="date" class="form-control" name="mobile" id="mobile" placeholder="Năm sinh" title="Vui lòng nhập Năm sinh.">
											</div>

											<div class="col-xs-2">
												<label for="gender">
													<h4>Giới tính</h4>
												</label>
												<select name="chucvu" class="form-control" required="required" name="gender" id="gender">
													<option value=""></option>
													<option value="1">Nam</option>
													<option value="0">Nữ</option>
												</select>
											</div>

											<div class="col-xs-2">
												<label for="so_nha">
													<h4>HKTT: Số nhà</h4>
												</label>
												<input type="text" class="form-control" name="so_nha" id="so_nha" placeholder="Số nhà" title="enter your email.">
											</div>

											<div class="col-xs-2">
												<label for="email">
													<h4>Khóm/Ấp</h4>
												</label>
												<input type="text" class="form-control" id="location" placeholder="Khóm/ấp" title="enter a location">
											</div>

											<div class="col-xs-2">
												<label for="password">
													<h4>Xã/Thị trấn</h4>
												</label>
												<input type="text" class="form-control" name="password" id="password" placeholder="Xã/Thị trấn" title="enter your password.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Quận/Huyện</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Quận/Huyện" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Tỉnh/Thành phố</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Tỉnh/Thành phố" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Quê quán</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Quê quán" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Dân tộc</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Dân tộc" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Tôn giáo</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Tôn giáo" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Quốc tịch</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Quốc tịch" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Học vấn</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Tỉnh/Thành phố" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Nghề nghiệp</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Tỉnh/Thành phố" title="enter your password2.">
											</div>

											<div class="col-xs-4">
												<label for="password2">
													<h4>Họ tên cha</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Họ tên cha" title="enter your password2.">
											</div>

											<div class="col-xs-4">
												<label for="password2">
													<h4>Họ tên mẹ</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Họ tên mẹ" title="enter your password2.">
											</div>

											<div class="col-xs-4">
												<label for="password2">
													<h4>Họ tên vợ/chồng</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Họ tên vợ/chồng" title="enter your password2.">
											</div>

											<div class="col-xs-6">
												<label for="password2">
													<h4>Hành vi phạm tội</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Hành vi phạm tội" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Ngày bắt</h4>
												</label>
												<input type="date" class="form-control" name="password2" id="password2" placeholder="Ngày bắt" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Loại ĐT</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Loại ĐT" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Phân loại</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Phân loại" title="enter your password2.">
											</div>

											<div class="col-xs-1">
												<label for="password2">
													<h4>Số GCN</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Số GCN" title="enter your password2.">
											</div>

											<div class="col-xs-2">
												<label for="password2">
													<h4>Ngày cấp</h4>
												</label>
												<input type="date" class="form-control" name="password2" id="password2" placeholder="Ngày cấp" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Trại giam</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Trại giam" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Đủ thời gian xóa án tích</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Đủ TG xóa AT" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Phiếu LLTP</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Phiếu LLTP" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>CB GD</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="CB GD" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Chức vụ</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Chức vụ" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Đơn vị</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="Đơn vị" title="enter your password2.">
											</div>

											<div class="col-xs-3">
												<label for="password2">
													<h4>Uỷ ban quản lý</h4>
												</label>
												<input type="text" class="form-control" name="password2" id="password2" placeholder="UB-Quản lý" title="enter your password2.">
											</div>
										</div>

									</form>

								</div>

							</div>
						</div>

						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Xử lý của tòa</a></li>
								<li><a data-toggle="tab" href="#an_phi">Án phí - HPBS</a></li>
								<li><a data-toggle="tab" href="#tien_an">Tiền án - Tiền sự</a></li>
							</ul>


							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<form class="form" action="##" method="post" id="registrationForm">
										<div class="form-group">

											<div class="col-xs-4">
												<label for="so_ban_an">
													<h4>Số Bản án</h4>
												</label>
												<input type="text" class="form-control" name="So_Ban_an" id="So_Ban_an" placeholder="Số Bản án" title="enter your first name if any.">
											</div>
										</div>
										<div class="form-group">

											<div class="col-xs-2">
												<label for="ngay_ban_an">
													<h4>Ngày Bản án</h4>
												</label>
												<input type="date" class="form-control" name="ngay_ban_an" id="ngay_ban_an" placeholder="Ngày Bản án" title="enter your last name if any.">
											</div>
										</div>

										<div class="form-group">

											<div class="col-xs-4">
												<label for="so_qd">
													<h4>Số quyết định, Thi hành án</h4>
												</label>
												<input type="text" class="form-control" name="so_qd" id="so_qd" placeholder="Số Quyết định" title="enter your phone number if any.">
											</div>
										</div>

										<div class="form-group">
											<div class="col-xs-2">
												<label for="ngay_qd">
													<h4>Ngày quyết định, Thi hành án</h4>
												</label>
												<input type="date" class="form-control" name="ngay_qd" id="ngay_qd" placeholder="Ngày Quyết định" title="enter your mobile number if any.">
											</div>
										</div>

										<div class="form-group">

											<div class="col-xs-4">
												<label for="toa_xet_xu">
													<h4>Tòa xét xử</h4>
												</label>
												<input class="form-control" name="toa_xet_xu" id="toa_xet_xu" placeholder="Tòa xét xử" title="enter your password.">
											</div>
										</div>
										<div class="form-group">

											<div class="col-xs-4">
												<label for="toa_quyet_dinh">
													<h4>Tòa ra Quyết định thi hành án</h4>
												</label>
												<input class="form-control" name="toa_quyet_dinh" id="toa_quyet_dinh" placeholder="Tòa ra Quyết định thi hành án" title="enter your password2.">
											</div>
										</div>

										<div class="form-group">

											<div class="col-xs-2">
												<label for="an_phat">
													<h4>Án phạt</h4>
												</label>
												<input class="form-control" name="an_phat" id="an_phat" placeholder="Án phạt" title="enter your email.">
											</div>
										</div>
									</form>

									<hr>

								</div><!--/tab-pane-->
								<div class="tab-pane" id="an_phi">
									<form class="form" action="##" method="post" id="registrationForm">
										<div class="form-group">

											<div class="col-xs-6">
												<label for="first_name">
													<h4>Trống</h4>
												</label>
												<input type="text" class="form-control" name="first_name" id="first_name" placeholder="" title="enter your first name if any.">
											</div>
										</div>
										<div class="form-group">

											<div class="col-xs-6">
												<label for="last_name">
													<h4>Trống</h4>
												</label>
												<input type="text" class="form-control" name="last_name" id="last_name" placeholder="" title="enter your last name if any.">
											</div>
										</div>

									</form>

								</div>
								<div class="tab-pane" id="tien_an">
									<form class="form" action="##" method="post" id="registrationForm">
										<div class="form-group">

											<div class="col-xs-6">
												<label for="first_name">
													<h4>Trống</h4>
												</label>
												<input type="text" class="form-control" name="first_name" id="first_name" placeholder="" title="enter your first name if any.">
											</div>
										</div>
										<div class="form-group">

											<div class="col-xs-6">
												<label for="last_name">
													<h4>Trống</h4>
												</label>
												<input type="text" class="form-control" name="last_name" id="last_name" placeholder="" title="enter your last name if any.">
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>

					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Đóng</button>
						<button name="save" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Lưu</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'script.php' ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.btn-delete').on('click', function() {
				var user_id = $(this).attr('id');
				$("#modal_confirm").modal('show');
				$('#btn_yes').attr('name', user_id);
			});
			$('#btn_yes').on('click', function() {
				var id = $(this).attr('name');
				$.ajax({
					type: "POST",
					url: "delete_user.php",
					data: {
						user_id: id
					},
					success: function() {
						$("#modal_confirm").modal('hide');
						$(".del_user" + id).empty();
						$(".del_user" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");
						setTimeout(function() {
							$(".del_user" + id).fadeOut('slow');
						}, 1000);
					}
				});
			});
			$(document).ready(function() {


				var readURL = function(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function(e) {
							$('.avatar').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
					}
				}


				$(".file-upload").on('change', function() {
					readURL(this);
				});
			});
		});
	</script>
</body>

</html>