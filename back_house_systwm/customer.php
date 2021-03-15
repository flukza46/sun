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
                      <div class="form-group col-12">
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
                            <div class="d-flex justify-content-start mt-2">
                            <b class="text-success d-flex align-items-center">ราคาอุปกรณ์ประกอบพิธีกรรม : </b><input id="equip-total" type="number" disabled="true" class="text-right ml-2 font-weight-bold text-danger" value="0"> <b class="text-success ml-2 d-flex align-items-center">บาท</b>
                            </div>
                    </div> 
                    </div>
                            
                
              <div><b>อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์ <i class="fas fa-check-circle text-primary"></i></b></div>
                <div class="form-check col mt-4">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung1" id="chkbb1" value="ค่าบำรุงเมรุ (วันศพออก)">
                    <input id="pricebamrung1" type="number" hidden value="2000"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                      ค่าบำรุงเมรุ (วันศพออก) ราคา 2000 บาท<?php echo"  "?></label>
                  </div>
                </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung2" id="chkbb2" value="ค่าบุรุงโลงเย็น">
                  <input id="pricebamrung2" type="number" hidden value="300"> <!-- ราคา -->
                  <label class="form-check-label" for="exampleRadios2">
                  ค่าบุรุงโลงเย็น ราคา 300 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                <div class="container">
                  <input class="form-check-input" type="checkbox" name="cabamlung3" id="chkbb3" value="ค่าบำรุงพัดลมหน้าเมรุ">
                  <input id="pricebamrung3" type="number" hidden value="100"> <!-- ราคา -->
                  <label class="form-check-label" for="exampleRadios1">
                  ค่าบำรุงพัดลมหน้าเมรุ ราคา 100 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung4" id="chkbb4" value="ค่าไฟฟ้าคิดตามจำนวนที่ใช้">
                    <input id="pricebamrung4" type="number" hidden value="7"> <!-- ราคาจริง -->

                    <label class="form-check-label mr-2" for="exampleRadios1">
                    ค่าไฟฟ้าคิดตามจำนวนที่ใช้ หน่วยละ 7 บาท <b>จำนวน : </b> </label><input id="nuy" style="width:60px;" type="number_pricebamrung4" value="0" class="text-right font-weight-bold"> <b>หน่วย</b>
                    
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung5" id="chkbb5" value="ค่าทำความสะอาดวันศพออก">
                    <input id="pricebamrung5" type="number" hidden value="50"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าทำความสะอาดวันศพออก ราคา 200 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung6" id="chkbb6" value="ค่าพนักงานเฝ้าศพกลางคืน">
                    <input id="pricebamrung6" type="number" hidden value="200"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าพนักงานเฝ้าศพกลางคืน ราคา 200 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung7" id="chkbb7" value="ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง 9 คน">
                    <input id="pricebamrung7" type="number" hidden value="500"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง 9 คน ราคา 500 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung8" id="chkbb8" value="ค่าบำรุงเรื่องเสียง">
                    <input id="pricebamrung8" type="number" hidden value="100"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงเรื่องเสียง ราคา 500 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung9" id="chkbb9" value="ค่าทำความสอาดโลงเย็น">
                    <input id="pricebamrung9" type="number" hidden value="7"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าทำความสอาดโลงเย็น ราคา 50 บาท<?php echo"  "?></label>
                </div>
              </div>

              <div class="form-check col">
                  <div class="container">
                    <input class="form-check-input" type="checkbox" name="cabamlung10" id="chkbb10" value="ค่าบำรุงสุสาน (เฉพาะศพเก็บ)">
                    <input id="pricebamrung10" type="number" hidden value="200"> <!-- ราคา -->
                    <label class="form-check-label" for="exampleRadios1">
                    ค่าบำรุงสุสาน (เฉพาะศพเก็บ) ราคา 1500 บาท<?php echo"  "?></label>


                </div>
              </div>
                    <div class="d-flex align-items-starts mt-2">
                            <b class="text-success d-flex align-items-center">ราคาค่าบำรุงฌาปนสถาน : </b><input id="bamrung-total" type="number" disabled="true" class="text-right ml-2 font-weight-bold text-danger" value="0"> <b class="text-success ml-2 d-flex align-items-center">บาท</b>
                    </div>

              

              <div class= "mt-4 ">
                  <!-- <button type="submit" name="submit" class="btn btn-success"><i class="far fa-check-circle" value="submit"></i>บันทึก</button>  -->

                  <button id="billtest" type="button" class="btn btn-primary"><i class="fas fa-sync-alt"></i> คำนวณค่าใช้จ่ายทั้งหมด</button>
                  <button type="reset" class="btn btn-warning"> Reset</button>
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


                                                                    $i3=1; 
                                                                    while($i3 <=10){
                                                                      ?>
                                                                        if($("#chkbb<?php echo"$i3";?>").is(':checked')){
                                                                          var pricebamrung<?php echo"$i3";?> = $("#pricebamrung<?php echo$i3;?>").val();
                                                                          var sum2price = ~~pricebamrung<?php echo"$i3";?>;
                                                                          var sum2 = ~~sum2 + sum2price; // ราคารวม                                               
                                                                        }
                                                                      <?php
                                                                      $i3++;
                                                                    }                    
                                                        ?>
                                                                        
                                                                        // ----------------------------------
                                                                        $("#nuy").on('keyup', function(){
                                                                        var nuy = $(this).val();

                                                                        var sum_nuy = nuy * 7;
                                                                        
                                                                        $("#pricebamrung4").val(sum_nuy);
                                                                        console.log(sum_nuy);
                                                                        });
                                                                       
                                                                        // ----------------------------------
                                                                    


                                                                    
                                                                    $("#equip-total").val(sum) ; // แสดงผลรวม
                                                                    $("#bamrung-total").val(sum2) ; // แสดงผลรวม
          
                                                      })
                              });
      </script>


    <!-- //hihiihihihi ok 9าฟลุ๊ค  55-->
    <!--  บิล->










