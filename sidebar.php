<div id="sidebar">
	<ul id = "menu" class = "nav menu">
		<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Trang chủ</a></li>
		<?php
			if($_SESSION['status']==1){
		?>
		<li><a href = ""><i class = "glyphicon glyphicon-user"></i> Quản lý tài khoản</a>
			<ul>
				<li><a href = "user.php"><i class = "glyphicon glyphicon-user"></i> Cán bộ</a></li>
			</ul>
		</li>
		<?php
			}?>
		
		<li><a href = "files.php"><i class = "glyphicon glyphicon-list"></i> Quản lý CHXAPT</a></li>
	</ul>
</div>