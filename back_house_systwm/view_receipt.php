<?php
    $SL4view_receipt = new DB_conn();



?>
<div class="card">
    <div class="card-header">
        <!-- หัวเรื่อง -->
        <h3><b>รายละเอียดการจองศาลาฌาปนกิจศพ</b> </h3>


    </div>
    <div class="card-body">
        <!-- เนื้อหา -->
        <?php
                    $id_MLB =  $_GET['view_receipt'];

                    $sql = $SL4view_receipt->SL4View_Receipt($id_MLB);
                    
                    if($sql){
                        
                        if($result = mysqli_fetch_array($sql)){
                        ?>

                            <div class="row">
                                <div class="form-group col-4 mt-4">
                                    <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i> ชื่อจริง</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $result['first_name']; ?>" name="f_name"
                                        readOnly>
                                </div>

                                <div class="form-group col-4 mt-4">
                                    <label for="exampleFormControlInput1">นามสกุล</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $result['last_name']; ?>" name="l_name"
                                        readOnly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="exampleFormControlInput1"><i class="fas fa-phone-volume text-info"></i>
                                        เบอร์โทรศัพท์</label>
                                    <input style="width:200px;" maxlength="10" type="text" class="form-control"
                                        id="exampleFormControlInput1" value="<?php echo $result['phone_number']; ?>" name="p_number" readOnly>
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
                                <div class="form-group col-8">
                                    <label for="exampleFormControlTextarea1">
                                    อุปกรณ์ประกอบพิธีกรรม
                                    </label>
                                    <textarea class="form-control w-50" id="exampleFormControlTextarea1" rows="5" name="t_address"
                                        readOnly><?php echo $result['select_equipment']; ?></textarea>
                                    <label class="font-weight-bold d-flex d-inline">
                                    <p class="text-success">ราคาอุปกรณ์ประกอบพิธีกรรม : </p>
                                    <p class="ml-2 text-danger"><?php echo $result['raca_equip']; ?></p>
                                    <p class="ml-2 text-success">บาท</p>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-8">
                                    <label for="exampleFormControlTextarea1">
                                    อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์
                                    </label>
                                    <textarea class="form-control w-50" id="exampleFormControlTextarea1" rows="5" name="t_address"
                                        readOnly><?php echo $result['select_cabamlung']; ?></textarea>
                                    <label class="font-weight-bold d-flex d-inline">
                                    <p class="text-success">ราคาอุปกรณ์ประกอบพิธีกรรม : </p>
                                    <p class="ml-2 text-danger"><?php echo $result['raca_cabamlung']; ?></p>
                                    <p class="ml-2 text-success">บาท</p>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col bg-dark d-flex justify-content-end text-light" >
                                    <div>
                                            
                                        <span class="d-flex d-inline align-items-center">
                                                <h3 class="m-0 p-3 text-success font-weight-bold">ราคาค่าใช้จ่ายทั้งหมด : </h3>
                                                <h3 class="m-0 text-danger font-weight-bold"><?php echo $result['raca_total']; ?></h3>
                                                <h3 class="m-0 ml-2 text-success font-weight-bold">บาท</h3>
                                        </span>
                                            
                                    </div>
                                </div>
                            </div>


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