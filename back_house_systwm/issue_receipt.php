<?php
    $SL4view_receipt = new DB_conn();

?>
<div class="card">
    <div class="card-header">
        <h3><b>ออกใบเสร็จ และ คิดค่าใช้จ่ายรวม</b></h3>
    </div>
    <div class="card-body">

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
        <div class="alert alert-secondary font-weight-bold">
            <div class="row">
                <div class="form-group col-4 mt-4">
                    <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i> ชื่อจริง</label>
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
                        id="exampleFormControlInput1" value="<?php echo $result['phone_number']; ?>" name="p_number">
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
        </div>
        <hr class=" border-primary">

        <!-- แบ่ง 2 col -->
        <div class="row">
            <div class="col-md-5">

                <div class="row">
                    <div class="form-group col-8">
                        <label for="exampleFormControlTextarea1">
                            <h5><strong>อุปกรณ์ประกอบพิธีกรรม</strong> </h5>
                        </label>
                        <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="5" name="t_address"
                            readOnly><?php echo $result['select_equipment']; ?></textarea>
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
                        <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="5" name="t_address"
                            readOnly><?php echo $result['select_cabamlung']; ?></textarea>
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
                        <input class="form-control w-50" type="number" required>
                        <?php //! ราคา ค่าไฟ  ?>
                        <span class="d-flex d-inline align-items-center text-success">
                            <p>ราคาค่าไฟ : </p>
                            <p class="ml-2 text-danger"></p>
                            <p class="ml-2">บาท</p>
                        </span>

                    </div>

                    <div class="mb-3">
                        <label for="">ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง 9 คน (ตามสมควร)</label>
                        <input class="form-control w-50" type="number" required>
                        <?php //! ราคา เจ้าหน้าที่ 9 คน ?>
                        <span class="d-flex d-inline align-items-center text-success">
                            <p>ราคาค่าบริการเจ้าหน้าที่ 9 คน : </p>
                            <p class="ml-2 text-danger"></p>
                            <p class="ml-2">บาท</p>
                        </span>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" type="button">คำนวนราคา</button>
                    </div>



                </div>

            </div>

        </div>


    </div><!-- ปิด Row ใหญ่-->

    <div class="row"></div>
    <div class="col bg-dark d-flex justify-content-end text-light">
        <div>

            <span class="d-flex d-inline align-items-center">
                <?//! ราคา  ?>
                <h3 class="m-0 p-3 text-success font-weight-bold">ราคาค่าใช้จ่ายทั้งหมด : </h3>
                <h3 class="m-0 text-danger font-weight-bold">
                    <?php echo number_format($result['raca_total']); ?>
                </h3>
                <h3 class="m-0 ml-2 text-success font-weight-bold">บาท</h3>
            </span>

        </div>
    </div>
</div>





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