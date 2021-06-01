<div class="alert alert-info">
    <div class="d-flex align-items-center"><h3>ค้นหา ปี/เดือน/วัน ที่ต้องการแสดงยอดรายรับ</h3><text class="ml-3 text-danger font-weight-bold">*</text><text class="ml-1">ตัวอย่างเช่น 2010-10-10</text></div>
    <input id="ip_search" class="form-control" type="text" name="date_search" placeholder="กรอกข้อมูลเพื่อค้นหา" style="height: 3rem;">
</div>
<?php
$select_income = new DB_conn();
$sql = $select_income->runQuery("SELECT sum(raca_total) from make_list_booking where datestart");
$fetch_total = mysqli_fetch_assoc($sql);
?>
<div class="alert bg-info p-5" id="div_res" hidden="true">
    <h1 class="text-center font-weight-bold text-light">ผลลัพธ์การค้นหาข้อมูลรายได้</h1>
    <h2 class="text-center font-weight-bold text-warning" id="result_search"></h2>
</div>

<div class="alert bg-success p-5">
    <h3 class="text-center font-weight-bold text-light">ยอดรวมรายได้ทั้งหมด</h3>
    <h4 class="text-center font-weight-bold text-light">~ <?php echo number_format($fetch_total['sum(raca_total)']);?> บาท</h4>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(()=>{
        $("#ip_search").keyup(()=>{
            var ip_search = $("#ip_search").val()
            if($("#ip_search").val() == ""){
                //when this inp empty
                
                    $("#div_res").attr('hidden', true)
                
            }else{

                $.ajax({
                    method: "POST",
                    url: "api_search_income.php",
                    data:{
                        submit:"ok",
                        ip_search:ip_search
                    },
                    dataType: 'json',
                    success:(data)=>{
                        
                        $("#div_res").attr('hidden', false)
                        $("#div_res").addClass('animate__animated animate__bounceInDown animate__fast')
                        $("#result_search").text(data.result) 
    
                    }
                })
            }
        })
    })
</script>
