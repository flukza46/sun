<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><!--jquery-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
    require_once('../function.php');
    $condb = new DB_conn();
    $reg = new DB_conn();
   


    if(isset($_POST['submit'])){

    

        // $path = "../image/upload/"; //! ที่อยู่ไฟล์
        // $tmp = explode('.', $_FILES['profile_img']['name']); //!แยกชื่อกับนามสกุลไฟล์
        // $countTmp = count($tmp);
        // $countTmp--;
        // $randomnum = rand(1,2000);
        // $newnamef = round(microtime(true)).$randomnum.".".$tmp[$countTmp]; //! เชื่อมชื่อใหม่กับนามสกุล

        // $moved = move_uploaded_file($_FILES['profile_img']['tmp_name'], $path.$newnamef);

        // if($moved){

            $username = $_POST['username'];
            $password = $_POST['password'];
            $title_name = $_POST['title_name'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $user_level = $_POST['x'];
            // $profile_img = "-";


            $inserted = $reg->register_form($username, $password, $title_name, $first_name, $last_name, $email, $phone_number, $user_level);

            if($inserted){

                ?>

                <script>
                    $(document).ready(function(){
                        
                            Swal.fire({
                            icon: 'success',
                            title: 'สมัครสมาชิกเรียบร้อยแล้ว',
                            showConfirmButton: false,
                            timer: 3500
                            }).then(function(){ 
                                window.location.href = 'super_admin.php?p=2';
                            });
                        
                    });


                </script>

         <?php
            
            }



        // }

     
    }
?>

