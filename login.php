<?php session_start(); ?>
<?php if(isset($_SESSION['email'])) {
        echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
        echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 3000);
    </script>';
        die();
    } ?>
<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login user account </title>
    <link rel="icon" href="./upload/logodulichht.png">
    <link rel="stylesheet" href="./include/fontawesome/css/all.css">
    <link rel="stylesheet" href="./include/style/bootstrap.css">
    <link rel="stylesheet" href="include/mystyle45646.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">


</head>

<body style="  background-image: url('upload/hinh-anh-du-lich-ha-long.jpg'); ">
<?php if(isset($_SESSION['email'])) {
        echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
        echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 3000);
    </script>';
        die();
    } ?>
    <?php include "./view/header.html" ?>
    <br><br>
    <div style="width: 100%; margin-bottom: 30px; margin-top: 30px; ">
        <form class="from-dangky" method="post" action="#">
            <div style="text-align: center">
                <H3 style="color: #f2f2f2;">User login</H3>
            </div>
            <div class="form-group">
                <label style="color: #f2f2f2;" for="">Email</label>
                <input type="text" class="form-control" id="id_email" required="" placeholder="nguyenvana@gmail.com" name="email">
            </div>
            <div class="form-group">
                <label style="color: #f2f2f2;" for="">password</label>
                <input type="password" class="form-control" id="id_password" required="" placeholder="Enter your password" name="password">
            </div>
            <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-secondary" id="id_btlogin">Login</button></div>
            <div style="text-align: right"><a href="./registration.php" style="" class="btn-linklogin">Registration</a></div>
            <div style="color: red;" id="status_login" class="iflogin"></div>
        </form>
    </div>

    <br><br><br><br>
    <?php
    include "./view/footer.php"
    ?>
    <?php

    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $pass =  trim($_POST['password']); //méo regex nữa haha
        include "./module/Account.php";
        $acccout = new Account(); //Sign in failed, account and password is  wrong.....
        $access = $acccout->login($email, $pass);
        if ($access === 0)  echo '<script>document.getElementById("status_login").innerHTML = "Sign in failed, account and password is  wrong.....";</script>';
        else {
            echo '<script>document.getElementById("status_login").innerHTML = "Signin success";</script>';
            $_SESSION['email'] = $access;
            echo '<script>
            setInterval(function(){ window.location="./";}, 2000);
            </script>';
        }
    }
    ?>
</body>
<script>
    function resetStatus() {
        document.getElementById("status_login").innerHTML = "";
    }
</script>

</html>