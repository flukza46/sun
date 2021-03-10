<?php 
      $SLOptionP = new DB_conn();



?>

<!--กรอกข้อมูลลูกค้า-->
<div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header text-center">
            <h3><b><i class="fas fa-edit text-success"></i> กรอกข้อมูลลูกค้า</b></h3>           
            </div>
            <div class="card-body">



              <form action="billtest.php" method="POST">


                      <div class="form-group col-4 mt-4">
                        <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i> ชื่อจริง</label>                        
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อจริง" name="f_name"> 
                      </div>

                      <div class="form-group col-4"> 
                        <label for="exampleFormControlInput1">นามสกุล</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุล" name="l_name">
                      </div>

                      <div class="form-group col-4"> 
                        <label for="exampleFormControlInput1"><i class="fas fa-phone-volume text-info"></i> เบอร์โทรศัพท์</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="หมายเลขโทรศัพท์" name="p_number">
                      </div>

                      <div class="form-group col-8">
                        <label for="exampleFormControlTextarea1"><i class="fas fa-map-marked-alt text-success"></i> สถานที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="t_address"></textarea>
                      </div>

                    
            </div>
        </div>
  </div>


    <!--อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์-->
    <div class="container-fluid">
            <div class="card">
              
                <div class="card-header text-center">
                <h3><b>ปนสถานวัดนครสวรรค์และอุปกรณ์ประกอบพิธีกรรม</b></h3>
              </div>

                <div class="card-body">
                <div class="row">
                <div class="form-group col-4">
                      <label for="exampleFormControlInput1"><i class="fas fa-laptop-house text-success"></i> ศาลาฌาปนกิจศพ</label>
                      <select class="form-control" name="sl_sala">
                        <option class = "text-secondary">โปรดเลือกศาลาฌาปนกิจศพ</option>
                        <?php
                            $chk = $SLOptionP->SOP();
                            while ($re = mysqli_fetch_array($chk)) {
                              # code...
                              ?>
                              <option value="<?php echo $re['id']; ?>"><?php echo $re['pavilion_name']; ?></option>
                            <?php
                            } 
                        ?>
                      </select>
                      </div>
                      </div>

                       
                      <div class="d-flex d-inline mb-3">
                          <div class="mr-3">
                                <label for="inputState"><i class="far fa-calendar text-danger"></i> เลือกวันที่ทำการ</label>
                                <input class="form-control" type="date" name="date_start">
                          </div>

                          <div class=" ">
                                <label for="inputState"><i class="far fa-calendar text-danger"></i> เลือกวันที่วันครบกำหนด</label>
                                <input class="form-control" type="date" name="date_stop">
                          </div>
                      </div>


                    <div class="row">
                      <div class="form-group col-4">
                      <label for="exampleFormControlInput1"><i class="fas fa-menorah text-warning"></i> อุปกรณ์ประกอบพิธีกรรม</label>
                      <?php
                            $chk = $SLOptionP->SOP2();
                            while ($re = mysqli_fetch_array($chk)) {
                              # code....
                              ?>
                        <div class="form-check col">
                        <div class="container">
                          <input class="form-check-input" type="checkbox" name="equip[]" id="exampleRadios1" value="<?php echo $re['id']; ?>">
                          <label class="form-check-label" for="exampleRadios1">
                          <?php echo $re['equipment_tiype']; ?>
                          </label>
                        </div>
                        </div>
                        <?php
                            } 
                        ?>
                
                      </select>
                    </div>
                    </div>
                
              <div><b>อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์ <i class="fas fa-check-circle text-primary"></i></b></div>
                <div class="form-check col mt-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าบำรุงเมรุ (วันศพออก)">
                    <label class="form-check-label" for="exampleRadios1">
                      ค่าบำรุงเมรุ (วันศพออก)
                    </label>
                  </div>
                </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios2" value="ค่าไฟฟ้าคิดตามจำนวนที่ใช้">
                  <label class="form-check-label" for="exampleRadios2">
                  ค่าไฟฟ้าคิดตามจำนวนที่ใช้
                  </label>
                </div>
              </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าทำความสอาดโลงเย็น">
                  <label class="form-check-label" for="exampleRadios1">
                  ค่าทำความสอาดโลงเย็น
                  </label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าทำความสอาดวันศพออก">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าทำความสอาดวันศพออก
                  </label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าบำบุงเครื่องเสียง">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำบุงเครื่องเสียง
                  </label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าพนักงานเฝ้าศพกลางคืน">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าพนักงานเฝ้าศพกลางคืน
                  </label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าบำรุงพัดลมหน้าเมรุ">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงพัดลมหน้าเมรุ
                  </label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung[]" id="exampleRadios1" value="ค่าบำรุงสุสาน">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงสุสาน
                  </label>
                </div>
              </div>

              <div class= "mt-4 ">
                  <button type="submit" name="submit" class="btn btn-success"><i class="far fa-check-circle" value="submit"></i>บันทึก</button> 

                  <button type="reset" class="btn btn-warning"><i class="fas fa-sync-alt"></i> Reset</button>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>

      </form>

   





    










