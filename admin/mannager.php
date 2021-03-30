<div class="Container">
    <div class="box-menu">
        <div class="administrator-logo">
            <img style="width: 27px;  float: left; height: 100%;" src="../upload/image/iconadmin.jpg">
            <a href="./"><p style="color: #FF7610; float: left">Administrators</p></a>
        </div>

       <!--
         <form method="get" action="#">
            <input name = "select" value="newposts" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-plus-square"></i>
                    Bài viết mới</div>
            </button>
        </form>
       -->

        <form method="get" action="#">
            <input name = "select" value="travelviewing" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fab fa-pied-piper-square"></i>
                    Địa điểm du lịch mới </div>
            </button>
        </form>

       <!--
        <form method="get" action="#">
            <input name = "select" value="postmanagement" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-tasks"></i>
                    Quản lý bài viết</div>
            </button>
        </form>
       -->
        <form method="get" action="#">
            <input name = "select" value="travelviewingMana" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-location-arrow"></i>
                    Quản lý địa điểm du lịch </div>
            </button>
        </form>
        <form method="get" action="#">
            <input name = "select" value="commentManagement" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-comment-medical"></i>
                    Quản lý bình luận</div>
            </button>
        </form>
        <form method="get" action="#">
            <input name = "select" value="UserManagement" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#fff;">
                    <i class="fas fa-user-cog"></i>
                    Quản lý User</div>
            </button>
        </form>
        <button onclick="hienthiweb()"  class="btnkgvien" >
            <div class="line-menu" style="color:#fff;">
                <i class="far fa-user-circle"></i>
                Quản lý tài khoản admin <i  style="color: #DCDCA4" class="fas fa-caret-down"></i></div>
        </button>

        <div id="tuychonweb" style="display: none">
            <div style="margin-left: 18px;">
                <form method="get" action="#">
                    <input name = "select" value="thaydoimatkhau" style="display: none">
                    <button class="btnkgvien">
                        <div class="line-menu-lv2" style="color:#f8f8f8;">
                            <i class="fas fa-edit"></i>
                            Thay đổi mật khẩu<div>
                    </button>
                </form>
                <form method="get" action="#">
                    <input name = "select" value="thaydoisodienthoai" style="display: none">
                    <button class="btnkgvien">
                        <div class="line-menu-lv2" style="color:#f8f8f8;">
                            <i class="fas fa-edit"></i>
                            Thay số điện thoại</div>
                    </button>
                </form>
                <form method="get" action="#">
                    <input name = "select" value="thaydoithongtin" style="display: none">
                    <button class="btnkgvien">
                        <div class="line-menu-lv2" style="color:#f8f8f8;">
                            <i class="fas fa-edit"></i>
                            Thay đổi thông tin</div>
                    </button>
                </form>
            </div>
        </div>


        <form method="post" action="#">
            <input name = "act" value="true" style="display: none">
            <button class="btnkgvien">
                <div class="line-menu" style="color:#ee1111;">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất</div>
            </button>
        </form>

    </div>

    <div class="main-screen" >
        <div class="screen-menu">
            <div style="margin-right: 10px;float: right;"><a  class="link-home" href="../"><i style="padding-right: 5px;" class="fas fa-home">
                    </i>Vào trang web</a> </div>
        </div>
        <div class="screen-slides">
            <?php
            if(isset($_GET['select'])){
                $sl = $_GET['select'];
               // if($sl === 'newposts') include "./control/newposts.php";
                 if($sl === 'travelviewing') include "./control/travelviewing.php";
                else if($sl === 'postmanagement') include "./control/postmanagement.php";
                else if($sl === 'travelviewingMana') include "./control/travelviewingManagement.php";
                else if($sl === 'thaydoimatkhau') include "./control/thaydoimatkhau.php";
                else if($sl === 'thaydoisodienthoai') include "./control/thaydoisodienthoai.php";
                else if($sl === 'thaydoithongtin') include "./control/thaydoithongtin.php";
                else if($sl === 'commentManagement') include "./control/commentManagement.php";
                else if($sl === 'UserManagement') include "./control/UserManagement.php";
                else if($sl === 'edit') include "./control/EditPost.php";
               // else if($sl === 'edittravel') include "./control/EditTravelpost.php";
                else if($sl === 'edituser') include "./control/quanlyuser.php";


            }else{
                echo "<div style='color: #bb0000; width: 100%; height: 100%;'>
                            <div style='text-align: center; padding-top: 20%; font-weight: 500;font-size: 70px;'>
                            TRANG QUẢN TRỊ
                        </div>
                        </div>";
            }
            ?>
        </div>
    </div>
</div>

<script>
    function hienthiweb() {
        var getthe = document.getElementById('tuychonweb');
        if (getthe.style.display=='none') getthe.style.display = 'block';
        else getthe.style.display = 'none';

    }
</script>

