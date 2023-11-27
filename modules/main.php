<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='quanlyphuongphap' && $query=='them'){
					include("modules/quanlyphuongphap/them.php");
					include("modules/quanlyphuongphap/lietke.php");

				}elseif ($tam=='quanlyphuongphap' && $query=='sua') {
					include("modules/quanlyphuongphap/sua.php");

				}elseif ($tam=='quanlynhommun' && $query=='them') {
					include("modules/quanlynhommun/them.php");
					include("modules/quanlynhommun/lietke.php");

				}elseif ($tam=='quanlynhommun' && $query=='sua') {
					include("modules/quanlynhommun/sua.php");

				}elseif ($tam=='quanlydacdiem' && $query=='them') {
					include("modules/quanlydacdiem/them.php");
					include("modules/quanlydacdiem/lietke.php");

				}elseif($tam=='quanlydacdiem' && $query=='sua'){
					include("modules/quanlydacdiem/sua.php");

				}else{
					include("home.php");
				}
	?> 
	
</div>