<?php
    $SL4view_receipt = new DB_conn();

?>
<div class="card">
    <div class="card-header">
        <h3><b>ออกใบเสร็จ และ คิดค่าใช้จ่ายรวม </b></h3>
    </div>
    <div class="card-body">

        <?php
//
// ────────────────────────────────────────────────────────── I ──────────
//!   :::::: S T A T   F O R M : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────
//
?>
        <form action="func_receipt/_post4process.php" method="POST">

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong class="text-warning">คำชี้แจง !</strong> สามารถแก้ไขรายละเอียด ชื่อ ที่อยู่ และ เบอร์โทรศัพท์
                ก่อนออกใบเสร็จได้
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php
                    $id_MLB =  $_GET['issue_receipt'];

                    $sql = $SL4view_receipt->SL4View_Receipt($id_MLB);
                    
                    if($sql){
                        
                        if($result = mysqli_fetch_array($sql)){
                        ?>

            <input type="text" name="id" value="<?php echo $result['id_list_booking']; ?>" hidden> <!-- ID -->
            


            <div class="alert alert-warning font-weight-bold">
                <div class="row">
                    <div class="form-group col-4 mt-4">
                        <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i>
                            ชื่อจริง</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php echo $result['first_name']; ?>" name="f_name">
                    </div>

                    <div class="form-group col-4 mt-4">
                        <label for="exampleFormControlInput1">นามสกุล</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?php echo $result['last_name']; ?>" name="l_name">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label for="exampleFormControlInput1"><i class="fas fa-phone-volume text-info"></i>
                            เบอร์โทรศัพท์</label>
                        <input style="width:200px;" maxlength="10" type="text" class="form-control"
                            id="exampleFormControlInput1" value="<?php echo $result['phone_number']; ?>"
                            name="p_number">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-8">
                        <label for="exampleFormControlTextarea1"><i class="fas fa-map-marked-alt text-success"></i>
                            สถานที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                            name="t_address"><?php echo $result['address']; ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12 m-0">
                        <label class="alert alert-light">
                            <?php

                        $time1 = $result['datestart'];
                        $time_th1 = $SL4view_receipt->thai_date_and_time(strtotime($time1));
                        $time2 = $result['datestop'];
                        $time_th2 = $SL4view_receipt->thai_date_and_time2(strtotime($time2));
                    
                    ?>
                            <strong class="d-flex d-inline align-items-center">กำหนดการจอง : <p
                                    class="text-success m-0 ml-2 mr-2"><?php echo $time_th1; ?></p> ถึง
                                <p class="text-success m-0 ml-2"><?php echo $time_th2; ?></p>
                            </strong>
                        </label>

                    </div>
                </div>

            </div>






            <hr class=" border-primary">







            <!-- แบ่ง 2 col -->
            <div class="row">
                <div class="col-md-5">

                    <div class="row">
                        <div class="form-group col-8">
                            <label for="exampleFormControlTextarea1">
                                <h5><strong><i class="fas fa-menorah text-warning"></i> อุปกรณ์ประกอบพิธีกรรม</strong> </h5>
                            </label>
                            <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="5"
                                name="t_address" disabled><?php echo $result['select_equipment']; ?></textarea>
                            <label class="font-weight-bold d-flex d-inline">
                                <?//! ราคา  ?>
                                <p class="text-success">ราคาอุปกรณ์ประกอบพิธีกรรม : </p>
                                <p class="ml-2 text-danger"><?php echo number_format($result['raca_equip']); ?></p>
                                <p class="ml-2 text-success">บาท</p>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-8">
                            <label for="exampleFormControlTextarea1 w-100">
                                <h5><strong>อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์</strong></h5>
                            </label>
                            <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="5"
                                name="t_address" disabled><?php echo $result['select_cabamlung']; ?></textarea>
                            <label class="font-weight-bold d-flex d-inline">
                                <?//! ราคา  ?>
                                <p class="text-success">ราคาอุปกรณ์ประกอบพิธีกรรม : </p>
                                <p class="ml-2 text-danger"><?php echo number_format($result['raca_cabamlung']); ?></p>
                                <p class="ml-2 text-success">บาท</p>
                            </label>
                        </div>
                    </div>

                </div><!-- ปิด  col 1 -->
                <?php //! คำนวน ค่าไฟ  ?>

                <div class="col mr-3 mb-3 ml-3 pl-4 pr-0 border-left border-primary border-3">

                    <div class="alert alert-info font-weight-bold" role="alert">
                        <h5 class="m-0"><b> คำนวณค่าไฟ และ ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง 9 คน</b></h5>
                    </div>

                    <div class="alert alert-secondary font-weight-bold" role="alert">
                        <div class="mb-3">
                            <label for="">ค่าไฟ (คิดเป็นหน่วยล่ะ 7 บาท)</label>
                            <input id="cafri" class="form-control w-50" type="number" name="cafri" required>
                            <?php //! ราคา ค่าไฟ  ?>
                            <span class="d-flex d-inline align-items-center text-success">
                                <p>ราคาค่าไฟ : </p>
                                <p id="span_cafri" class="ml-2 text-danger">0</p>
                                <p class="ml-2">บาท</p>
                            </span>

                        </div>

                        <div class="mb-3">
                            <label for="">ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง 9 คน (ตามสมควร)</label>
                            <input id="m9" class="form-control w-50" type="number" name="m9" required>
                            <?php //! ราคา เจ้าหน้าที่ 9 คน ?>
                            <span class="d-flex d-inline align-items-center text-success">
                                <p>ราคาค่าบริการเจ้าหน้าที่ 9 คน : </p>
                                <p id="span_m9" class="ml-2 text-danger">0</p>
                                <p class="ml-2">บาท</p>
                            </span>
                        </div>

                        <div class="mb-3">

                            <div
                                class="alert alert-dark d-flex d-inline align-items-center text-success justify-content-end">
                                <h4 class="m-0 font-weight-bold ">รวม : </h4>
                                <h4 id="span_cafri_m9" class="font-weight-bold  m-0 ml-2 text-danger">0</h3>
                                    <input id="span_cafri_m9_input" type="text" name="span_cafri_m9" hidden>
                                    <h4 class="font-weight-bold  m-0 ml-2">บาท</h4>
                            </div>
                        </div>

                        <div class="text-right">
                            <button id="compute_cafri_m9" class="btn btn-primary" type="button">คำนวนราคา</button>
                            <button id="reset_cafri_m9" class="btn btn-warning" type="button"
                                hidden>รีเซ็ตข้อมูลใหม่</button>
                        </div>

                    </div>
                    <div class="text-right">
                        <button id="save_receipt" class="btn btn-success w-100" type="button"
                            hidden>บันทึกใบเสร็จ</button>
                    </div>

                </div><!-- ปิด col2 -->

            </div><!-- ปิด Row เล็ก-->


    </div><!-- ปิด Row ใหญ่-->

    <div class="row"></div>
    <div class="p-2 col bg-dark d-flex justify-content-end text-light">
        <div>

            <span class="d-flex d-inline align-items-center">
                <?//! ราคา  ?>

                <h3 class="m-0 text-success d-flex align-items-center">ยอดรวมทั้งหมด : </h3>
                <h3 class="m-0"><input style="width:100px;" id="total_success" type="number" name="raca_total"
                        readOnly="true" class="text-right ml-2 font-weight-bold text-danger bg-dark border border-0"
                        value="<?php echo $result['raca_total']; ?>"></h3>
                <h3 class="m-0 text-success ml-2 d-flex align-items-center">บาท</h3>

            </span>

        </div>
    </div>
</div>
</form>





<?php
// ! ถ้าไม่สามารถ Fetch >>
                        }else{
                            echo "Can't fetch";
                        }

                        //echo "SQL Ok";
// ! ถ้าไม่สามารถ SQL >>
                    }else{
                        echo "Can't SQL";
                    }
                    
                    
                    ?>



