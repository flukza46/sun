<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?php 
include_once('../../function.php');
$updateReceipt = new DB_conn();


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$p_number = $_POST['p_number'];
$t_address = $_POST['t_address'];
$cafri = $_POST['cafri'];
$m9 = $_POST['m9'];
$span_cafri_m9 = $_POST['span_cafri_m9'];
$raca_total = $_POST['raca_total'];
$id = $_POST['id'];


/* -------------------------------------------------------------------------- */

$sql = $updateReceipt->issueReceipt($f_name, $l_name, $p_number, $t_address, $cafri, $m9, $raca_total, $id);
if($sql){
    ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'บันทึกใบเสร็จเรียบร้อยแล้ว',
        showConfirmButton: false,
        timer: 1500
    }).then(function(){
        window.location='../manager.php?p=5';
    })




});
</script>

<?php
}else{
    echo"Can't SQL";
}







?>