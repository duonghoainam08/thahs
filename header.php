<!DOCTYPE html>
<html lang="en-CA">

<head>
    <?php
    if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
    ?>
    <title>Bán hàng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property='og:title' name="title" content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='' />
    <meta property='og:description' itemprop='description' name="description" content='' />
    <!--rieng-->
    <!--tkw-->
    <meta property="og:type" content="article" />
    <meta property="article:section" content="" />
    <meta property="og:site_name" content='' />
    <meta property="article:publisher" content="" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="1639622432921466" />
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/product.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/css/bootstrap.css" />

</head>

<body>
    <header>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
                <div class="header_top">
                        <div class="logo">
                            <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/images/logo.jpg" width="250" height="200" alt="logo.jpg" /></a>
                        </div>
                        <nav class="menu_top">
                            <label class="navbar-brand" id="title">Thi Hành Án Hình Sự và Hỗ Trợ Tư Pháp Công an huyện Lấp Vò</label>
                        </nav>
                        <div class="clear"></div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="table_row_search">
                    <div class="search_top">
                        <div id='cssmenu'>
                            <ul>
                                <li class='active'><a href='<?php echo BASE_URL ?>'>Trang chủ</a></li>

                                <li><a style="text-decoration: none;" href="index.php?action=quanlynhommun&query=them">Quản lý tài khoản cán bô</a></li>

                                <li><a style="text-decoration: none;" href="index.php?action=quanlydacdiem&query=them">Quản lý hồ sơ CHXAPT</a></li>

                                <li><a style="text-decoration: none;" href="index.php?action=quanlyphuongphap&query=them">Quản lý hồ sơ</a></li>
                                <li><a href="index.php?dangxuat=1">Đăng xuất : <?php if (isset($_SESSION['dangnhap'])) {
                                                                                    echo $_SESSION['dangnhap'];
                                                                                } ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="clear"></div>