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
                            $i=1;
                            while ($re = mysqli_fetch_array($chk)) {
                              # code....
                              ?>
                        <div class="form-check col">
                        <div class="container">

                          <input class="form-check-input" type="checkbox" name="equip<?php echo$i; ?>" id="chkb<?php echo$i; ?>" value="<?php echo $re['equipment_tiype']." "; ?>">
                          <input id="price<?php echo$i; ?>" type="number" name="price" hidden value="<?php echo $re['price']; ?>"> <!-- ราคา -->

                          <label class="form-check-label" for="exampleRadios1">
                          <?php echo $re['equipment_tiype']; ?> ราคา : <?php echo $re['price']; ?> บาท
                          </label>

                        </div>
                        </div>
                        <?php
                          $i++;
                            } 
                        ?>
                        
                            <b class="text-danger">sdgsg</b>
                    </div>
                    </div>
                            
                
              <div><b>อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์ <i class="fas fa-check-circle text-primary"></i></b></div>
                <div class="form-check col mt-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung1" id="" value="ค่าบำรุงเมรุ (วันศพออก)">
                    <label class="form-check-label" for="exampleRadios1">
                      ค่าบำรุงเมรุ (วันศพออก)<?php echo"  "?></label>
                  </div>
                </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung2" id="" value="ค่าไฟฟ้าคิดตามจำนวนที่ใช้">
                  <label class="form-check-label" for="exampleRadios2">
                  ค่าไฟฟ้าคิดตามจำนวนที่ใช้<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung3" id="" value="ค่าทำความสอาดโลงเย็น">
                  <label class="form-check-label" for="exampleRadios1">
                  ค่าทำความสอาดโลงเย็น<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung4" id="" value="ค่าทำความสอาดวันศพออก">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าทำความสอาดวันศพออก<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung5" id="" value="ค่าบำบุงเครื่องเสียง">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำบุงเครื่องเสียง<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung6" id="exampleRadios1" value="ค่าพนักงานเฝ้าศพกลางคืน">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าพนักงานเฝ้าศพกลางคืน<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung7" id="exampleRadios1" value="ค่าบำรุงพัดลมหน้าเมรุ">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงพัดลมหน้าเมรุ<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung8" id="exampleRadios1" value="ค่าบำรุงสุสาน">
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงสุสาน<?php echo"  "?></label>
                </div>
              </div>

              <div class= "mt-4 ">
                  <!-- <button type="submit" name="submit" class="btn btn-success"><i class="far fa-check-circle" value="submit"></i>บันทึก</button>  -->

                  <button id="billtest" type="reset" class="btn btn-primary"><i class="fas fa-sync-alt"></i> คำนวณค่าใช้จ่ายทั้งหมด</button>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>

      </form>

   


      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <script>
                              //รวมราคา
                              $(document).ready(function(){
                                
                                                  $("#billtest").click(function(){
                                                    <?php
                                                                    $chk = $SLOptionP->SOP2();
                                                                    $i2=1;
                                                                    while ($re = mysqli_fetch_array($chk)) {
                                                                      # code....
                                                                      ?>
                                                                      if($("#chkb<?php echo"$i2";?>").is(':checked')){
                                                                      var price<?php echo$i2;?> = $("#price<?php echo$i2;?>").val(); 
                                                                      var sumprice = ~~price<?php echo$i2;?>;
                                                                      var sum = ~~sum + sumprice;                // ราคารวม                                              
                                                                      }
                                                                      
                                                            <?php
                                                                    $i2++;
                                                                    }                      
                                                        ?>
                                                                    console.log(sum);
                                                                  
                                                                  
                                                                    
                                                      })
                              });
      </script>


    










