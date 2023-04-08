<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('css.php') ?>
    <title>SkinLeLe</title>
</head>

<body>
    <?php
    include 'header.php'
    ?>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6">
            <?php if (isset($_SESSION['status'])) { ?>
                <div style="width: 80%;background-color: #d4edda;color:#447342;margin-bottom: 20px;height: 40px;" >
                    <strong>
                            <?php
                             echo $_SESSION['status'];
                             unset($_SESSION['status']);
                            ?>
                    </strong>
                </div>
         <?php   } ?>
                <h2 style="font-size: 20px;font-family: 'Montserrat', sans-serif;margin-bottom: 20px;font-weight: bold;text-align: center;width: 80%;">ĐĂNG NHẬP</h2>
                <form class="form" method="POST" action="./includes/process_login.php">
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Montserrat', sans-serif;margin-bottom: 20px;">Email:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px" type="email" class="form-control" name="email" placeholder="Nhập email...">
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px;font-family: 'Montserrat', sans-serif;margin-bottom: 20px;">Mật khẩu:</label>
                        <input style="height: 40px;width: 80%;font-size: 14px" type="password" class="form-control" name="password" placeholder="Nhập mật khẩu...">
                    </div>
                    <div style="display: flex;margin-top: 20px;" class="form-group">
                        <input style="width: 30px;height: 25px;" name="remember" type="checkbox">
                        <div style="margin-left:7px ;">Ghi nhớ đăng nhập</div>
                    </div>
                    <br>
                    <div class="form-group">

                        <input name='login' style="width: 80%;
                            background-color: #820813;
                            height: 45px;
                            color: white;
                            border-radius: 5px;" type="submit" value="Đăng Nhập">
                    </div>
                </form>
                <div style="width: 80%;height: 150px;background-color: #f5f6f9;">
                    <div style="text-align: center;font-weight: bold;padding-top: 20px;margin-bottom: 10px;">TẠO TÀI KHOẢN NGAY</div>
                    <button style="height: 50px;width: 95%;margin: auto;border: 1px solid;border-radius: 5px;"><a href="register.php">Đăng Ký</a></button>
                </div>
            </div>
            <div class="col-sm-6"><img src="https://product.hstatic.net/1000006063/product/merzy_e_2800af15bd99458ca7d9b52d543266a0_1024x1024.jpg" alt="" width="100%"></div>
        </div>
    </div>
    <?php include('footer.php') ?>
    <?php
    include 'js.php'
    ?>
</body>

</html>