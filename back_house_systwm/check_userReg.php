<?php
require_once('../func_ajax.php');
$slUser = new DB_conn();

if(isset($_POST['statusDATA']) == "ok"){
    $user = $_POST['chkUser1'];
    $sql = $slUser->slUserReg($user);
    // echo"sddddd";
    if($sql){
        $row = mysqli_num_rows($sql);
        $re_arr =array(
            "result" => $row
        );
        echo json_encode($re_arr);
    }else{
        echo"Can't SQL";
    }
}
?>