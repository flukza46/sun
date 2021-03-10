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

            $equip = foreach($equip_foreach as $key => $value){
                echo $value, ;
            }
            $cabamlung = foreach($cabamlung_foreach as $key => $value){
                echo $value, ;
            }

            echo " $equip";
            echo " $cabamlung";





        }else{
            echo"ไม่มา";
        }



?>
<!-- go -->