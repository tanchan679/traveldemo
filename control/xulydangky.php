<?php
if (isset($_POST['name'])) {
    $email = trim($_POST['email']);
    $password =  trim($_POST['password']);
    $password2 =  trim($_POST['password2']);
    $name =  trim($_POST['name']);
    $address =  trim($_POST['address']);
    $phonenumber =  trim($_POST['phonenumber']);
    include "include/classnumber.php";
    $classnumber = new classnumber;
    $hl = true;
    if (strlen(strstr($email, "@")) <= 0 || strlen(strstr($email, ".")) <= 0) {
        echo '<script>document.getElementById("emaill").style.display = "block"</script>';
        echo '<script>document.getElementById("status_register").innerHTML = "Register failed";</script>';
        $hl = false;
    }
    if (!$classnumber->itemstringisnumber($phonenumber)) {
        echo '<script>document.getElementById("sdt").style.display = "block"</script>';
        echo '<script>document.getElementById("status_register").innerHTML = "Register failed";</script>';
        $hl = false;
    }
    if ($password != $password2) {
        echo '<script>document.getElementById("passerror").style.display = "block"</script>';
        echo '<script>document.getElementById("status_register").innerHTML = "Register failed";</script>';
        $hl = false;
    } elseif (strlen($password) < 5) {
        echo '<script>document.getElementById("passerror").style.display = "block";
        document.getElementById("passerror").textContent = "Mật khẩu phải có trên 5 ký tự";
        </script>';
        echo '<script>document.getElementById("status_register").innerHTML = "Register failed";</script>';
        $hl = false;
    }
    if ($hl == true) {
        include "./module/Account.php";
        $accout = new Account();
        $access = $accout->Registration($email, $password, $name, $phonenumber, $address);
        if ($access === true) 
       
            $_SESSION['email'] = $email;
           // echo '<script>alert("Account has been registered...")</script>';
           echo '<script>document.getElementById("status_register").innerHTML = "Register success";</script>';
            echo'<script>
            var timer = setTimeout(function() {
                window.location="./"
            }, 3000);
        </script>//';
        } else {
            echo '<script>document.getElementById("status_register").innerHTML = "Register failed";</script>';
            //echo '<script>alert("registration failed...")</script>';
        }
   }