<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@ViewBag.Title - Admin Dashboard</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Thêm jQuery ở đây -->
    <script src="~/Scripts/bootstrap.bundle.min.js"></script>
    <!-- Your custom CSS (if any) -->
    @RenderSection("styles", required: false)
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

            .sidebar a {
                color: #fff;
                display: block;
                padding: 15px;
                font-size: 16px;
                text-decoration: none;
            }

                .sidebar a:hover {
                    background-color: #495057;
                }

            .sidebar .active {
                background-color: #007bff;
            }

        .content-area {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color: #f8f9fa;
            padding: 15px;
        }

        .dashboard-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        @if (Session["Quyen"] != null && Int32.TryParse(Session["Quyen"].ToString(), out int quyenadmin) && quyenadmin == 1)
        {
            <a href="@Url.Action("Index","Admin")" class="active"><i class="fas fa-home"></i> Dashboard</a>
            <a href="@Url.Action("QuanLyBanner", "Admin")"><i class="fas fa-images"></i> Quản lý banner</a>

            <a href="@Url.Action("QuanLyDanhMuc","Admin")"><i class="fas fa-list-alt"></i> Quản lý loại hàng</a>
            <a href="@Url.Action("QuanLySanPham","Admin")"><i class="fas fa-box-open"></i> Quản lý sản phẩm</a>
            <a href="@Url.Action("QuanLyHang","Admin")"><i class="fas fa-palette"></i> Quản lý thương hiệu</a>
            <a href="@Url.Action("QuanLyKhachHang","Admin")"><i class="fas fa-users"></i> Quản lý khách hàng</a>
            <a href="@Url.Action("QuanLyDonHang","Admin")"><i class="fas fa-shopping-cart"></i> Quản lý đơn hàng</a>
            <a href="@Url.Action("QuanLyNhanVien", "Admin")">
                <i class="fas fa-users"></i> Quản lý nhân viên
            </a>
            <a href="@Url.Action("QuanLyTonKho", "Admin")">
                <i class="fas fa-warehouse"></i> Quản lý tồn kho
            </a>

            <a class="nav-link" href="@Url.Action("QuanLyVoucher", "Admin")">
                <i class="fas fa-ticket-alt"></i> Quản lý Voucher
            </a>
            <a href="@Url.Action("ThongTinCaNhan", "Admin")"><i class="fas fa-user-edit"></i> Thay đổi thông tin</a>
            <a href="@Url.Action("DoiMatKhau", "Admin")"><i class="fas fa-lock"></i> Đổi mật khẩu</a>
            <a href="@Url.Action("DangXuat","Login")"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        }
        else if (Session["Quyen"] != null && Int32.TryParse(Session["Quyen"].ToString(), out int quyennv) && quyennv == 2)
        {
            <a href="@Url.Action("Index","NV")" class="active"><i class="fas fa-home"></i> Dashboard</a>
            <a href="@Url.Action("QuanLyTonKho", "Admin")">
                <i class="fas fa-warehouse"></i> Quản lý tồn kho
            </a>

            <a href="@Url.Action("QuanLyDonHang","Admin")"><i class="fas fa-shopping-cart"></i> Quản lý đơn hàng</a>
            <a href="@Url.Action("ThongTinCaNhan", "Admin")"><i class="fas fa-user-edit"></i> Thay đổi thông tin</a>
            <a href="@Url.Action("DoiMatKhau", "Admin")"><i class="fas fa-lock"></i> Đổi mật khẩu</a>

            <a href="@Url.Action("DangXuat","Login")"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        }
        else if (Session["Quyen"] != null && Int32.TryParse(Session["Quyen"].ToString(), out int quyencskh) && quyencskh == 4)
        {
            <a href="@Url.Action("QuanLyTonKho", "Admin")">
                <i class="fas fa-warehouse"></i> Quản lý tồn kho
            </a>
            <a href="@Url.Action("ThongTinCaNhan", "Admin")"><i class="fas fa-user-edit"></i> Thay đổi thông tin</a>
            <a href="@Url.Action("DoiMatKhau", "Admin")"><i class="fas fa-lock"></i> Đổi mật khẩu</a>
            <a href="@Url.Action("Index", "ChamSocKH")">
                <i class="fas fa-sign-out-alt"></i> Quay lại
            </a>
        }


    </div>

    <!-- Content Area -->
    <div class="content-area">
        <!-- Navbar -->
        <!-- Main Content -->
        <div class="container-fluid">
            @RenderBody()
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS (if any) -->
    @RenderSection("scripts", required: false)
</body>
</html>
<?php
// This is a placeholder for any additional PHP code you might want to add
?>