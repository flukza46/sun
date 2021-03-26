<?php
include_once('../func_ajax.php');
$SL4view_receipt = new DB_conn();
$id_MLB =  $_POST['view_receipt'];

                    $sql = $SL4view_receipt->SL4View_Receipt($id_MLB);
                    
                    if($sql){
                        
                        if($result = mysqli_fetch_array($sql)){
                            $dateStr = $result['datestart'];
                            $dateSto = $result['datestop'];
                            $nowTime1 = date("Y-m-d H:i:s");

                            if($nowTime1 > $dateSto){
                                echo"หมดเวลา";
                            }else{
                                echo"ยัง";

                            }
                            
                        }
                    }else{
                        echo"Can't SQL";
                    }    
?>