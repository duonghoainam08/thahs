<div class="text-center" style="margin: 50px 1% 1% 1%;">
  	<img src="./public/images/logo.jpg" class="rounded">
</div>
<div class="col-md-4"></div>
<div class="col-md-4">
	<div class="panel panel-primary">
		<div class="panel-body">
			<form method="POST">
				<div class="form-group">
					<label for="username">Tên đăng nhập</label>
					<input class="form-control" name="username" placeholder="Username" type="text" required="required" >
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input class="form-control" name="password" placeholder="Password" type="password" required="required" >
				</div>
				<?php include 'login_query.php'?>
				<div class="form-group">
					<button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> ĐĂNG NHẬP</button>
				</div>
			</form>
		</div>
	</div>
</div>	