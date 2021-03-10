<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
        require_once('../function.php');
        $connect_database = new DB_conn();
        $news_edit = new DB_conn();
        $news_select = new DB_conn();


        if(isset($_POST['submit'])){

            $u1 = $_POST['u1'];
            $u2 = $_POST['u2'];
            $idIns = $_GET['update_id'];
    
            $path = "../image/equipment/";
            $fck = $_FILES['u4']['name'];
            

        
        
            
            if($_FILES['u4']['name'] == ""){
                $chk1 = $news_edit->edit_newsNoPic3($u1, $u2, $idIns);
                if($chk1){
                    echo"<script>";
                    echo "setTimeout(function () { 
                        swal({
                        title: 'บันทึกข้อมูลเรียบร้อย',
                        text: 'บันทึกข้อมูลอุปกรณ์ประกอบพิธีกรรมกิจเรียบร้อย',
                        type: 'success',
                        confirmButtonText: 'OK'
                        },
                        function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'manager.php?p=2';
                        }
                        }); }, 800);";
                    
                
                    echo"</script>";
                }

            }
            
            if($_FILES['u4']['name'] != ""){  
            
            $idS = $_GET['update_id']; //! del in folder
            $resSFDinFol =$news_select->selNForEdit3($idS);
            $numSFDinFol = mysqli_fetch_array($resSFDinFol);
        
            $temp = explode(".", $_FILES['u4']['name']);
            $randomN = rand(1, 100000);
            $newNF1 = round(microtime(true)).$randomN.".".$temp[1];
            $move_finish = move_uploaded_file($_FILES['u4']['tmp_name'], $path.$newNF1);
            
            if($move_finish){
                
                if($numSFDinFol){
                    $nameold = $numSFDinFol['img2'];
                    $file = $path.$nameold;
                    $delPicInFol = unlink($file);
                }

                $chk2 = $news_edit->edit_news3($u1, $u2, $newNF1, $idIns);
                if($chk2){
                    echo"<script>";
                    echo "setTimeout(function () { 
                        swal({
                        title: 'บันทึกข้อมูลเรียบร้อย',
                        text: 'บันทึกข้อมูลข่าวประชาสัมพันธ์เรียบร้อย',
                        type: 'success',
                        confirmButtonText: 'OK'
                        },
                        function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'manager.php?p=2';
                        }
                        }); }, 800);";
                    
                
                    echo"</script>";
                }else{
                    echo"no";
                }
            }else{
            echo"ไม่สามารถเคลื่อนย้ายไฟล์ได้";
            }
            
            }
            }
    
        




?>

<a href="manager.php?p=2"><button class="btn btn-primary mb-2 "><i class="fas fa-arrow-circle-left"></i> ย้อนกลับ</button></a>

<div class="card">
    <div class="card-header text-center bg-warning">
        <h3> <b><i class="far fa-newspaper text-success"></i> แก้ไขอุปกรณ์ประกอบพิธีกรรม</b></h3>
    </div>
    <div class="card-body">

            <form action="manager.php?p=edit_epuipmentt&update_id=<?php echo $_GET['update_id']; ?>" method="post" enctype="multipart/form-data"> 

            <?php
                    $idS = $_GET['update_id'];
                    $resS =$news_select->selNForEdit3($idS);
                    $numS = mysqli_fetch_array($resS);

                    if($numS)
                    {
                        
                    
            ?>

            <div class="form-group">
                <label><b>ชื่ออุปกรณ์ประกอบพิธีกรรมเดิม :</b> </label>
                <input type="text" class="form-control border border-success w-50" name="u1" value="<?php echo $numS['equipment_tiype']; ?>" required >
            </div>
            <div class="form-group">
                <label><b>ราคาเดิม :</b> </label>
                <input type="text" class="form-control border border-success" name="u2" value="<?php echo $numS['price']; ?>" required >
            </div>
            <div class="form-group">
                <label> <b>รูปอุปกรณ์ประกอบพิธีกรรมเดิม :</b> </label><br>
                <img style="width:350px; border:2px solid green;" src="../image/equipment/<?php echo $numS['img2']; ?>" alt=""><br><br>
                <label class="d-inline"> <b>เลือกรูปภาพใหม่ :</b> </label>
                <input class="d-inline" type="file" class="form-control-file w-50" name="u4">
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="reset" class="btn btn-warning text-light">ยกเลิก</button>
                <button type="submit" class="btn btn-success text-light ml-2" name="submit">บันทึก</button>
            </div>
        <?php    
        }
        ?>
            
            </form>
    </div>
</div>