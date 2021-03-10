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
                    <form>
                      <div class="form-group col-4 mt-4">
                        <label for="exampleFormControlInput1"><i class="fas fa-user-edit text-primary"></i> ชื่อจริง</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อจริง"> 
                      </div>
                      <div class="form-group col-4"> 
                        <label for="exampleFormControlInput1">นามสกุล</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุล">
                      </div>
                      <div class="form-group col-4"> 
                        <label for="exampleFormControlInput1"><i class="fas fa-phone-volume text-info"></i> เบอร์โทรศัพท์</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="หมายเลขโทรศัพท์">
                      </div>
                      <div class="form-group col-8">
                        <label for="exampleFormControlTextarea1"><i class="fas fa-map-marked-alt text-success"></i> สถานที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                    </form>
            </div>
        </div>
  </div>


    <!--อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์-->
    <div class="container-fluid">
            <div class="card">
                <div class="card-header text-center">
                <h3><b>อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์ <i class="fas fa-check-circle text-primary"></i></b></h3>
              </div>

                <div class="card-body">
                <div class="form-group col-4">
                      <label for="exampleFormControlInput1"><i class="fas fa-laptop-house text-success"></i> ศาลาฌาปนกิจศพ</label>
                      <select class="form-control">
                        <option class = "text-secondary">โปรดเลือกศาลาฌาปนกิจศพ</option>
                        <?php
                            $chk = $SLOptionP->SOP();
                            while ($re = mysqli_fetch_array($chk)) {
                              # code...
                              ?>
                              <option><?php echo $re['pavilion_name']; ?></option>
                            <?php
                            } 



                        ?>
                      </select>
                      </div>
                      <div class="row ml-2">
                          <div class="form-group col-md-3">
                                <label for="inputState">เลือกวันที่ทำการ</label>
                                <input class="form-control" type="date">
                          </div>

                          <div>
                                <label for="inputState">เลือกวันที่วันครบกำหนด</label>
                                <input class="form-control" type="date">
                          </div>
                            
                      </div>

                      <div class="form-group col-4">
                      <label for="exampleFormControlInput1"><i class="fas fa-menorah text-warning"></i> อุปกรณ์ประกอบพิธีกรรม</label>
                      <select class = "form-control">
                        <option class = "text-secondary">โปรดเลือกอุปกรณ์ประกอบพิธี</option>
                        <?php
                            $chk = $SLOptionP->SOP2();
                            while ($re = mysqli_fetch_array($chk)) {
                              # code...
                              ?>
                              <option><?php echo $re['equipment_tiype']; ?></option>
                            <?php
                            } 



                        ?>
                      </select>
                    </div>

                <div class="form-check col-4 mt-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                      ค่าบำรุงเมรุ (วันศพออก)
                    </label>
                  </div>
                </div>

              <div class="form-check col-4">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                  ค่าไฟฟ้าคิดตามจำนวนที่ใช้
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                  <label class="form-check-label" for="exampleRadios1">
                  ค่าทำความสอาดโลงเย็น
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าทำความสอาดวันศพออก
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำบุงเครื่องเสียง
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าพนักงานเฝ้าศพกลางคืน
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงพัดลมหน้าเมรุ
                  </label>
                </div>
              </div>

              <div class="form-check col-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงสุสาน
                  </label>
                </div>
              </div>

              <div class= "mt-4 ">
                  <button type="button" class="btn btn-success"><i class="far fa-check-circle"></i> แสดงผล</button> <button type="button" class="btn btn-warning"><i class="fas fa-sync-alt"></i> Reset</button>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>






    










