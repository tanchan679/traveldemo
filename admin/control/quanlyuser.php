<?php
    $getid = $_GET['id'];
    include "../module/ConnectDatabase.php";
    $getconect =  new connectDatabase();
    $conn = $getconect->connect();
    $sql = "SELECT * FROM USER where id= $getid";
    $t = mysqli_query($conn, $sql);
    $getdata = mysqli_fetch_assoc(mysqli_query($conn, $sql));

if(isset($_POST['name'])){
    $email = $_POST['emaill'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $pass =  $_POST['pass'];
    include "../include/classnumber.php";
    $classnumber = new classnumber;
    $hl = true;
    if(strlen(strstr($email,"@")) <= 0 || strlen(strstr($email,".")) <= 0){
        echo '<script>alert("Email không hợp lệ...")</script>';
        $hl = false;

    }
    if(!$classnumber->itemstringisnumber($phonenumber)){
        echo '<script>alert("Số điện thoại không hợp lệ...")</script>';
        $hl = false;
    }
    if($hl==true){
       $sql = " UPDATE user SET email='$email', password = '$pass', name='$name', phonenumber='$phonenumber', address='$address' where id = $getid";
        echo $sql;
         mysqli_query($conn, $sql);
        echo '<script>alert("Thông tin đã được thay đổi đã được thay đổi...")</script>';

    }
  echo '<script>window.location="./?select=UserManagement";</script>';
}



?>

<div class="title-content" style="color: #eee;">
    <i style="margin-right: 5px" class="fas fa-plus-square"></i>
        Chỉnh sửa thông tin User
</div>


<div class="content">

    <div style="background: #fff; padding: 20px; margin: auto; width: 450px; margin-top: 60px; border-radius: 3px; box-shadow: 0px 0px 3px 3px #95999c; ">
        <div style="text-align: center;">  <H4>Thay đổi tài khoản User</H4></div>
    <form  method="post" action="#" style="margin-top: 30px; margin-bottom: 30px; ">

        <div class="form-group">
            <label id="tieudeten" style="color: #123;">Tên</label>
            <input type="text" class="form-control"   id="name" value="<?php echo $getdata['name'] ?>" required="" placeholder="Tan Cu Chan" name="name">
        </div>
        <div class="form-group">
            <label for="" style="color: #123;">Email</label>
            <input type="text" class="form-control" id="email" value="<?php echo $getdata['email'] ?>" required="" placeholder="nguyenvana@gmail.com" name="emaill">
        </div>
        <div class="form-group">
            <label for="" style="color: #123;">Mật khẩu</label>
            <input type="text" class="form-control" id="email" value="<?php echo $getdata['password'] ?>" required="" placeholder="nguyenvana@gmail.com" name="pass">
        </div>
        <div id="emaill" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Thay đôi thông tin User</div>

        <div id="passerror" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Password incorrect</div>
        <div class="form-group">
            <label for="" style="color: #123;">Số điện thoại</label>
            <input type="text" class="form-control" id="phonenumber"  value="<?php echo $getdata['phonenumber'] ?>" required="" placeholder="0347194217" name="phonenumber">
        </div>
        <div id="sdt" style="display:none;background: #f5c6cb;padding: 3px;border-left: #e00 solid 5px;">Invalid phone number</div>
        <div class="form-group">
            <label for="" style="color: #123;">Địa chỉ</label>
            <input type="text" class="form-control" id="address"  value="<?php echo $getdata['address'] ?>"  required=""  placeholder="xom Son Tien - xa Quet Thang - tp.Thai Nguyen" name="address">
        </div>
        <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-primary">Change Information</button></div>
    </form>

    </div>
</div>

</div>
<br><br>

