<header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="dropdown-holder active">
                                    <a href="index.php">Trang chủ</a>
                                </li>
                                <li class="dropdown-holder">
                                    <a href="#">Cửa hàng <i class="ion-ios-arrow-down"></i></a>
                             
                                </li>
                                <li class=""><a href="about.php">Về chúng tôi</a></li>
                                <li class=""><a href="contact.php">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            <ul>
                                <?php if(isset($_SESSION['Username'])): ?>
                                    <li style="margin-right:50px">
                                        <a href="#">Xin chào, <?php echo $_SESSION['Username']; ?><i class="fa fa-chevron-down"></i></a>
                                        <ul class="ht-dropdown ht-my_account">
                                            <li class="active"><a href="hoso.php">Xem hồ sơ</a></li>
                                            <li class="active"><a href="chat.php">Chat với nhân viên</a></li>
                                            <li class="active"><a href="dangxuat.php">Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li style="margin-right:50px">
                                        <a href="#">Tài khoản<i class="fa fa-chevron-down"></i></a>
                                        <ul class="ht-dropdown ht-my_account">
                                            <li><a href="dangky.php">Đăng ký</a></li>
                                            <li class="active"><a href="dangnhap.php">Đăng nhập</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle_area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="header-logo_area">
                        NHÂN IT
                    </div>
                </div>
                <div class="col-6 text-end">
                    <div class="header-right_area">
                        <ul class="d-flex justify-content-end align-items-center">
                            <li class="mobile-menu_wrap d-flex d-lg-none me-3">
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li class="minicart-wrap" style="width:200px">
                                <?php if(!isset($_SESSION['Username'])): ?>
                                    <a href="dangnhap.php">
                                        <div class="minicart-count_area">
                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <a href="giohang.php">
                                        <div class="minicart-count_area">
                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Phần CSS và mobile menu giữ nguyên -->
</header>
