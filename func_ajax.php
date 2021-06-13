<?php
define('DB_server', 'localhost');
define('DB_user', 'root');
define('DB_password', '');
define('DB_name', 'thanakon');

define('title_web', 'การพัฒนาระบบสนับสนุนการเช่าพื้นที่ศาลาฌาปนกิจศพและอุปกรณ์ประกอบพิธีกรรมวัดนครสวรรค์พระอารามหลวง');
define('title_web_m', 'เจ้าหน้าที่');
define('title_web_e', 'ผู้บริหาร');

class DB_conn{
    //? ฟังก์ชั่นเชื่อมต่อฐานข้อมูล
    function __construct(){
        $conn = mysqli_connect(DB_server, DB_user, DB_password, DB_name);
        $this->dbcon = $conn;
        mysqli_set_charset($this->dbcon, "utf8"); // ! Set ตัวหนังสือ เป็น UTF8

        if (mysqli_connect_errno()) {
            echo"เชื่อมต่อ Database ไม่สำเร็จ!";
        }else{
            // ! echo"เชื่อมต่อ Database สำเร็จแล้ว";
        }

    }    
    //TODO  : Select for page View_Receipt
    public function SL4View_Receipt($id_MLB){
        $re = mysqli_query($this->dbcon, "SELECT * FROM make_list_booking WHERE id_list_booking='$id_MLB' ");
        return $re;
    }
    public function slUserReg($user){
        $re = mysqli_query($this->dbcon, "SELECT * FROM user WHERE username ='$user'");
        return $re;
    }
}

?>