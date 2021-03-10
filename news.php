<?php
    $slN_index = new DB_conn();

?>

<div class="container justify-content-center">
        <div class="card mt-4 mb-4">

        <div class="card-header">
            <h3 class="mb-0"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ข่าวประชาสัมพันธ์</h3>
        </div>
        <div class="card-body">
        <?php

                                        $result = $slN_index->slN_index2();
                                        
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
                                            <div> <p class="d-inline text-secondary font-weight-light">ผู้เขียนข่าวโดย คุณ, <?php echo $num['news_author']; ?> > โพสต์เมื่อ : <?php echo $num['nawe_creat']; ?></p> </div>

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

