<!--หน้ารายการเช่าทั้งหมด-->
<!--รายการเช่าทั้งหมดเจ้าหน้าที่-->


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--  -->
<!-- CDN Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!--  -->


<?php   
            $slN = new DB_conn();   
            if(isset($_GET['cancel_booking']) == "ok"){
                $id_cancel = $_GET['id_cancel'];
                $id_sala = $_GET['salaQty'];
                ?>
<script>
Swal.fire({
    title: 'ต้องการยกเลิกการจอง?',
    text: "คุณกำลังจะยกเลิกการจองใช่หรือไม่!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'ใช่ ต้องการยกเลิก!',
    cancelButtonText: 'ไม่ต้องการ'
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href =
            'manager.php?p=5&confirm_cancel_id=<?php echo $id_cancel;?>&salaQty=<?php echo $id_sala;?>';
    } else {
        window.location.href = 'manager.php?p=5';
    }
});
</script>

<?php  
            }
            if(isset($_GET['confirm_cancel_id'])){
                $id = $_GET['confirm_cancel_id'];
                $id_sala = $_GET['salaQty'];
                $cancel_booking_func = new DB_conn();
                $sql = $cancel_booking_func->cancelBookingFunc($id);
                $sql2 = $cancel_booking_func->updateStatusSalaEmpty($id_sala);
                if($sql && $sql2){
                    ?>
<script>
Swal.fire({

    icon: 'success',
    title: 'ยกเลิกจองเรียบร้อยแล้ว',
    showConfirmButton: false,
    timer: 2500

}).then(function() {
    window.location.href = 'manager.php?p=5';
})
</script>

<?php
                }

            }
?>


<div class="container-fluid mb-2">

    <div class="card">
        <div class="card-header bg-dark mb-2">
            <h3 class="text-center text-light"><b><i class="fas fa-table"></i> ตารางรายการเช่าทั้งหมด</b></h3>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100" id="myTable">
                <thead class="bg-success">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">ผู้จอง</th>
                        <th scope="col">ศาลาที่จอง</th>
                        <th scope="col">ราคาค่าใช้จ่ายทั้งหมด</th>
                        <th scope="col">วันเวลาในการจอง</th>
                        <th scope="col">สถานะใบเสร็จ</th>
                        <th scope="col">ดูข้อมูลทั้งหมด</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                            $SLBooking = new DB_conn();

                            $sql = $SLBooking->Slect_booking();
                            $i = 1;
                            while($reS = mysqli_fetch_array($sql)){
                            ?>
                    <tr class="text-center">
                        <td>
                            <?php echo $i ; ?>
                        </td>
                        <td>
                            <?php echo $reS['first_name']." ".$reS['last_name']; ?>
                        </td>
                        <td>
                            <?php echo $reS['select_sala']; ?>
                        </td>
                        <td>
                            <?php echo number_format($reS['raca_total']); ?>
                        </td>
                        <td>
                        <?php
                                    
                                    $time1 = $reS['datestart'];
                                    $time_th1 = $slN->thai_date_and_time(strtotime($time1));
                                    $time2 = $reS['datestop'];
                                    $time_th2 = $slN->thai_date_and_time2(strtotime($time2));
                            ?>
                            <p class="text-center"><?php echo$time_th1; ?><br> ถึง <br><?php echo$time_th2; ?></p>
                        </td>
                        <td class="text-center">
                            <?php
                                                                if($reS['status_bill_success'] == "yet"){
                                                                ?>
                                                                <p class="text-danger"><strong>(รอดำเนินการใบเสร็จ)</strong></p>
                                                                    
                                                                
                            <?php
                                                                }else{
                                                                    ?>
                            <a href="executive.php?p=view_receipt_executive&view_receipt=<?php echo $reS['id_list_booking']; ?>&print=ok" class="btn btn-success w-100" target="_blank">พิมพ์</a>
                            <?php
                            }


                            ?>
                        </td>


                        <td class="text-center">
                            <a href="executive.php?p=view_receipt_executive&view_receipt=<?php echo $reS['id_list_booking']; ?>"
                                class="btn btn-warning w-100">ดู</a>
                        </td>


                       
                    </tr>

                    <?php
                                    $i++;
                                        }
                                ?>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#myTable').DataTable({
            "oLanguage": {
                "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                "sSearch": "ค้นหา :",
                "aaSorting": [
                    [0, 'desc']
                ],
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
            },
            "scrollX": true


        });
    });
    </script>