<?php
 if(isset($_POST['oldpassword'])){
    $oldpass = $_POST['oldpassword'];
    $pass1 =  $_POST['new1password'];
    $pass2 =  $_POST['new2password'];
    if($pass1!=$pass2){
          // echo '<script>alert("Mật khẩu không khớp...")</script>';
           echo '<script>document.getElementById("status_changepassword").innerHTML = "Change password failed";</script>';
    }elseif(strlen($pass2) < 5){
          // echo '<script>alert("Mật khẩu phải lớn hơn 5 ký t..")</script>';
           echo '<script>document.getElementById("status_changepassword").innerHTML = "Change password failed";</script>';
       
    } else {
        include "./module/Account.php";
        $accout = new Account();
        $emal = $_SESSION['email'];
        $access = $accout->ChangePassword($emal, $oldpass, $pass1);
        if($access==true){
               //echo '<script>alert("Mật khẩu đã được thay đổi...")</script>';
               echo '<script>document.getElementById("status_changepassword").innerHTML = "Change password success";</script>';
        }
        else{
              // echo '<script>alert("Thay đổi mật khẩu thất bại...")</script>';
               echo '<script>document.getElementById("status_changepassword").innerHTML = "Change password failed";</script>';
        } 
    }
    // echo '<script>
    // setInterval(function(){ window.location="./account.php";}, 5000);
    // </script>';
    //echo '<script>window.location="./account.php";</script>'; 
}
