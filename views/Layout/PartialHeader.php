
<header class="header-main_area bg--sapphire">
    <div class="header-top_area d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu_area position-relative">
                        <nav class="main-nav">
                            <ul>
                                <li class="dropdown-holder active">
                                    <a href="@Url.Action("Index","Home")">Trang chủ</a>

                                </li>
                                <li class="dropdown-holder">
                                    <a href="#">Cửa hàng <i class="ion-ios-arrow-down"></i></a>
                                    @Html.Action("GetDanhMuc", "Home")
                                </li>


                                <li class=""><a href="@Url.Action("About","Home")">Về chúng tôi</a></li>
                                <li class=""><a href="@Url.Action("Contact","Home")">Liên hệ</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="ht-right_area">
                        <div class="ht-menu">
                            <ul>
                                @if (Session["Username"] != null)
                                {
                                    <li style="margin-right:50px">
                                        <a href="#">Xin chào, @Session["Username"]<i class="fa fa-chevron-down"></i></a>
                                        <ul class="ht-dropdown ht-my_account">

                                            <li class="active"><a href="@Url.Action("HoSo", "Home")">Xem hồ sơ</a></li>
                                            <li class="active"><a href="@Url.Action("Chat", "Home")">Chat với nhân viên</a></li>
                                            <li class="active"><a href="@Url.Action("DangXuat", "Home")">Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                }
                                else
                                {
                                    <li style="margin-right:50px">
                                        <a href="#">Tài khoản<i class="fa fa-chevron-down"></i></a>
                                        <ul class="ht-dropdown ht-my_account">
                                            <li><a href="@Url.Action("DangKy", "Home")">Đăng ký</a></li>
                                            <li class="active"><a href="@Url.Action("DangNhap", "Home")">Đăng nhập</a></li>
                                        </ul>
                                    </li>
                                }
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
                                @if (Session["Username"] == null)
                                {
                                    <a href="@Url.Action("DangNhap", "Home")">
                                        <div class="minicart-count_area">
                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                }
                                else
                                {
                                    <a href="@Url.Action("GioHang", "Home")">
                                        <div class="minicart-count_area">
                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                }
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .header-middle_area .header-right_area {
            text-align: right;
        }

        .minicart-wrap {
            position: relative;
            display: inline-block;
            margin-left: auto;
        }
    </style>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active">
                            <a href="@Url.Action("Index","Home")">
                                <span class="mm-text">Trang chủ</span>
                            </a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                @Html.Action("GetDanhMuc", "Home")
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="@Url.Action("About","Home")">
                                <span class="mm-text">Về chúng tôi</span>
                            </a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="@Url.Action("Contact","Home")">
                                <span class="mm-text">Liên hệ</span>
                            </a>

                        </li>
                        <li class="menu-item-has-children">
                            <a href="@Url.Action("DangNhap","Home")">
                                <span class="mm-text">Đăng nhập</span>
                            </a>

                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

</header>
<script>
    .logo-text {
    font-family: 'Arial', sans-serif;
    font-size: 28px;
    font-weight: bold;
    color: #ff0000; /* Màu chữ đỏ */
    text-transform: uppercase;
    text-decoration: none;
    transition: transform 0.3s ease, color 0.3s ease;
}

.logo-text:hover {
    transform: scale(1.1); /* Phóng to chữ khi hover */
    color: #00ccff; /* Đổi màu sang xanh khi hover */
}

</script>