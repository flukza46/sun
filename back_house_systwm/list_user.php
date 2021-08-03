<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><!--jquery-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
require_once('../function.php');
$func4page = new fff();

    if(isset($_GET['edit'])){
        $sl_use_id = $func4page->runQuery("SELECT * from user where id='$_GET[id]' ");
        $fet_u_id = mysqli_fetch_assoc($sl_use_id);
        ?>
<div class="card mb-4">
    <div class="card-header bg-warning d-flex justify-content-between">
        <h3>แก้ไขสิทธิ์การเข้าใช้งาน</h3>
        <a href="super_admin.php?p=2" class="btn btn-primary text-light font-weight-bold">
            << ยกเลิกการแก้ไข</a>
    </div>
    <div class="card-body alert-warning">
        <div class="row">
            <div class="col-md-5 border border-warning p-3">
                <strong><u>ข้อมูลผู้ใช้งาน</u></strong><br>
                <text>ชื่อ-นามสกุล :
                    <?=$fet_u_id['title_name']." ".$fet_u_id['first_name']." ".$fet_u_id['last_name']?></text> <br>
                <text>สิทธิ์การใช้งานล่าสุด :
                    <?php
                if($fet_u_id['user_level']== "admin") {
                           ?>
                    <div class="badge badge-primary  ">เจ้าหน้าที่</div>
                    <?php
                       }
                       if($fet_u_id['user_level']== "manager") {
                           ?>
                    <div class="badge badge-info ">ผู้บริหาร</div>
                    <?php
                       }
                       if($fet_u_id['user_level']== "people") {
                           ?>
                    <div class="badge badge-warning ">ผู้ใช้ทั่วไป</div>
                    <?php
                       }
                       if($fet_u_id['user_level']== "super@min") {
                           ?>
                    <div class="badge badge-success">ผู้ดูแลระบบ</div>
                    <?php
                       }
                       ?>
                </text>
            </div>


            <div class="col-md-3 p-3">
                <strong><u>เปลี่ยนสิทธิ์การใช้งาน</u></strong>
                <form action="super_admin.php?p=2&edit&id=<?=$_GET['id']?>" method="post">
                <div class="row">
                    <div class="col-md-8">
                        <select class="form-control border border-dark" name="x" id="">
                            <option value="admin">เจ้าหน้าที่</option>
                            <option value="manager">ผู้บริหาร</option>
                        </select>
                    </div>
                    <div class="col-md">
                       <button type="submit" name="submit" class="form-control btn btn-success">บันทึก</button>
                    </div>
                </div>
                </form>

            </div>


        </div>
    </div>
</div>
<?php
    }

    if(isset($_POST['submit'])){
        
        $up_user = $func4page->runQuery("UPDATE user set `user_level`='$_POST[x]' where id='$_GET[id]' ");
        if($up_user){
            ?>
                <script>
                    $(document).ready(function(){
                        
                        Swal.fire({
                        icon: 'success',
                        title: 'เปลี่ยนสิทธิ์การใช้งานใหม่เรียบร้อยแล้ว',
                        showConfirmButton: false,
                        timer: 3500,
                        timerProgressBar: true
                        }).then(function(){ 
                            window.location.href = 'super_admin.php?p=2';
                        });
                    
                });
                </script>
            <?php
        }
    }

?>


<div class="card">
    <div class="card-header">
        <h3 class="font-weight-bold"><i class="fas fa-list-ol"></i> ข้อมูลผู้ใช้งานทั้งหมด</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped ">
            <thead class="alert-info text-nowrap">
                <th>#</th>
                <th>สิทธิ์การใช้งานล่าสุด</th>
                <th>ชื่อ-นามสกุล</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>เบอร์โทรศัพท์</th>
                <th>จัดการสิทธิ์การใช้งาน</th>
            </thead>
            <tbody>
                <?php

            
            $sl_user = $func4page->runQuery("SELECT * from user order by id");
           
            
            $i=1;
            while($fet_use = mysqli_fetch_assoc($sl_user)){
        ?>
                <tr>
                    <td><?=$i?></td>
                    <td>
                        <?php
                       if($fet_use['user_level']== "admin") {
                           ?>
                        <div class="badge badge-primary w-100 ">เจ้าหน้าที่</div>
                        <?php
                       }
                       if($fet_use['user_level']== "manager") {
                           ?>
                        <div class="badge badge-info w-100">ผู้บริหาร</div>
                        <?php
                       }
                       if($fet_use['user_level']== "people") {
                           ?>
                        <div class="badge badge-warning w-100">ผู้ใช้ทั่วไป</div>
                        <?php
                       }
                       if($fet_use['user_level']== "super@min") {
                           ?>
                        <div class="badge badge-success w-100">ผู้ดูแลระบบ</div>
                        <?php
                       }
                        ?>
                    </td>
                    <td><?=$fet_use['title_name']." ".$fet_use['first_name']." ".$fet_use['last_name']?></td>
                    <td><?=$fet_use['username']?></td>
                    <td><?=md5($fet_use['password'])?></td>
                    <td><?=$fet_use['email']?></td>
                    <td><?=$fet_use['phone_number']?></td>
                    <td>
                       <?php
                       if($fet_use['user_level']== "super@min"){
                           ?>
                        <div class="btn btn-danger" style="cursor:no-drop;">กำหนดสิทธิ์การใช้งานใหม่</div>
                        <?php
                       }else{
                       ?>
                        <a href="super_admin.php?p=2&edit&id=<?=$fet_use['id']?>"
                            class="btn btn-warning">กำหนดสิทธิ์การใช้งานใหม่</a>
                        <?php
                       }
                       ?>
                    </td>
                </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>