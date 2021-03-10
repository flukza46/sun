<?php
    session_start();
    require_once('function.php');
    $connect_database = new DB_conn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title_web; ?></title>
    <link rel="stylesheet" href="css/mysefe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<section class="min-vh-100%" id="bgssec">
    
    <!-- ส่วนหัว -->
        <div class="container-fluid bg-light">
                <div class="row p-2">
                <!-- ส่วนโลโก้ -->
                    <div class="col-sm-1 col-xs d-flex align-items-center">
                        <img src="image/logo.png" class="w-100">
                    </div>
                <!-- ส่วนชื่อโครงการ -->
                    <div class="col-sm">
                        <h2>ศาลาฌาปนกิจศพและอุปกรณ์ประกอบพิธีกรรม <br> วัดนครสวรรค์พระอารามหลวง</h2>
                        <p><b>การพัฒนาระบบสนับสนุนการเช่าพื้นที่ศาลาฌาปนกิจศพและอุปกรณ์ประกอบพิธีกรรมวัดนครสวรรค์พระอารามหลวง</b></p>
                    </div>
                    
                    <!-- login -->
                    <?php
                        if (!isset($_SESSION['id'])) {
                            //! ถ้าไม่มี Session 
                            ?>

                            

                                <div class="col-xl d-flex align-items-center justify-content-end">
                                    <div class="row">
                                        <div class="col-sm d-flex justify-content-end">
                                            <form action="check_login.php" method="post">
                                                <div class="row form-inline">
                                                <div class="form-group mr-2">
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                                <div class="form-group mr-2">
                                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                                </div>
                                                <div class="row justify-content-end mt-2 pr-1 form-inline">
                                                
                                                <div class="form-group">
                                                    <input type="submit" class="form-control btn btn-warning text-light mr-1" name="submit" value="เข้าสู่ระบบ">
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        if (isset($_SESSION['id'])) {
                            //! ถ้ามี Session 
                            ?>

                            

                                <div class="col-xl d-flex align-items-center justify-content-end">
                                    <div class="row">
                                        <div class="col-sm d-flex justify-content-end">
                                            <form action="logout.php" method="post">
                                                <div class="row form-inline">
                                                    <?php
                                                        echo "เข้าสู่ระบบสำเร็จ, ";
                                                        echo "สวัสดี คุณ : ". $_SESSION['name']." ".$_SESSION['lname']; 
                                                    ?>
                                                    
                                                
                                                </div>

                                                <div class="row justify-content-end mt-2 pr-1 form-inline">
                                                <input class="form-control btn btn-danger text-light ml-2" type="submit" name="submit" value="ออกจากระบบ">
                                                
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                


                        <?php
                        }
                        ?>


                    


                </div>
        </div>

    <!-- เมนู -->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?p=home"><b><i class="fa fa-home"></i> หน้าแรก</b><span class="sr-only">(current)</span></a>
                        </li>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?p=0"><b><i class="fas fa-newspaper"></i> ข่าวประชาสัมพันธ์ทั้งหมด</b><span class="sr-only">(current)</span></a>
                        </li>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" id="navbarDropdown"><b><i class="fas fa-file-invoice-dollar"></i> อัตราค่าบำรุง</b><span class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?p=1"><i class="fas fa-school text-success"></i> อัตราบำรุงศาลาฌาปนกิจศพ</a>
                                <a class="dropdown-item" href="index.php?p=rate_equipment"><i class="fas fa-menorah text-warning text-success"></i> อัตราอุปกรณ์ประกอบพิธีกรรม</a>
                                
                        </li>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?p=3"><b><i class="fas fa-shopping-bag"></i> สิ่งที่เจ้าภาพต้องเตรียมมาในวันเก็บอัฐิ</b><span class="sr-only">(current)</span></a>
                        </li>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?p=2"><b><i class="fa fa-address-book"></i> เกี่ยวกับเรา</b><span class="sr-only">(current)</span></a>
                        </li>
                    </div>
        </nav> 
        <hr class="m-0">

    
    
    <!-- ลิ้งแทบเมนู -->
                
                <?php
                    switch($_GET['p']){
                        case 'home':{
                            include_once('home.php');
                            break;
                    } 
                        case '0':{
                            include_once('news.php');
                            break;
                    } 
                        case '1':{
                            include_once('Maintenance.php');
                            break;
                    } 
                    case '2':{
                        include_once('About_us.php');
                        break;
                    }
                    case '3':{
                        include_once('note.php');
                        break;
                    }
                    case 'readN':{
                        include_once('read_News.php');
                        break;
                    }
                    case "rate_equipment":{
                        include_once('Rate_ equipment.php');
                        break;
                    }
                    case "note":{
                        include_once('note.php');
                        break;
                    }
                    


                }
                ?>



    <!-- ส่วนล่าง Footer -->
        <div class="container-fluid  bg-danger">
                <div class="row">
                    <!-- ส่วนล่าง footer Logo -->
                    <div class="col-sm-12 bg-success text-center">
                        <img src="image/logo_nsru.png" style="width:70px; " >
                        <img src="image/logo_it4cd.png" style="width:150px; " >
                        
                        <br>
                        <b>©2020 กลุ่มวิจัยด้านเทคโนโลยีสารสนเทศเพื่อการพัฒนาชุมชน (IT4CD) <br>
                        </b>
                        มหาวิทยาลัยราชภัฏนครสวรรค์
                        <br>
                        <a class="text-decoration-none text-warning" href="https://www.facebook.com/thanakon.intakun.7/"> ติดต่อ : Thanakon.in@nsru.ac.th </a> 
                        

                    </div>
                </div>
            </div>
        
</section>
    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>