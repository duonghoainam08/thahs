<section>
            <div class="col-md-12 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img style="height: 300px; margin:auto;" src="<?php echo BASE_URL ?>/public/images/N2_25.jpg" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img style="height: 300px; margin:auto;" src="<?php echo BASE_URL ?>/public/images/N2_8.jpg" alt="Siêu khuyến mãi">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div style="text-align: center;" class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div style="margin-top: 20px;" class="box-title">
                    <div class="title-bar">
                        <h1>Nhóm mụn nổi bật</h1>            
                    </div>
                </div>
            <?php
                $sql_lietke_nhommun = "SELECT * FROM tbl_nhommun ORDER BY ma_nhommun DESC";
                $query_lietke_nhommun = mysqli_query($mysqli,$sql_lietke_nhommun);
            ?>
                <div class="row">
                        <?php
                        $i = 0;
                        while($row = mysqli_fetch_array($query_lietke_nhommun)){
                            $i++;
                        ?>
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 hover-sanpham">
                            <a class="link-sanpham" href="#">
                                <img src="modules/quanlynhommun/uploads/<?php echo $row['images'] ?>" width="300px";height="300px">
                                <p class="title-product"><?php echo $row['tennhom'] ?></p>
                            </a>
                            </div>
                        <?php
                        } 
                        ?>
                    
                </div>
            </div>
</section>