<!--รายการเช่าทั้งหมดเจ้าหน้าที่-->
<div class= "container mb-2">
 
<div class= "container"> 
 <div class="card">
    <div class="card-header bg-dark mb-2">
        <h3 class="text-center text-light"><b><i class="fas fa-table"></i> ตารางรายการเช่าทั้งหมด</b></h3>
    </div>
    <div class="card-body">
                <table class="table table-striped w-100" id="myTable">
                <thead class="bg-success">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ผู้จอง</th>
                    <th scope="col">ศาลาที่จอง</th>
                    <th scope="col">ราคาค่าใช้จ่ายทั้งหมด</th>
                    <th scope="col">สถานะใบเสร็จ</th>
                    <th scope="col">ดูข้อมูลทั้งหมด</th>
                    <th scope="col">จัดการข้อมูล</th>
                    
                    </tr>
                </thead>

                <tbody>
                <?php
                            $SLBooking = new DB_conn();

                            $sql = $SLBooking->Slect_booking();
                            $i = 1;
                            while($reS = mysqli_fetch_array($sql)){
                            ?>
                                    <tr>
                                            <td>
                                                <?php echo $i ; ?>
                                            </td>
                                            <td>
                                                <?php echo $reS['first_name']." ".$reS['last_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $reS['select_sala']; ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($reS['raca_total']); ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                                if($reS['status_bill_success'] == "yet"){
                                                                    ?>
                                                                    <button class="btn btn-primary w-500">ออกใบเสร็จ</button>
                                                                <?php
                                                                }
                                                
                                                
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-warning w-50">ดู</button>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-danger w-50">ยกเลิกจอง</button>
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
                },
                "scrollX": true


            });
        } );

</script>