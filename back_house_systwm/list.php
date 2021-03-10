<!--รายการเช่าทั้งหมดเจ้าหน้าที่-->
5

<div class= "container mb-2">
 
<div class= "container"> 
 <div class="card">
    <div class="card-header bg-dark mb-2">
        <h3 class="text-center text-light"><b><i class="fas fa-table"></i> ตารางรายการเช่าทั้งหมด</b></h3>
    </div>
    <div class="card-body">
                    <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ผู้จอง</th>
                    <th scope="col">ศาลาฌาปนกิจศพ</th>
                    <th scope="col">อุปกรณ์ประกอบพิธีกรรม</th>
                    <th scope="col">อัตราค่าบำรุง</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">เพิ่มข้อมูล-ลบ</th>
                    <th scope="col">ใบเสร็จ</th>
                    
                    </tr>
                </thead>
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