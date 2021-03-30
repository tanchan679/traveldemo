<?php
include "../module/connectDatabase.php";
$getconect = new connectDatabase();
$getconect = $getconect->connect();
$getid = $_GET['id'];
$sql = "SELECT * FROM travelviewing WHERE id = $getid";
$getData = mysqli_fetch_assoc(mysqli_query($getconect, $sql));

if(isset($_POST['title'])){
    $name = $_POST['title'];
    $post=$_POST['post'];
    $code =  $_POST['code'];
    $date=  $_POST['Dday'];
    $time =  $_POST['time'];
    $startingplace =  $_POST['startingplace'];
    $ToLocation =  $_POST['ToLocation'];
    $Numberofseats =  $_POST['Numberofseats'];

    if($_FILES['imgInp']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp']['tmp_name'];
            $pathav = "../upload/image/".$_FILES['imgInp']['name'];
            move_uploaded_file($file, $pathav);
            $pathav = substr($pathav, 1);
            $sql = "UPDATE travelviewing SET iva1='$pathav' where  id=$getid";
            mysqli_query($getconect, $sql);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    if($_FILES['imgInp2']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp2']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp2']['tmp_name'];
            $pathav2 = "../upload/image/".$_FILES['imgInp2']['name'];
            move_uploaded_file($file, $pathav2);
            $pathav2 = substr($pathav2, 1);
            $sql = "UPDATE travelviewing SET iva2='$pathav2' where  id=$getid";
            mysqli_query($getconect, $sql);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }
    if($_FILES['imgInp3']['error'] == 0)
    {
        //lay phan mo rong cua file
        $imageFileType = pathinfo($_FILES['imgInp3']['name'],PATHINFO_EXTENSION);
        //cac kieu file hop le
        $allowtypes = array('jpg', 'png');
        if (in_array($imageFileType,$allowtypes ))
        {
            $file = $_FILES['imgInp3']['tmp_name'];
            $pathav3= "../upload/image/".$_FILES['imgInp3']['name'];
            move_uploaded_file($file, $pathav3);
            $pathav3 = substr($pathav3, 1);
            $sql = "UPDATE travelviewing SET iva3='$pathav3' where  id=$getid ";
            mysqli_query($getconect, $sql);
        }else{
            echo '<script>alert("Tất cả ảnh phải có định dạng JPG, PNG")</script>';
        }
    }

    $sql = "UPDATE travelviewing  SET title = '$name', content = '$post',code= '$code', Dday = '$date',time = $time,startingplace = '$startingplace',ToLocation = '$ToLocation',Numberofseats = $Numberofseats where  id=$getid";
    mysqli_query($getconect, $sql);
    echo '<script>alert("Chỉnh sửa hoàn thành")</script>';
   echo '<script>window.location="./?select=travelviewingMana";</script>';
}
?>
<div class="title-content" style="color: #eee;">
    <i style="margin-right: 5px" class="fas fa-plus-square"></i>
    Chỉnh sửa địa điểm du lịch mới
</div>
<div class="content">
    <div class="row">
        <div class = "col-5">
            <form method="POST"  enctype="multipart/form-data">
                <table style="width:100%">
                    <tr>
                        <td>
                            <i class="fas fa-plus-square"></i>
                            <span style="font-weight: 600;">Nội dung bài viết</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="post" id="cmt"><?php echo $getData['content']?></textarea>
                            <script> CKEDITOR.replace('cmt');</script>
                        </td>
                    </tr>
                </table>
        </div>
        <div class = "col-7">
            <table style="width:100%">
                <tr>
                    <td>
                        <i class='fas fa-plus-square'></i>
                        <span style="font-weight: 600;">Các thành phần</span>
                    </td>
                </tr>
                <tr>
                    <td style="background: #f2f2f2;">
                        <table style="border: none; width: 100%">
                            <tr style="border: none; width: 100%; ">
                                <td style="border: none; width: 50%; padding: 15px;">
                                    <label style="color: #000; font-weight: 500;" for="">Tiêu đề bài viết</label>
                                    <input type="text" value="<?php echo $getData['title']?>" style=" width: 70%" class="form-control"  id="password" required="" placeholder="enter post title" name="title">
                                    <br>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ảnh Carousel 1</label><br>
                                        <img id="blah" src="" alt="Ảnh đại diện" style="height: 140px; width: 200px;" /><br><br>
                                        <input type='file' style="font-size: 12px;" name="imgInp" id="imgInp" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ảnh Carousel 2</label><br>
                                        <img id="blah2" src="" alt="Ảnh đại diện" style="height: 140px; width: 200px;" /><br><br>
                                        <input type='file' style="font-size: 12px;" name="imgInp2" id="imgInp2" />
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ảnh Carousel 3</label><br>
                                        <img id="blah3" src="" alt="Ảnh đại diện" style="height: 140px; width: 200px;" /><br><br>
                                        <input type='file' style="font-size: 12px;" name="imgInp3" id="imgInp3" />
                                    </div>
                                </td>
                                <td style="border: none; width: 50%; padding: 15px;">

                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;"  for="">Mã du lịch</label><br>
                                        <input  type="text" value="<?php echo $getData['code']?>" placeholder="DTFHFDS-76HG" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Ngày khởi hành</label><br>
                                        <input type="date" value="<?php echo $getData['Dday']?>" name="Dday">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Thời gian</label><br>
                                        <input type="number" value="<?php echo $getData['time']?>" name="time">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Địa điểm xuất phát</label><br>
                                        <input type="text" value="<?php echo $getData['startingplace']?>" placeholder="Ha noi" name="startingplace">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Địa điểm đến</label><br>
                                        <input type="text" value="<?php echo $getData['ToLocation']?>" placeholder="Ho Chi Minh" name="ToLocation">
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000; font-weight: 500;" for="">Số lượng hành khách tối đa</label><br>
                                        <input type="number"  value="<?php echo $getData['Numberofseats']?>" name="Numberofseats">
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <br><br>
                        <div style="width:100%; text-align:center" >
                            <button class="btn btn-danger">Chỉnh sửa</button></div> <br>
                    </td>
                </tr>

            </table>
            </form>
        </div>
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });


    $("#imgInp2").change(function(){
        readURL2(this);
    });
    $("#imgInp3").change(function(){
        readURL3(this);
    });

</script>

