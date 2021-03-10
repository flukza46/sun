<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
    session_start();
    require_once('function.php');
    $condb = new DB_conn();
    $login_f = new DB_conn();

    if(!isset($_POST['submit'])){
        header("Location: index.php?p=home");
    }else{
        $user = $_POST['username'];
        $pasw = $_POST['password'];
        
        $res = $login_f->login_form($user, $pasw); 
        $num = mysqli_fetch_array($res);

        if($num > 0){
            $_SESSION['id'] = $num['id'];
            $_SESSION['name'] = $num['first_name'];
            $_SESSION['lname'] = $num['last_name']; 
            $_SESSION['user_level'] = $num['user_level']; 
            
            if($_SESSION['user_level']=="a"){
                echo"<script>";
                echo "setTimeout(function () { 
                    swal({
                    title: 'รหัสผ่านถูกต้อง',
                    text: 'ยินดีต้อนรับคุณ (เจ้าหน้าที่)',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'back_house_systwm/manager.php?p=1';
                    }
                    }); }, 1000);";


                echo"</script>";
            }
            if($_SESSION['user_level']=="ma"){
                echo"<script>";
                echo "setTimeout(function () { 
                    swal({
                    title: 'รหัสผ่านถูกต้อง',
                    text: 'ยินดีต้อนรับคุณ (ผู้บริหาร)',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'back_house_systwm/executive.php?p=1';
                    }
                    }); }, 1000);";


                echo"</script>";
            }
            if($_SESSION['user_level']=="p"){
                header("Location: index.php?p=home");
            }
            
            
        }else{

            echo"<script>";
                echo "setTimeout(function () { 
                    swal({
                    title: 'รหัสผ่านไม่ถูกต้อง',
                    text: 'กรุณาตรวจสอบใหม่',
                    type: 'error',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'index.php?p=home';
                    }
                    }); }, 1000);";
            echo"</script>";
            }
        }
        

    

?>

