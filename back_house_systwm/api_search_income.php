<?php

require_once('../func_ajax.php');
    $select_income = new DB_conn();

if(isset($_POST['submit'])){
    $sql = $select_income->runQuery("SELECT sum(raca_total) from make_list_booking where datestart like '%$_POST[ip_search]%' ");

    $fetch_data = mysqli_fetch_array($sql);

    if($fetch_data['sum(raca_total)'] == NULL){
        $response = array(
                        "result" => "ไม่พบข้อมูล "."' ".$_POST['ip_search']." '",
                        "status" => 0
                    );
                    echo json_encode($response);
    }else{
        $response = array(
                        "result" => "~ ". number_format($fetch_data['sum(raca_total)'])." บาท",
                        "status" => 1
                    );
                    echo json_encode($response);
    }
}


?>