</div><!-- ปิด body -->
</div>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {


    $("#compute_cafri_m9").click(function() {


        //! Reset
        /* -------------------------------------------------------------------------- */
        $("#reset_cafri_m9").prop('hidden', false);
        $("#reset_cafri_m9").click(function() {

            location.reload();
        })
        $(this).prop('hidden', true);

        /* -------------------------------------------------------------------------- */


        //! รับค่าตัวแปล
        // ──────────────────────────────────────── II ──────────
        var cafri = ~~$("#cafri").val();
        var m9 = ~~$("#m9").val();
        var total_success = ~~$("#total_success").val();



        // ──────────────────────────────────────────────────
        //

        //! คำนวณค่าไฟ  * 7 บาท / หน่วย
        // ──────────────────────────────────────── I ──────────
        var sum_cafri = cafri * 7;
        $("#span_cafri").text(sum_cafri);
        $("#cafri").val(sum_cafri);
        // ──────────────────────────────────────────────────
        //

        //! คำนวนค่าบริการ 9 คน
        // ──────────────────────────────────────── I ──────────
        $("#span_m9").text(m9);
        // ──────────────────────────────────────────────────
        //

        //! sum 
        // ──────────────────────────────────────── I ──────────
        var sum_total = sum_cafri + m9;
        $("#span_cafri_m9").text(sum_total);
        $("#span_cafri_m9_input").val(sum_total);

        // ──────────────────────────────────────────────────
        //

        //! เปลี่ยนค่าของราคา
        /* -------------------------------------------------------------------------- */
        var change_total_success = sum_total + total_success;
        $("#total_success").val(change_total_success);


        $("#cafri").prop('hidden', true);
        $("#m9").prop('hidden', true);
        /* -------------------------------------------------------------------------- */


        //! ปุ่มบันทึก
        // ──────────────────────────────────────── I ──────────
        if (sum_total <= 0) {
            $("#save_receipt").prop('hidden', true);
        } else {
            $("#save_receipt").prop('hidden', false);
            $("#save_receipt").prop('type', 'submit');
        }
        // ──────────────────────────────────────────────────
        //





    })
});
</script>