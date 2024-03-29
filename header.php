<!--
    - #HEADER
  -->
<?php
$sum = $total = 0;
?>
<style>
.product__hover li:hover button {
    background: #ca1515;
}

.product__hover li:hover button span {
    color: #ffffff;
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
}

.product__hover li button {
    font-size: 18px;
    color: #111111;
    display: block;
    height: 45px;
    width: 45px;
    background: #ffffff;
    line-height: 48px;
    text-align: center;
    border-radius: 50%;
    -webkit-transition: all, 0.5s;
    -o-transition: all, 0.5s;
    transition: all, 0.5s;
}

.product__hover li button span {
    position: relative;
    -webkit-transform: rotate(0);
    -ms-transform: rotate(0);
    transform: rotate(0);
    -webkit-transition: all, 0.3s;
    -o-transition: all, 0.3s;
    transition: all, 0.3s;
    display: inline-block;
}

.dropdown {
    background-color: white;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<div class="container-fluid" style="background-color: #f3f3bf;height: 50px;">
    <div>
        <p style="text-align: center;font-size: 18px; padding-top: 10px;font-weight: bold;">Chào Mừng Đến Với SkinLeLe!
        </p>
    </div>
</div>
<header class="header">

    <div class="header-top" data-header>
        <div class="container">

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

            <div class="input-wrapper">
                <form action="search.php" method="GET">
                    <input type="search" name="search" placeholder="Nhập..." class="search-field">
                    <button class="search-submit" aria-label="search">
                        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                    </button>
                </form>
            </div>

            <a href="#" class="logo">
                <img src="img/logoskinlele.PNG" width="120" height="50" alt="Glowing">
            </a>

            <div class="header-actions">

                <!-- <button class="header-action-btn" aria-label="favourite item">
                    <a href="">
                        <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                    </a>
                    <span class="btn-badge">0</span>
                </button> -->

                <button class="header-action-btn" aria-label="cart item">
                    <data class="btn-text" value="0"><?php if (isset($_SESSION['cart'])) foreach (($_SESSION['cart']) as $id =>  $value) {
                                              $sum = $value['price'] * $value['quantity'];
                                              $total += $sum;
                                            }
                                            else {
                                              $total = 0;
                                            } ?>
                        <?php echo number_format($total, 0, '.', ',') . "đ"; ?></data>

                    <a href="shop-cart.php">
                        <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                    </a>
                    <span class="btn-badge"><?php
                                  if (isset($_SESSION['cart'])) {
                                    $cart = $_SESSION['cart'];
                                    $num = count($cart);
                                    echo $num;
                                  } else {
                                    $num = 0;
                                    echo $num;
                                  }
                                  ?></span>
                </button>

            </div>

            <nav class="navbar">
                <ul class="navbar-list">

                    <li>
                        <a href="index.php" class="navbar-link has-after">Trang Chủ</a>
                    </li>

                    <li>
                        <a href="product_chamsocda.php" class="navbar-link has-after">Chăm Sóc Da</a>
                    </li>

                    <li>
                        <a href="product_trangdiem.php" class="navbar-link has-after">Trang Điểm</a>
                    </li>

                    <li>
                        <a href="contact.php" class="navbar-link has-after">Liên Hệ</a>
                    </li>

                    <li class="dropdown">
                        <a class="navbar-link has-after">Tài Khoản</a>
                        <div class="dropdown-content">
                            <?php if (empty($_SESSION['id'])) { ?>
                            <a href="login.php">Đăng Nhập</a>
                            <a href="register.php">Đăng Ký</a>
                            <?php } else { ?>
                            <a href="myaccount.php">Account</a>
                            <a href="./includes/logout.php">Đăng Xuất</a>
                            <?php } ?>
                        </div>

                    </li>
                </ul>
            </nav>

        </div>
    </div>

</header>

<!--
    - #MOBILE NAVBAR
  -->

<div class="sidebar">
    <div class="mobile-navbar" data-navbar>

        <div class="wrapper">
            <a href="#" class="logo">
                <img src="img/logoskinlele.PNG" width="179" height="26" alt="Glowing">
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">

            <li>
                <a href="index.php" class="navbar-link" data-nav-link>Trang Chủ</a>
            </li>

            <li>
                <a href="product_chamsocda.php" class="navbar-link" data-nav-link>Chăm Sóc Da</a>
            </li>

            <li>
                <a href="product_trangdiem.php" class="navbar-link" data-nav-link>Trang Điểm</a>
            </li>

            <li>
                <a href="contact.php" class="navbar-link" data-nav-link>Liên Hệ</a>
            </li>

            <li class="dropdown">
                <a class="navbar-link has-after">Tài Khoản</a>
                <div class="dropdown-content">
                    <?php if (empty($_SESSION['id'])) { ?>
                    <a href="login.php">Đăng Nhập</a>
                    <a href="register.php">Đăng Ký</a>
                    <?php } else { ?>
                    <a href="myaccount.php">Account</a>
                    <a href="./includes/logout.php">Đăng Xuất</a>
                    <?php } ?>
                </div>
            </li>
            <li>
                <form style="display: flex;" action="search.php" method="GET">
                    <input style="width: 100%;" type="search" name="search" placeholder="Nhập..." class="search-field">
                    <button class="search-submit" aria-label="search">
                        <ion-icon style="font-size: 20px;font-weight: bold;" name="search-outline" aria-hidden="true">
                        </ion-icon>
                    </button>
                </form>

            </li>
        </ul>
    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
</div>
