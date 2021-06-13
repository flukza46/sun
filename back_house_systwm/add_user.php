<div class="card">
    <div class="card-header text-center bg-success">
        <h3 class="mb-2 text-white"><b><i class="fas fa-user-plus "></i> เพิ่มผู้ใช้งานใหม่</b></h3>
    </div>

    <div class="card-body ">
        <div class="d-flex justify-content-center">
            <div style="width:50%" class="">
                <form action="check_reg.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-lg-6">
                            <label for="username" class="mt-2"> <b>Username</b></label>
                            <input id="user" style="width:100%;" type="text"
                                class="form-control border border-secondary" name="username" required>
                            <span id="userChk" class="s"></span>
                        </div>



                        <div class="col-lg-6">
                            <label for="password" class="mt-2"> <b>Password</b></label>
                            <input style="width:100%;" type="text" class="form-control border border-secondary"
                                name="password" required>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="mt-3 "><b>คำนำหน้าชื่อ</b></label>
                        <select style="width:100px;" class="form-control border border-secondary"
                            id="exampleFormControlSelect1" name="title_name" required>
                            <option>นาย</option>
                            <option>นาง</option>
                            <option>นางสาว</option>

                        </select>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-5">
                            <label for="first_name" class="mt-2"> <b>ชื่อจริง</b></label>
                            <input style="width:100%;" type="text" class="form-control border border-secondary"
                                name="first_name" required>
                        </div>

                        <div class="col-lg-5">
                            <label for="last_name" class="mt-2"> <b>นามสกุล</b></label>
                            <input style="width:100%; " type="text" class="form-control border border-secondary"
                                name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-5">
                            <label for="email" class="mt-2"><b>E-mail</b></label>
                            <input style="width:150%;" type="email" class="form-control border border-secondary"
                                name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="phone_number" class="mt-2"> <b>เบอร์โทร</b> </label>
                            <input style="width:200px;" type="text" class="form-control border border-secondary"
                                name="phone_number" required maxlength="10">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="phone_number" class="mt-2"> <b>สิทธิ์ในการเข้าใช้งาน</b> </label>
                            <select class="form-control border border-dark" name="x" id="">
                                <option value="admin">เจ้าหน้าที่</option>
                                <option value="manager">ผู้บริหาร</option>
                            </select>

                        </div>
                    </div>

                    <!-- <div class="form-row">
                                <div class="col">
                                    <label for="profile_img" class="mt-2"> <b>รูปภาพ</b> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="profile_img"
                                            required>
                                        <label class="custom-file-label w-100 border border-secondary "
                                            for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div> -->

                    <div class="form-row mt-4 mb-4">
                        <div class="col d-flex justify-content-end">
                            <input id="btnCancel" type="reset" class="btn btn-warning mr-2 text-light" name="reset"
                                value="ยกเลิก">
                            <input id="btnReg" type="submit" class="btn btn-success" name="submit" value="สมัครสมาชิก">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<!--jquery-->
<script src="../sweetalert/sweetalert2.all.min.js"></script>

<script>
$(document).ready(function() {
    $("#btnCancel").click(function() {
        $("#userChk").text("");
        $("#userChk").removeClass("font-weight-bold text-success");
        $("#user").removeClass("border-success");
        $("#userChk").removeClass("font-weight-bold text-danger");
        $("#user").removeClass("border-danger");

    });


    $("#user").on('blur', function() {
        var user1 = $(this).val();
        if ($(this).val() != "") {
            $.ajax({
                method: 'post',
                url: 'check_userReg.php',
                dataType: "json",
                data: {
                    chkUser1: user1,
                    statusDATA: "ok"
                },
                success: function(data) {
                    console.log(data)
                    // alert(data);
                    if (data.result > 0) {
                        $("#userChk").text("");
                        $("#userChk").removeClass("font-weight-bold text-success");
                        $("#user").removeClass("border-success");

                        $("#userChk").text("*มีชื่อผู้ใช้งานนี้แล้ว โปรดใช้ชื่ออื่น");
                        $("#userChk").addClass("font-weight-bold text-danger");
                        $("#user").addClass("border-danger");
                        $("#btnReg").attr('disabled', true);
                        $("#btnReg").attr('style', 'cursor: no-drop');
                    } else {
                        $("#userChk").text("");
                        $("#userChk").removeClass("font-weight-bold text-danger");
                        $("#user").removeClass("border-danger");

                        $("#userChk").text("ใช้ Username นี้ได้");
                        $("#userChk").addClass("font-weight-bold text-success");
                        $("#user").addClass("border-success");
                        $("#btnReg").attr('disabled', false);
                        $("#btnReg").attr('style', 'cursor: pointer');

                    }
                }
            });
        } else {
            $("#userChk").text("");
            $("#userChk").removeClass("font-weight-bold text-success");
            $("#user").removeClass("border-success");
            $("#userChk").removeClass("font-weight-bold text-danger");
            $("#user").removeClass("border-danger");
        }






    })
});
</script>