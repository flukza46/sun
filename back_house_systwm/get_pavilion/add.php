<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
    $news_insert = new DB_conn();


    if(isset($_POST['submit'])){

        $newsT = $_POST['newsT'];
        $newsS = $_POST['newsS'];

        $path = "../image/pavilion/";
        
        $temp = explode(".", $_FILES['newsC'] ['name']);
        $randomN = rand(1, 100000);
        $newsNF = round(microtime(true)).$randomN.".".$temp[1];
        $move_finish = move_uploaded_file($_FILES['newsC']['tmp_name'], $path.$newsNF);
        if($move_finish){
            $chk = $news_insert->inst_pavilion($newsT, $newsS, $newsNF);

            if($chk){
                echo"<script>";
                echo "setTimeout(function () { 
                    swal({
                    title: 'บันทึกข้อมูลเรียบร้อย',
                    text: 'บันทึกข้อมูลศาลาฌาปนกิจศพเรียบร้อยเเล้ว',
                    type: 'success',
                    confirmButtonText: 'OK'
                    },
                    function(isConfirm){
                    if (isConfirm) {
                        window.location.href = 'manager.php?p=1';
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


?>

<div class= container>
<a href="manager.php?p=3"><button class= "btn btn-primary mb-2 mt-0"><i class="fas fa-arrow-left"></i> ย้อนกลับ</button></a>
</div>


<div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3><i class="far fa-newspaper text-info"></i> จัดการศาลาฌาปนกิจศพ</h3>
            </div>
            <div class="card-body">
            <form action="manager.php?p=m1_add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label><b>ชื่อศาลาฌาปนกิจศพ</b></label>
                <input type="text" class="form-control w-50" name="newsT" placeholder="กรอกข้อมูลศาลาฌาปนกิจศพ" required>
            </div>
            <div class="form-group">
                <label><b>ราคา</b></label>
                <input type="text" class="form-control w-50" name="newsS" placeholder="กรอกข้อมูลราคา ศาลาฌาปนกิจศพ" required>
            </div>
            <div class="form-group">
                <label><b>รูปศาลาฌาปนกิจศพ</b></label>
                <input type="file" class="form-control-file" name="newsC" required>
            </div>
            <div class="form-group d-flex justify-content-end">
                <button type="reset" class="btn btn-warning text-light">ยกเลิก</button>
                <button type="submit" name="submit" class="btn btn-success text-light ml-2">บันทึก</button>
            </div>

            </form>
                    
            </div>
        </div>
</div>