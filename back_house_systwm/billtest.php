<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php 
         require_once('../function.php');
         $insertListBook = new DB_conn();
        
        if(isset($_POST['submit']) == "submit"){
            
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $p_number = $_POST['p_number'];
            $t_address = $_POST['t_address'];
            $sala = $_POST['sala'];
            $id_sala = $_POST['id_sala'];
            $raca_sala = $_POST['raca_sala'];
            $date_start = $_POST['date_start'];
            $date_stop = $_POST['date_stop'];
            $equip = $_POST['equip'];
            $all_equip = implode(", ", $_POST['equip']); // แปลง $equip
            $raca_equip = $_POST['raca_equip'];
            $all_jumnul_eq = implode(", ", $_POST['jumnul_eq']);

            $cabamlung = $_POST['cabamlung'];
            $all_cabamlung = implode(", ", $_POST['cabamlung']); // แปลง $cabamlung
            $raca_cabamlung = $_POST['raca_cabamlung'];
            $raca_total = $_POST['raca_total'];
            //    echo $f_name." ".$l_name." ".$p_number." ".$t_address." ".$sala." ".$raca_sala." ".$date_start." ".$date_stop." ".$all_equip." ".$raca_equip." ".$all_cabamlung." ".$raca_cabamlung." ".$raca_total;

            $sql = $insertListBook->inst_list_booking($f_name,  $l_name, $p_number, $t_address, $sala, $id_sala, $raca_sala, $date_start, $date_stop, $all_equip, $all_jumnul_eq, $raca_equip, $all_cabamlung, $raca_cabamlung, $raca_total);
            $sql_update_sala = $insertListBook->sql_update_sala($id_sala, $date_start, $date_stop);

            if( $sql && $sql_update_sala){
                ?>
                                            <script>
                                                $(document).ready(function(){

                                                            Swal.fire({
                                                            icon: 'success',
                                                            title: 'บันทึกข้อมูลเรียบร้อย',
                                                            showConfirmButton: false,
                                                            timer: 1500
                                                            }).then(function(){
                                                                window.location.href ='manager.php?p=5';
                                                            })
                                                });

                                            </script>
           <?php    
            }else{
                echo"SQL >> Not Ok";

            }


        }else{

            echo"ไม่มา";
        }



?>
<!-- go -->

                  