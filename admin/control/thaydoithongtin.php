<?php
include "../module/connectDatabase.php";
$getconect = new connectDatabase();
$conn =  $getconect->connect();
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from user where id = 0"));
$email = $data['email'];
$ten = $data['name'];
$diachi = $data['address'];
if(isset($_POST['cgemail'])){
    $email=$_POST['cgemail'];
    $ten = $_POST['ten'];
    $diachi = $_POST['diachi'];

            mysqli_query($conn,"UPDATE user set email = '$email', name = '$ten', address='$diachi'  where id = 0");
            echo '<script>alert("Thông tin admin đã được thay đổi thành công")</script>';
}
?>
<div style="background: #0056b3; height: 33px; color: #f2f2f2; font-size: 18px; padding-left: 10px; line-height: 33px; ">
    <i class="fas fa-key"></i>
    Thay đổi thông tin admin
</div>
<div style="background: #fff; padding: 20px; margin: auto; width: 350px; margin-top: 60px; border-radius: 3px; box-shadow: 0px 0px 3px 3px #95999c; ">
    <div style="text-align: center;">  <H4>Thay đổi thông tin admin</H4></div>
    <form method="post" action="#">
        <input style="display: none" type="text" value="dangnhap" name="see">
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" value="<?php echo $ten?>" class="form-control"  id="password" required="" name="ten">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text"  value="<?php echo $email?>" class="form-control"  id="acc" required="" name="cgemail">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" value="<?php echo $diachi?>"  id="password" required="" name="diachi">
        </div>
        <div style="text-align: center"><button style="margin-top: 10px;" class="btn btn-primary">Thay đổi</button></div>
    </form>
</div>
