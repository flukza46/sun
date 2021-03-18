<?php
    session_start();
    require_once('../function.php');
    $connect_database = new DB_conn();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo title_web_m; ?></title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/manag.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Trirong:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bulma.min.css">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body class="sb-nav-fixed" style="font-family: 'Itim', cursive;
font-family: 'Trirong', serif;">


        <nav class="sb-topnav navbar navbar-expand navbar-light bg-warning">
            <a class="navbar-brand"><i class="fas fa-user-circle"></i>เจ้าหน้าที่</font></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            

            <div class="text-body">
            <i class="fas fa-circle text-success"></i> ยินดีต้อนรับ, คุณ : <?php echo $_SESSION['name']." ".$_SESSION['lname']; ?>
                <a href="../logout.php?logout"><button class="btn btn-danger ml-2">ออกจากระบบ <i class="fas fa-sign-out-alt"></i></button></a>          
            </div>


            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" >
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link collapsed" href="manager.php?p=6"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-bookmark text-info  "></i></div>
                                สถานะศาลาฌาปนกิจศพ
                            </a>
                            <a class="nav-link collapsed" href="manager.php?p=1"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-laptop-house text-success"></i></div>
                                จัดการศาลาฌาปนกิจศพ
                            </a>
                            <a class="nav-link collapsed" href="manager.php?p=2"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-menorah text-warning"></i></div>
                                จัดการอุปกรณ์ประกอบพิธี
                            </a>
                            <a class="nav-link collapsed" href="manager.php?p=3"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="far fa-newspaper text-info"></i></div>
                                จัดการข่าวประชาสัมพันธ์
                            </a>
                            <a class="nav-link collapsed" href="manager.php?p=4"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-user-edit text-primary"></i></div>
                                ทำรายการการจอง
                            </a>
                            <a class="nav-link collapsed" href="manager.php?p=5"  data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon "><i class="fas fa-list-alt text-danger"></i></div>
                                รายการเช่าทั้งหมด
                            </a>
                            
                            
                           
                            
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid min-vh-100" id="bg_dash">
                        <br>
                         
  <div class="container">
  </div>

        <!--ลิ้งแทบเมนูหลัก-->
                <?php
                    switch($_GET['p']){
                        case 1:{
                            include_once('pavilion.php');
                                break;
                    } 

                        case 2:{
                            include_once('equipmentt.php');
                                break;
                     }
                        case 3:{
                            include_once('Manage_news.php');
                                break;
                    }
                        case "m3_add":{
                            include_once('get_news/add.php');
                                break;
                    }
                        case 4:{
                            include_once('customer.php');
                                break;
                     }
                        case 5:{
                            include_once('list.php');
                                break;
                     }
                        case 6:{
                            include_once('statusbook.php');
                                break;
                     }
                        case 7:{
                            include_once('issue_receipt.php');
                                break;
                     }
                        case 8:{
                            include_once('view_receipt.php');
                                break;
                     }
                        case "edit_news":{
                            include_once('get_news/edit.php');
                                break;
                     }
                        case "edit_epuipmentt":{
                            include_once('get_epuipmentt/edit.php');
                                break;
                     }

                        case "m2_add":{
                            include_once('get_epuipmentt/add.php');
                                break;
                    }
                        case "edit_pavilion":{
                            include_once('get_pavilion/edit.php');
                                break;
                     }
                        case "m1_add":{
                            include_once('get_pavilion/add.php');
                                break;
                     }
        


                }
                ?>
                
            
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bulma.min.js"></script>
        
        
        
    </body>
</html>
