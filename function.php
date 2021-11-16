<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php 

        define('DB_server', 'localhost');
        define('DB_user', 'root');
        define('DB_password', '');
        define('DB_name', 'thanakon');

        define('title_web', 'การพัฒนาระบบสนับสนุนการเช่าพื้นที่ศาลาฌาปนกิจศพและอุปกรณ์ประกอบพิธีกรรมวัดนครสวรรค์พระอารามหลวง');
        define('title_web_m', 'เจ้าหน้าที่');
        define('title_web_e', 'ผู้บริหาร');
        define('title_web_s', 'ผู้ดูแลระบบ');

        class DB_conn{
            //? ฟังก์ชั่นเชื่อมต่อฐานข้อมูล
            function __construct(){
                $conn = mysqli_connect(DB_server, DB_user, DB_password, DB_name);
                $this->dbcon = $conn;
                mysqli_set_charset($this->dbcon, "utf8"); // ! Set ตัวหนังสือ เป็น UTF8
                date_default_timezone_set("Asia/Bangkok");

                if (mysqli_connect_errno()) {
                    echo"เชื่อมต่อ Database ไม่สำเร็จ!";
                }else{
                    // ! echo"เชื่อมต่อ Database สำเร็จแล้ว";
                }

            }    

            function runQuery($sql){
                $re = mysqli_query($this->dbcon, $sql);
                return $re;
            }
            // Todo: ทำเวลาเป็นภาษาไทย
            function thai_date_and_time($time1){
                $dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
                $monthThai = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];

                    global $dayTH,$monthTH;   
                    $thai_date_return = date("j",$time1);   
                    $thai_date_return.=" ".$monthThai[date("n",$time1)];   
                    $thai_date_return.= " ".(date("Y",$time1)+543);   
                    $thai_date_return.= " เวลา ".date("H:i:s",$time1);

                return $thai_date_return;   
            }
            
            // Todo: ทำเวลาเป็นภาษาไทย2
            function thai_date_and_time2($time2){
                $dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
                $monthThai = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];

                    global $dayTH,$monthTH;   
                    $thai_date_return = date("j",$time2);   
                    $thai_date_return.=" ".$monthThai[date("n",$time2)];   
                    $thai_date_return.= " ".(date("Y",$time2)+543);
                    $thai_date_return.= " เวลา ".date("H:i:s",$time2);   
                    

                return $thai_date_return;   
            }
            // Todo: ทำเวลาเป็นภาษาไทย2
            

            public function slUserReg($user){
                $re = mysqli_query($this->dbcon, "SELECT * FROM user WHERE username ='$user'");
                return $re;
            }
            //? ฟังก์ชั่น สมัครสมาชิก
            public function register_form($username, $password, $title_name, $first_name, $last_name, $email, $phone_number, $user_level){

                $result = mysqli_query($this->dbcon, "INSERT INTO user(
                    username,
                    password,
                    title_name,
                    first_name,
                    last_name,
                    email,
                    phone_number,
                    user_level)
                    VALUE('$username',
                    '$password',
                    '$title_name',
                    '$first_name',
                    '$last_name',
                    '$email',
                    '$phone_number',
                    '$user_level')
                    ");

        return $result;

                }

            //? ฟังก์ชั่น SOP
            public function SOP(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM pavilion ORDER BY id ASC");
                return $re;
            }
            //TODO  : Select for page View_Receipt
            public function SL4View_Receipt($id_MLB){
                $re = mysqli_query($this->dbcon, "SELECT * FROM make_list_booking WHERE id_list_booking='$id_MLB' ");
                return $re;
            }
            //? ฟังก์ชั่น SOP2
            public function SOP2(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM equipment ORDER BY id ASC");
                return $re;
            }
            //? ฟังก์ชั่น โชว์ศาลาที่ยังไม่ถูกจอง
            public function SOPEmpty(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM pavilion WHERE status_sala='empty' ORDER BY id ASC");
                return $re;
            }

            //? ฟังก์ชั่น Login
            public function login_form($user, $pasw){
                $re = mysqli_query($this->dbcon, "SELECT * FROM user WHERE username ='$user' AND password = '$pasw'");
                return $re;
            }

            //TODO ดึงข้อมูล การจอง
            public function Slect_booking(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM make_list_booking ORDER BY id_list_booking DESC");
                return $re;
            }
            //TODO ดึงข้อมูล status_booking p=6
            public function Slect_booking2($id_MLB){
                $re = mysqli_query($this->dbcon, "SELECT * FROM make_list_booking WHERE id_sala=$id_MLB " );
                return $re;
            }
            //? ฟังก์ชั่น Logout
            public function logout_form(){
                session_start();
                session_destroy();
                header("Location: index.php");
            }  
            //? ฟังก์ชั่น ทำรายการ
            public function inst_list_booking($f_name,  $l_name, $p_number, $t_address, $sala, $id_sala, $raca_sala, $date_start, $date_stop, $all_equip, $all_jumnul_eq, $raca_equip, $all_cabamlung, $raca_cabamlung, $raca_total){
                $result = mysqli_query($this->dbcon, "INSERT INTO make_list_booking (
                    first_name,
                    last_name,
                    phone_number,
                    address,
                    select_sala,
                    id_sala,
                    raca_sala,
                    datestart,
                    datestop,
                    select_equipment,
                    jumnul_eq,
                    raca_equip,
                    select_cabamlung,
                    raca_cabamlung,
                    raca_total,
                    raca_cafri,
                    raca_manternance9,
                    status_bill_success
                    )
                    VALUE(
                    '$f_name',
                    '$l_name',
                    '$p_number',
                    '$t_address',
                    '$sala',
                    '$id_sala',
                    '$raca_sala',
                    '$date_start',
                    '$date_stop',
                    '$all_equip',
                    '$all_jumnul_eq',
                    '$raca_equip',
                    '$all_cabamlung',
                    '$raca_cabamlung',
                    '$raca_total',
                    'wait',
                    'wait',
                    'yet'
                    )");

                return $result;
                        }


            //? ฟังก์ชั่น ข่าวประชาสัมพันธ์
            public function inst_news($newsT, $newsS, $newsD, $newsAT, $newsNF){
                $result = mysqli_query($this->dbcon, "INSERT INTO news(
                    news_title,
                    news_summary,
                    news_description,
                    news_author,
                    news_cover)
                    VALUE('$newsT',
                    '$newsS',
                    '$newsD',
                    '$newsAT',
                    '$newsNF')
                    ");

                return $result;
                        }
            //? ฟังก์ชั่น เพิ่มศาลาฌาปนกิจศพ
            public function inst_pavilion($newsT, $newsS, $newsNF){
                $result = mysqli_query($this->dbcon, "INSERT INTO pavilion(
                    img,
                    pavilion_name,
                    price,
                    status_sala
                    )
                    VALUE('$newsNF',
                    '$newsT',
                    '$newsS',
                    'empty'
                    )
                    ");

                return $result;
                        }
            //? ฟังก์ชั่น เพิ่มอุปกรณ์ประกอบพิธี
            public function inst_equipment($newsT, $newsS, $newsNF){
                $result = mysqli_query($this->dbcon, "INSERT INTO equipment(
                    img2,
                    equipment_tiype,
                    price)
                    VALUE('$newsNF',
                    '$newsT',
                    '$newsS'
                    )
                    ");

                return $result;
                        }

                        
            public function slN_index(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
                return $re;
            }
            public function slN_index2(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM news ORDER BY id DESC");
                return $re;
            }
            public function slrN_id($id){
                $re = mysqli_query($this->dbcon, "SELECT * FROM news WHERE id='$id'");
                return $re;
            }
            public function selNForEdit($idS){
                $re = mysqli_query($this->dbcon, "SELECT * FROM news WHERE id='$idS'");
                return $re;
            }
            public function selNForEdit2($idS){
                $re = mysqli_query($this->dbcon, "SELECT * FROM pavilion WHERE id='$idS'");
                return $re;
            }
            public function selNForEdit3($idS){
                $re = mysqli_query($this->dbcon, "SELECT * FROM equipment WHERE id='$idS'");
                return $re;
            }
            //ฟังก์ชั่น อัพเดทศาลา
            public function sql_update_sala($id_sala, $date_start, $date_stop){
                $re = mysqli_query($this->dbcon, "UPDATE pavilion SET 
                status_sala='full',
                booking_d_strat='$date_start', 
                booking_d_stop='$date_stop'
                WHERE id='$id_sala'");
                
                return $re;
            }
            //todo ออกใบเสร็จ
            public function issueReceipt($f_name, $l_name, $p_number, $t_address, $cafri, $m9, $raca_total, $id){
                $re = mysqli_query($this->dbcon, "UPDATE make_list_booking SET 
                first_name='$f_name',
                last_name='$l_name', 
                phone_number='$p_number',
                address='$t_address',
                raca_total='$raca_total',
                raca_cafri='$cafri',
                raca_manternance9='$m9',
                status_bill_success='success'
                WHERE id_list_booking='$id'");
                
                return $re;
            }
            //ฟังก์ชั่น แก้ไขข่าวแบบไม่มีรูป
            public function edit_newsNoPic($u1, $u2, $u3, $newsAT, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE news SET 
                news_title='$u1',
                news_summary='$u2',
                news_description='$u3',
                news_author='$newsAT' 
                WHERE id='$idIns'");
                
                return $re;
            }
            //ฟังก์ชั่น แก้ไขศาลาฌาปนกิจศพแบบไม่มีรูป
            public function edit_newsNoPic2($u1, $u2, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE pavilion SET 
                pavilion_name='$u1',
                price='$u2'
                WHERE id='$idIns'");
                
                return $re;
            }
            //ฟังก์ชั่น แก้ไขอุปกรณ์ประกอบพิธีแบบไม่มีรูป
            public function edit_newsNoPic3($u1, $u2, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE equipment SET 
                equipment_tiype='$u1',
                price='$u2'
                WHERE id='$idIns'");
                
                return $re;
            }
            //ฟังก์ชั่น แก้ไขข่าวแบบมีรูป
            public function edit_news($u1, $u2, $u3, $newsAT, $newNF1, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE news SET 
                news_title='$u1',
                news_summary='$u2',
                news_description='$u3',
                news_author='$newsAT',
                news_cover='$newNF1'
                WHERE id='$idIns'");

                return $re;
            }
            //ฟังก์ชั่น แก้ไขศาลาฌาปนกิจศพแบบมีรูป
            public function edit_news2($u1, $u2, $newNF1, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE pavilion SET 
                img='$newNF1',
                pavilion_name='$u1',
                price='$u2'
                WHERE id='$idIns'");

                return $re;
            }
            //ฟังก์ชั่น แก้ไขอุปกรณ์ประกอบพิธีแบบมีรูป
            public function edit_news3($u1, $u2, $newNF1, $idIns){
                $re = mysqli_query($this->dbcon, "UPDATE equipment SET 
                img2='$newNF1',
                equipment_tiype='$u1',
                price='$u2'
                WHERE id='$idIns'");

                return $re;
            }
            //? ฟังก์ชั่น ดึงข่าวหน้า m2
            public function slN_m2(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM news");
                return $re;
            }
            //? ฟังก์ชั่น ดึงข้อมูลศาลา m1
            public function slN_m1(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM pavilion");
                return $re;
            }
            //? ฟังก์ชั่น ดึงข้อมูลอุปกรณ์ m3
            public function slN_m3(){
                $re = mysqli_query($this->dbcon, "SELECT * FROM equipment");
                return $re;
            }
            //todo: ยกเลิกจองศาลา
            public function cancelBookingFunc($id){
                $re = mysqli_query($this->dbcon, "DELETE FROM make_list_booking WHERE id_list_booking='$id' ");
                return $re;
            }
            //todo: เปลี่ยนสถานะจองศาลาเป็น Empty
            public function updateStatusSalaEmpty($id_sala){
                $re = mysqli_query($this->dbcon, "UPDATE pavilion SET status_sala='empty' WHERE id='$id_sala' ");
                return $re;
            }
            //? ฟังก์ชั่น del ข่าว
            public function delnews($id){
                $re = mysqli_query($this->dbcon, "DELETE FROM news WHERE  id='$id'");

                if($re){
                echo"<script>";
                    echo "setTimeout(function () { 
                    swal({
                    title: 'ลบข้อมูลเรียบร้อยเเล้ว',
                    text: 'ลบข้อมูลข่าวประชาสัมพันธ์เรียบร้อยเเล้ว',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'manager.php?p=3';
                    }
                    }); }, 800);";


                echo"</script>";
                }
                return $re;
            }
            //? ฟังก์ชั่น del ศาลาฌาปนกิจศพ
            public function delnews2($id){
                $re = mysqli_query($this->dbcon, "DELETE FROM pavilion WHERE  id='$id'");

                if($re){
                echo"<script>";
                    echo "setTimeout(function () { 
                    swal({
                    title: 'ลบข้อมูลเรียบร้อยเเล้ว',
                    text: 'ลบข้อมูลศาลาฌาปนกิจศพเรียบร้อยเเล้ว',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'manager.php?p=1';
                    }
                    }); }, 800);";


                echo"</script>";
                }
                return $re;
            }
            //? ฟังก์ชั่น del อุปกรณ์ประกอบพิธีกรรม
            public function delnews3($id){
                $re = mysqli_query($this->dbcon, "DELETE FROM equipment WHERE  id='$id'");

                if($re){
                echo"<script>";
                    echo "setTimeout(function () { 
                    swal({
                    title: 'ลบข้อมูลเรียบร้อยเเล้ว',
                    text: 'ลบข้อมูลอุปกรณ์ประกอบพิธีเรียบร้อยเเล้ว',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'manager.php?p=2';
                    }
                    }); }, 800);";


                echo"</script>";
                }
                return $re;
            }

        

        } //ปีกกาของคลาส

        class fff extends DB_conn{
            public function runQuery($query){
                $reS = mysqli_query($this->dbcon, $query); 
                return $reS;
            }
        }//ปีกกาของคลาส

?>


