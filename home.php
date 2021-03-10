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



        <div class="container justify-content-center">
        <div class="card mt-4 mb-4">

        <div class="card-header">
            <h3 class="mb-0"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ประวัติวัดนครสวรรค์พระอารามหลวง</h3>
        </div>
        <div class="card-body">
            <div>
            <i class="fa fa-newspaper-o" aria-hidden="true"></i> วัดนครสวรรค์ เดิมมีนามว่า “วัดหัวเมือง” เพราะตั้งอยู่ตอนต้นของตัวเมืองก่อนจะเข้าถึงตัวเมืองจะต้องผ่านวัดนี้ก่อน สร้างขึ้นในราว พ.ศ.๑๙๗๒ โดยประมาณ เดิมหน้าวัดอยู่ทางริมแม่น้ำเจ้าพระยามีต้นโพธิ์และพระปรางค์มองเห็นเด่นชัดสำหรับผู้สัญจรทางน้ำ ต่อมาสายน้ำได้เปลี่ยนทิศทางห่างออกไปจากวัดประมาณ ๑๐๐ เมตร เป็นวัดที่ได้รับพระราชทานวิสุงคามสีมา มาแต่เดิม ประมาณ พ.ศ.๑๙๗๒ พื้นที่ตั้งวัดเป็นที่ราบ มีลักษณะเป็นรูปสี่เหลี่ยมคางหมู มีกำแพงโดยรอบทั้ง 4 ด้าน และมีประตูเข้าออกได้สะดวกทั้ง 4 ด้าน เช่นกัน ที่ดินตั้งวัดนี้ได้ถูกถนนสวรรค์วิถีตัดผ่านแบ่งเนื้อที่ออกเป็น 2 แปลงเป็นเขตสังฆาวาส และเขตพุทธาวาสในส่วนที่อยู่ทางด้านทิศตะวันออกซึ่งมีเนื้อที่ 13 ไร่ 25 ตารางวา อีกแปลงหนึ่งอยู่ทางทิศตะวันตกใช้เป็นเขตฌาปนสถาน มีเนื้อที่ 9 ไร่ 1 งาน 11 ตารางวา ภายในบริเวณวัดมีถนนติดต่อระหว่างอาคารเสนาสนะต่าง ๆ ถึงกันหมดอาคารเสนาสนะต่าง ๆ มีพระอุโบสถกว้าง 12 เมตร ยาว 26 เมตร บูรณะ พ.ศ. 2515 ศาลาการเปรียญกว้างยาวด้านละ 34 เมตร เป็นอาคารคอนกรีต 2 ชั้น สร้าง พ.ศ. 2526 กฎิสงฆ์ จำนวน 15 หลัง เป็นอาคารคอนกรีต 9 หลัง อาคารไม้สัก 2 ชั้น 1 หลัง ห้องสมุดจตุรมุขกว้าง 11 เมตร ยาว 12 เมตร อาคารคอนกรีต หอระฆังจตุรมุขสร้างด้วยไม้ทั้งหลัง อาคารเรียนพระปริยัติธรรมกว้าง 24.50 เมตร ยาว 28.50 เมตร เป็นอาคารคอนกรีต 2 ชั้น มีมุขหน้าและหลัง พระวิหารสร้างด้วยอิฐโบราณแผ่นใหญ่ บูรณะ พ.ศ. 2527 อาคารสำนักงานมูลนิธิการกุศล 1 หลัง ศาลาบำเพ็ญกุศล 8 หลัง และฌาปนสถานแบบเตาอบคอนกรีตเสริมเหล็ก
            </div>
                                        

                                    
                                        
        </div>


        </div>
    </div>

    
               