<div class="alert alert-info">
    <div class="d-flex align-items-center">
        <h3>ค้นหา ปี/เดือน/วัน ที่ต้องการแสดงยอดรายรับ</h3><text class="ml-3 text-danger font-weight-bold">*</text><text
            class="ml-1">ตัวอย่างเช่น 2010-10-10</text>
    </div>
    <form action="executive.php?p=6" method="post">
    <div class="row">
        <div class="col-md-10">
            <input id="ip_search" class="form-control" type="text" name="date_search" placeholder="กรอกข้อมูลเพื่อค้นหา" required>
        </div>
        <div class="col-md">
        <button class="btn  btn-success" type="submit" name="submit">ค้นหา</button>
    </form>
        </div>
    </div>
</div>
<?php
$select_income = new DB_conn();
$sql = $select_income->runQuery("SELECT sum(raca_total) from make_list_booking where datestart");
$fetch_total = mysqli_fetch_assoc($sql);




?>
<!-- <div class="alert bg-info p-5" id="div_res" hidden="true">
    <h1 class="text-center font-weight-bold text-light">ผลลัพธ์การค้นหาข้อมูลรายได้</h1>
    <h2 class="text-center font-weight-bold text-warning" id="result_search"></h2>
</div>

<div class="alert bg-success p-5">
    <h3 class="text-center font-weight-bold text-light">ยอดรวมรายได้ทั้งหมด</h3>
    <h4 class="text-center font-weight-bold text-light">~ <?php echo number_format($fetch_total['sum(raca_total)']);?> บาท</h4>
</div> -->



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--jquery-->

<script>
$(document).ready(() => {
    $("#ip_search").keyup(() => {

        var ip_search = $("#ip_search").val()

        if ($("#ip_search").val() == "") {
            //when this inp empty

            $("#div_res").attr('hidden', true)

        } else {

            $.ajax({
                method: "POST",
                url: "api_search_income.php",
                dataType: 'json',
                data: {
                    submit: "ok",
                    ip_search: ip_search
                },
                success: (data) => {
                    console.log(data)
                    $("#div_res").attr('hidden', false)
                    $("#div_res").addClass(
                        'animate__animated animate__bounceInDown animate__fast')
                    $("#result_search").text(data.result)

                }
            })
        }
    })
})
</script>

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


<div class="">
<?php
if(isset($_POST['submit'])){
    $sql_date = $select_income->runQuery("SELECT * from make_list_booking where datestart like '%$_POST[date_search]%' ");
    $sql_date2 = $select_income->runQuery("SELECT sum(raca_total) from make_list_booking where datestart like '%$_POST[date_search]%' ");

    if($fet_nr = mysqli_num_rows($sql_date) == 0){
        ?>
        <div class="text-center alert alert-danger font-weight-bold">
            ไม่พบข้อมูล...
        </div>
        <?php
    }else{
        $reS2 = mysqli_fetch_array($sql_date2)
        ?>

        <div class="alert mb-3 bg-primary text-center">
            <h3 class="text-light font-weight">ยอดรวมคือ : <?=number_format($reS2['sum(raca_total)'])?> บาท</h3>
        </div>
<div class="card">

        <div class="card-body">
            <table class="table table-striped w-100" id="myTable">
                <thead class="bg-info">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">ผู้จอง</th>
                        <th scope="col">ศาลาที่จอง</th>
                        <th scope="col">ราคาค่าใช้จ่ายทั้งหมด</th>
                        <th class="text-center">วันเวลาในการจอง</th>

                        <th scope="col">ดูข้อมูลทั้งหมด</th>


                    </tr>
                </thead>
                
                

                <tbody>
                    <?php
                            
                            $i = 1;
                            while($reS = mysqli_fetch_array($sql_date)){
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
                            <a href="executive.php?p=8&view_receipt=<?php echo $reS['id_list_booking']; ?>"
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
        <?php
        
    }
    
}
?>
    

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