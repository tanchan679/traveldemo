<!DOCTYPE>
<html>
<head>
<script src="include/script/ckeditorbasic/ckeditor.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login user account </title>
        <link rel="icon" href="./upload/logodulichht.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <?php session_start(); ?>
</head>
<body style=" background-image: url('upload/hinh-anh-du-lich-ha-long.jpg');">
    <?php include "./control/xulydangky.php" ?>
    <?php include "./view/header.html" ?>
    <?php include "./view/registrationform.html" ?>
    <?php
        include "./view/footer.php";
    ?>
</body>
</html>
