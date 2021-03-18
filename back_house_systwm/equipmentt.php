<!--จองvอุปกรณ์-->
<?php
    $slN = new DB_conn();
    $del = new DB_conn();

    if(isset($_GET['del_id'])){

        $id = $_GET['del_id'];

        $del->delnews3($id);

       
    }
    //ปีกการับ isset GET det 

?>

<div class= "container-fluid mb-2">
 <div class="d-flex justify-content-end"><a href="manager.php?p=m2_add" class = "btn btn-primary">เพิ่มอุปกรณ์ <i class="fas fa-plus-circle"></i></a></div></div>


 <div class="card">
    <div class="card-header bg-dark mb-2">
        <h3 class="text-center text-light"><b><i class="fas fa-table"></i> ตารางจัดการอุปกรณ์ประกอบพิธีกรรม</b></h3>
    </div>
    <div class="card-body">
                    <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">รูปอุปกรณ์</th>
                    <th scope="col">ชื่ออุปกรณ์ประกอบพิธีกรรม</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">แก้ไข - ลบ</th>
                    </tr>
                </thead>
                <tbody>


                <?php
                $n=1;
                $result = $slN->slN_m3(); 
                while($num = mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                    <th scope="row"><?php $num['id']; echo $n;?></th>
                    <td>
                        <div style="width:100px;">
                                    <img src="../image/equipment/<?php echo $num['img2']; ?>" class="card-img" title="รูปภาพข่าว">
                        </div>
                    </td>
                    <td><?php echo $num['equipment_tiype']; ?></td>
                    <td><?php echo $num['price']; ?></td>
                    <td>
                    <a href="manager.php?p=edit_epuipmentt&update_id=<?php echo $num['id']; ?>"  class="btn btn-warning text-light"><i class="fas fa-wrench"></i> แก้ไข</a>
                    <a href="manager.php?p=2&del_id=<?php echo $num['id']; ?>"  class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบ</a>
                    </td>
                    </tr>
                <?php
                $n++;
                }
                
                ?>
                
                </tbody>
                </table>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
        $(document).ready( function () {
            $('#myTable').DataTable({
                "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "aaSorting" :[[0,'desc']],
                    "oPaginate": {
                    "sFirst":    "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext":     "ถัดไป",
                    "sLast":     "หน้าสุดท้าย"
                    },
                }


            });
        } );

</script>