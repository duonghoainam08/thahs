 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Thu thập dữ liệu</title>
 </head>
 <?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
 <body>
    <h1>
        <?php
            include("config/Base_url.php");
            include("config/config.php");
			include("header.php");
            include("modules/main.php");                
			include("footer.php");
        ?>
    </h1>
 </body>
 </html>