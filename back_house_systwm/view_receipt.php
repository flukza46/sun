<?php
    $SL4view_receipt = new DB_conn();



?>
<div class="card">
    <div class="card-header d-flex justify-content-center">
        <!-- หัวเรื่อง -->
        <h3><b>ใบเสร็จการจองศาลาฌาปนกิจศพ | วัดนครสวรรค์พระอารามหลวง</b> </h3>


    </div>
    <div class="card-body border border-0 pb-0">
        <!-- เนื้อหา -->
        <div class="container">
            <?php
                    $id_MLB =  $_GET['view_receipt'];

                    $sql = $SL4view_receipt->SL4View_Receipt($id_MLB);
                    
                    if($sql){
                        
                        if($result = mysqli_fetch_array($sql)){
                        ?>

            <div class="row">
                <div class="form-group col-4 mt-4">
                    <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i> ชื่อจริง</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="<?php echo $result['first_name']; ?>" name="f_name" readOnly>
                </div>

                <div class="form-group col-4 mt-4">
                    <label for="exampleFormControlInput1">นามสกุล</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        value="<?php echo $result['last_name']; ?>" name="l_name" readOnly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-4">
                    <label for="exampleFormControlInput1"><i class="fas fa-phone-volume text-info"></i>
                        เบอร์โทรศัพท์</label>
                    <input style="width:200px;" maxlength="10" type="text" class="form-control"
                        id="exampleFormControlInput1" value="<?php echo $result['phone_number']; ?>" name="p_number"
                        readOnly>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-8">
                    <label for="exampleFormControlTextarea1"><i class="fas fa-map-marked-alt text-success"></i>
                        สถานที่อยู่</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="t_address"
                        readOnly><?php echo $result['address']; ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-8">
                    <label class="alert alert-secondary">
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

            <div class="row">
                <div class="form-group col-md-8">
                    <label for="exampleFormControlTextarea1">
                        อุปกรณ์ประกอบพิธีกรรม
                    </label>
                    <textarea class="form-control " id="exampleFormControlTextarea1" rows="5" name="t_address"
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
                <div class="form-group col-md-8">
                    <label for="exampleFormControlTextarea1">
                        อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="t_address"
                        readOnly><?php echo $result['select_cabamlung']; ?></textarea>
                    <label class="font-weight-bold d-flex d-inline">
                        <?//! ราคา  ?>
                        <p class="text-success">ราคาอุปกรณ์ประกอบพิธีกรรม : </p>
                        <p class="ml-2 text-danger"><?php echo number_format($result['raca_cabamlung']); ?></p>
                        <p class="ml-2 text-success">บาท</p>
                    </label>
                </div>
            </div>


            <!-- //!โชว์ค่าไฟ -->
            <!-- /* -------------------------------------------------------------------------- */ -->
            <?php
        
                         if($result['raca_cafri'] && $result['raca_cafri'] =="wait"){
                            ?>
            <div class="alert alert-danger">
                <h4 class="m-0 text-center"><strong>(ยังไม่ได้คิดค่าไฟ และ
                        ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง)</strong> </h4>
            </div>
            <?php
                         }else{
        ?>
            <div class="col-md-4 alert alert-dark">
                <div class="row mt-3">
                    <div class="form-group col-md">
                        <label class="font-weight-bold d-flex d-inline alert alert-secondary m-0">
                            <?//! ราคา  ?>
                            <p class="text-success m-0">ราคาค่าไฟ : </p>
                            <p class="m-0 ml-2 text-danger"><?php echo number_format($result['raca_cafri']); ?></p>
                            <p class="m-0 ml-2 text-success">บาท</p>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md">
                        <label class="font-weight-bold d-flex d-inline alert alert-secondary m-0">
                            <?//! ราคา  ?>
                            <p class="text-success m-0">ราคาค่าบริการเจ้าหน้าที่ 9 คน : </p>
                            <p class="m-0 ml-2 text-danger"><?php echo number_format($result['raca_manternance9']); ?>
                            </p>
                            <p class="m-0 ml-2 text-success">บาท</p>
                        </label>
                    </div>
                </div>
            </div>
            <?php
                         }
                        ?>

            <!-- /* -------------------------------------------------------------------------- */ -->

        </div>



        <div class="row">
            <div class="col bg-dark">
                <div class="container d-flex justify-content-end text-light">
                    <span class="d-flex d-inline align-items-center">
                        <?//! ราคา  ?>
                        <h3 class="m-0 p-3 text-success font-weight-bold">ราคาค่าใช้จ่ายทั้งหมด : </h3>
                        <h3 class="m-0 text-danger font-weight-bold"><?php echo number_format($result['raca_total']); ?>
                        </h3>
                        <h3 class="m-0 ml-2 text-success font-weight-bold">บาท</h3>
                    </span>

                </div>
            </div>
        </div>

        <!-- //! Test -->
        <!-- /* -------------------------------------------------------------------------- */ -->
        <hr>
                    
                    <button type="">test</button>


        <?php
                        }else{
                            echo "Can't fetch";
                        }

                        //echo "SQL Ok";
                    }else{
                        echo "Can't SQL";
                    }
                    
                    
                    ?>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
$(document).ready(function() {
    <?php
            if(isset($_GET['print']) =="ok"){
                ?>

    window.print();
    window.close();
    <?php
            }
        ?>




});
</script>