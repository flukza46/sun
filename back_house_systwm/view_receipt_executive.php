<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
    $SL4view_receipt = new DB_conn();
?>
<div class="card">
    <div class="card-body">

        <div class="row ">
            <div class="col d-flex justify-content-center">
                <img src="../image/logo.png" style="width:10rem;">
            </div>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <h3 class="mt-2 font-weight-bold">ใบเสร็จ</h3>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <h6 class="mb-2 font-weight-bold">การเช่าศาลาฌาปนกิจศพและอุปกรณ์ประกอบพิธีกรรม
                    วัดนครสวรรค์พระอารามหลวง</h6>
            </div>
        </div>

        <div class="container-fluid">
            <?php
                    $id_MLB =  $_GET['view_receipt'];

                    $sql = $SL4view_receipt->SL4View_Receipt($id_MLB);
                    
                    if($sql){
                        
                        if($result = mysqli_fetch_array($sql)){
                        ?>

            <div class="row mb-3">
                <div class="col d-flex justify-content-end">
                    <text class="font-weight-bold">เลขที่ใบเสร็จ : </text><text
                        class="ml-1"><?=$result['id_list_booking'];?></text>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-8 border border-1 border-dark p-3">
                    <text class="font-weight-bold">ชื่อผู้จอง : </text>
                    <text><?php echo $result['first_name']." ".$result['last_name']; ?></text> <br>
                    <text class="font-weight-bold">เบอร์โทรศัพท์ : </text> <text><?=$result['phone_number'];?></text>
                    <br>
                    <text class="font-weight-bold">ที่อยู่ : </text> <text><?=$result['address'];?></text>
                </div>
                <div class="col border border-1 border-dark p-3">
                    <?php

                    $time1 = $result['datestart'];
                    $time_th1 = $SL4view_receipt->thai_date_and_time(strtotime($time1));
                    $time2 = $result['datestop'];
                    $time_th2 = $SL4view_receipt->thai_date_and_time2(strtotime($time2));

                    ?>
                    <text class="font-weight-bold">กำหนดการจอง : </text> <br> <text><?=$time_th1;?> <text
                            class="font-weight-bold">ถึง</text> <?=$time_th2;?></text>
                </div>
            </div>

            <table class="w-100 table table table-hover">
                <thead class="bg-success">
                    <tr>
                        <th class="text-center"><h4 class="font-weight-bold">รายการ</h4></th>
                        <th class="text-center border-left"><h4 class="font-weight-bold">ยอดรวม</h4></th>
                    </tr>

                </thead>

                <tbody class="">
                    <tr>
                        <td>
                            <b>จองศาลา</b>
                            <p style="text-indent:5rem;"><?php echo $result['select_sala']; ?></p>
                        </td>
                        <td class="text-center border-left">
                            <?php echo number_format($result['raca_sala']); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>อุปกรณ์ประกอบพิธีกรรม</b>

                            <?php 
                            
                                $eq_sl = $SL4view_receipt->runQuery("SELECT * from equipment where id in($result[select_equipment])");
                               
                                $i=0;
                                while($fet_eq = mysqli_fetch_array($eq_sl)){
                                    $arr_jumnul = explode(",", $result['jumnul_eq']);
                                    ?>
                                    <p class="p-0 m-0" style="text-indent:5rem;">
                                    <?php echo $fet_eq['equipment_tiype']." ราคา ".$fet_eq['price']." x ".$arr_jumnul[$i]."</br>"; ?>
                                    </p>
                                    <?php
                                    $i++;
                                }
                            
                            ?>
                            
                        </td>
                        <td class="text-center border-left">
                            <?php
                                echo number_format($result['raca_equip']);
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b> อัตราค่าบำรุงฌาปนสถานวัดนครสวรรค์</b>
                            <p style="text-indent:5rem;"><?php echo $result['select_cabamlung']; ?></p>
                        </td>
                        <td class="text-center border-left">
                                <p>
                            <?php echo number_format($result['raca_cabamlung']);  ?>
                                </p>
                        </td>
                    </tr>

                    <!-- //!โชว์ค่าไฟ -->

                    <?php
        
        if($result['raca_cafri'] && $result['raca_cafri'] =="wait"){
            ?>
                    <tr>
                        <td colspan="2" style="border-bottom: 0.2rem double;">
                            <div class="alert alert-danger">
                                <h4 class="m-0 text-center"><strong>(ยังไม่ได้คิดค่าไฟ และ
                                        ค่าบริการของเจ้าหน้าที่วันประชุมเพลิง)</strong> </h4>
                            </div>
                        </td>
                    </tr>
                    <?php
        }else{
?>
                    <tr>
                        <td>

                            <b> ค่าไฟ</b>
                            <p style="text-indent:5rem;">ค่าไฟฟ้าหน่วยล่ะ 7 บาท</p>

                        </td>
                        <td class="text-center border-left">
                            <?php echo number_format($result['raca_cafri']);  ?>
                        </td>

                    </tr>
                    <tr style="border-bottom: 0.2rem double;">
                        <td>
                            <b> ราคาค่าบริการเจ้าหน้าที่ 9 คน</b>
                        </td>
                        <td class="text-center border-left">
                            <?php echo number_format($result['raca_manternance9']);  ?>
                        </td>

                    </tr>



                    <?php
        }
       ?>

                    <!-- //!  */ -->
                    <tr style="border-bottom: 0.2rem double;">
                        <td class="text-right">
                            <h4 class="font-weight-bold ">รวมค่าใช้จ่ายทั้งหมด :</h4>
                        </td>
                        <td class="text-center">
                        <h4 class="font-weight-bold "><?php echo number_format($result['raca_total']) ;?></h4>
                        </td>
                    </tr>


                </tbody>
            </table>
            <?php
                        }
                    }
                        ?>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    <?php
            if(isset($_GET['print']) =="ok"){
                ?>

                window.print();
                window.onafterprint = function() {
                    window.close();
                };
                
    
    <?php
            }
        ?>





});
</script>