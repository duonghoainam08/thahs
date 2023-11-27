<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
	$taikhoan = $_POST['username'];
	$matkhau = md5($_POST['password']);
	$sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
	$row = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($row);
	if ($count > 0) {
		$_SESSION['dangnhap'] = $taikhoan;
		header("Location:index.php");
	} else {
		echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="./public/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="./public/css/style.css" />
	<title>Đăng nhập Admin</title>
	<style type="text/css">
		body {
			background: white;
		}

		.wrapper-login {
			width: 15%;
			margin: 0 auto;
		}

		table.table-login {
			width: 100%;
		}

		table.table-login tr td {
			padding: 5px;
		}
	</style>
</head>

<body>
		<div class="text-center">
			<img src="./public/images/logo.jpg" class="rounded">
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST">
						<div class="form-group">
							<label for="username">Tên đăng nhập</label>
							<input class="form-control" name="username" placeholder="Username" type="text" required="required">
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input class="form-control" name="password" placeholder="Password" type="password" required="required">
						</div>
						<div class="form-group">
							<button class="btn btn-block btn-primary" name="dangnhap"><span class="glyphicon"></span> ĐĂNG NHẬP</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>