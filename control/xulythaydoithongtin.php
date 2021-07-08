<?php

class xulythaydoithongtin
{
    function __construct()
    {
        if (isset($_POST['name'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            include "include/classnumber.php";
            $classnumber = new classnumber;
            $hl = true;
            if (strlen(strstr($email, "@")) <= 0 || strlen(strstr($email, ".")) <= 0) {
                //echo '<script>alert("Email không hợp lệ...")</script>';
                echo '<script>document.getElementById("status_changeinfor").innerHTML = "Change information failed";</script>';
                $hl = false;
            }
            if (!$classnumber->itemstringisnumber($phonenumber)) {
                //echo '<script>alert("Số điện thoại không hợp lệ...")</script>';
                echo '<script>document.getElementById("status_changeinfor").innerHTML = "Change information failed";</script>';
                $hl = false;
            }
            if ($hl == true) {
                include "./module/Account.php";
                $accout = new Account();
                $emal = $_SESSION['email'];
                $access = $accout->ChangeInformation($emal, $name, $email, $phonenumber, $address);
                if ($access == true) {
                    //echo '<script>alert("Thông tin đã được thay đổi đã được thay đổi...")</script>';
                    echo '<script>document.getElementById("status_changeinfor").innerHTML = "Change information success";</script>';
                } else {
                    echo '<script>document.getElementById("status_changeinfor").innerHTML = "Change information failed";</script>';
                   //echo '<script>alert("Thay đổi thông tin thất bại...")</script>';
                }
            }
            //echo '<script>window.location="./account.php";</script>';
        }
    }
}
$render = new xulythaydoithongtin();
