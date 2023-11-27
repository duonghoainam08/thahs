<div id="content">
		<br /><br /><br />
		<div class="container bootstrap snippet" style="margin-top: 50px;">
			<div class="row">
				<div class="col-sm-3">
					<div class="text-center">
						<img src="./images/avatar_2x.png" class="avatar img-thumbnail" style ="height: 300px; width:300px;"alt="avatar">
						<h3>Ảnh</h3>
						<input type="file" class="text-center center-block file-upload">
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
								</div>
								<div class="form-group">

									<div class="col-xs-2">
										<label for="name">
											<h4>Tên khác</h4>
										</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Tên khác">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-2">
										<label for="mobile">
											<h4>Năm sinh</h4>
										</label>
										<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Năm sinh" title="Vui lòng nhập Năm sinh.">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-2">
										<label for="gender">
											<h4>Giới tính</h4>
										</label>
										<input type="text" class="form-control" name="gender" id="gender" placeholder= "Giới tính" title="Vui lòng nhập Giới tính.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-2">
										<label for="so_nha">
											<h4>HKTT:Số nhà</h4>
										</label>
										<input type="text" class="form-control" name="so_nha" id="so_nha" placeholder="Số nhà" title="enter your email.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-2">
										<label for="email">
											<h4>Khóm/Ấp</h4>
										</label>
										<input type="text" class="form-control" id="location" placeholder="Khóm/ấp" title="enter a location">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-2">
										<label for="password">
											<h4>Xã/Thị trấn</h4>
										</label>
										<input type="text" class="form-control" name="password" id="password" placeholder="Xã/Thị trấn" title="enter your password.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-3">
										<label for="password2">
											<h4>Quận/Huyện</h4>
										</label>
										<input type="text"  class="form-control" name="password2" id="password2" placeholder="Quận/Huyện" title="enter your password2.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-3">
										<label for="password2">
											<h4>Tỉnh/Thành phố</h4>
										</label>
										<input type="text"  class="form-control" name="password2" id="password2" placeholder="Tỉnh/Thành phố" title="enter your password2.">
									</div>
								</div>
							</form>
							
							<hr>

						</div><!--/tab-pane-->

					</div><!--/tab-pane-->
				</div><!--/tab-content-->
			</div>
			<hr/>
			<div class="row">
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

									<div class="col-xs-4">
										<label for="ngay_ban_an">
											<h4>Ngày Bản án</h4>
										</label>
										<input type="text" class="form-control" name="ngay_ban_an" id="ngay_ban_an" placeholder="Ngày Bản án" title="enter your last name if any.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-4">
										<label for="an_phat">
											<h4>Án phạt</h4>
										</label>
										<input class="form-control" name="an_phat" id="an_phat" placeholder="Án phạt" title="enter your email.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-4">
										<label for="so_qd">
											<h4>Số QĐ, Thi hành án</h4>
										</label>
										<input type="text" class="form-control" name="so_qd" id="so_qd" placeholder="Số Quyết định" title="enter your phone number if any.">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-4">
										<label for="ngay_qd">
											<h4>Ngày QĐ, Thi hành án</h4>
										</label>
										<input type="text" class="form-control" name="ngay_qd" id="ngay_qd" placeholder="Ngày Quyết định" title="enter your mobile number if any.">
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
							</form>

							<hr>

						</div><!--/tab-pane-->
						<!-- <div class="tab-pane" id="an_phi">
							<form class="form" action="##" method="post" id="registrationForm">
								<div class="form-group">

									<div class="col-xs-6">
										<label for="first_name">
											<h4>First name</h4>
										</label>
										<input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="last_name">
											<h4>Last name</h4>
										</label>
										<input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-6">
										<label for="phone">
											<h4>Phone</h4>
										</label>
										<input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-6">
										<label for="mobile">
											<h4>Mobile</h4>
										</label>
										<input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="email">
											<h4>Email</h4>
										</label>
										<input type="text" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="email">
											<h4>Location</h4>
										</label>
										<input type="text" class="form-control" id="location" placeholder="somewhere" title="enter a location">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="password">
											<h4>Password</h4>
										</label>
										<input type="text" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
									</div>
								</div>
							</form> -->

						<!-- </div>/tab-pane -->
						<!-- <div class="tab-pane" id="tien_an">
							<form class="form" action="##" method="post" id="registrationForm">
								<div class="form-group">

									<div class="col-xs-6">
										<label for="first_name">
											<h4>First name</h4>
										</label>
										<input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="last_name">
											<h4>Last name</h4>
										</label>
										<input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
									</div>
								</div>

								<div class="form-group">

									<div class="col-xs-6">
										<label for="phone">
											<h4>Phone</h4>
										</label>
										<input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
									</div>
								</div>

								<div class="form-group">
									<div class="col-xs-6">
										<label for="mobile">
											<h4>Mobile</h4>
										</label>
										<input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="email">
											<h4>Email</h4>
										</label>
										<input type="text" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="email">
											<h4>Location</h4>
										</label>
										<input type="text" class="form-control" id="location" placeholder="somewhere" title="enter a location">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="password">
											<h4>Password</h4>
										</label>
										<input type="text" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
									</div>
								</div>
								<div class="form-group">

									<div class="col-xs-6">
										<label for="password2">
											<h4>Verify</h4>
										</label>
										<input type="text" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
									</div>
								</div>
							</form>
						</div>

					</div>/tab-pane -->
				</div><!--/tab-content-->

			</div><!--/col-9-->
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<div class="col-xs-12">
							<br>
							<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Lưu</button>
							<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Hủy</button>
						</div>
					</div>
				</div><!--/tab-content-->

			</div><!--/col-9-->
		</div><!--/row-->
	</div>

