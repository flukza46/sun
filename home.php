<?php
    $slN_index = new DB_conn();

?>


<!-- รูปสไลค์ -->
<div class="container mt-4 mb-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="image/ป้ายที่1.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="image/ป้ายที่2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="image/ป้ายที่3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
        </div>
        
        <hr>
        
        <div class="container justify-content-center">
        <div class="card mt-4 mb-4">

        <div class="card-header">
            <h3 class="mb-0"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ข่าวประชาสัมพันธ์</h3>
        </div>
        <div class="card-body">
                                        

                                    <?php

                                        $result = $slN_index->slN_index();
                                        
                                        while($num = mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <div class="card mb-3 max-w-100">
                                        <div class="row no-gutters">
                                             <div class="col-md-3">
                                             <img src="image/news/<?php echo $num['news_cover']; ?>" class="card-img w-100" title="...">
                                             </div>
                                             <div class="col-md-8">
                                            <div class="card-body">
                                            <div><h4 class="card-title"><?php echo $num['news_title']; ?></h4></div>
                                            <div><span class="badge badge-danger text-warning d-inline">ข่าวใหม่ !</span> <p class="d-inline text-secondary font-weight-light">ผู้เขียนข่าวโดย คุณ, <?php echo $num['news_author']; ?> > โพสต์เมื่อ : <?php echo $num['nawe_creat']; ?></p> </div>

                                            <div class="mt-3"><p><?php echo $num['news_summary']; ?></p></div>
                                            <div class="row">
                                            <div class="col-12">
                                                <a href="index.php?p=readN&readN_page_id=<?php echo $num['id']; ?>" class="btn btn-primary">อ่านต่อ <i class="fas fa-book-reader"></i></a>
                                            </div>
                                        </div>


                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        
        </div>


        </div>
    </div>

    
               