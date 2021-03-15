<?php 
        
        if(isset($_POST['submit']) == "submit"){
           
           $f_name = $_POST['f_name'];
           $l_name = $_POST['l_name'];
           $p_number = $_POST['p_number'];
           $t_address = $_POST['t_address'];
           $sala = $_POST['sala'];
           $raca_sala = $_POST['raca_sala'];
           $date_start = $_POST['date_start'];
           $date_stop = $_POST['date_stop'];
           $equip = $_POST['equip'];
           $all_equip = implode(", ", $_POST['equip']); // แปลง $equip
           $raca_equip = $_POST['raca_equip'];
           $cabamlung = $_POST['cabamlung'];
           $all_cabamlung = implode(", ", $_POST['cabamlung']); // แปลง $cabamlung
           $raca_cabamlung = $_POST['raca_cabamlung'];
           $raca_total = $_POST['raca_total'];
           




           echo $f_name." ".$l_name." ".$p_number." ".$t_address." ".$sala." ".$raca_sala." ".$date_start." ".$date_stop." ".$all_equip." ".$raca_equip." ".$all_cabamlung." ".$raca_cabamlung." ".$raca_total;
           

        
            

            




        }else{

            echo"ไม่มา";
        }



?>
<!-- go -->