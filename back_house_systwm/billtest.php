<?php 
        
        if(isset($_POST['submit']) == "submit"){
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $p_number = $_POST['p_number'];
            $t_address = $_POST['t_address'];
            $sl_sala = $_POST['sl_sala'];
            $date_start = $_POST['date_start'];


            $equip_foreach = $_POST['equip'];
            $cabamlung_foreach = $_POST['cabamlung'];

            foreach($equip_foreach as $chk1){
                $chk_equip = $chk1;
            }
             foreach($cabamlung_foreach as $chk2){
                $chk_cabamlung = $chk2;
            }

            echo "$chk_equip";
            echo "$chk_cabamlung";





        }else{
            echo"ไม่มา";
        }



?>
<!-- go -->