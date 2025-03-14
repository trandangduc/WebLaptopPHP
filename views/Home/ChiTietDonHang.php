﻿@{
    ViewBag.Title = "Chi tiết đơn hàng";
    Layout = "~/Views/Shared/_LayoutHome.cshtml"; // Thay đổi nếu cần
}

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Chi tiết đơn hàng</h2>
            <ul>
                <li><a href="@Url.Action("Index", "Home")">Trang chủ</a></li>
                <li class="active">Chi tiết đơn hàng</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .breadcrumb-area {
        background-image: url('@Url.Content("~/assets/images/banner/banner3.jpg")'); /* Đường dẫn tới hình ảnh */
    }
</style>
<main class="page-content">
    <div class="container mt-5">
        <h3 class="mb-4">Mã đơn hàng: <span class="text-primary">@ViewBag.Order.MaDonHang</span></h3>
        <p><strong>Ngày lập:</strong> @ViewBag.Order.NgayDatHang.ToString("dd/MM/yyyy")</p>
        <p><strong>Trạng thái:</strong> @ViewBag.Order.TrangThai</p>
        <p><strong>Tổng tiền:</strong> <span class="text-success">@ViewBag.Order.TongTien.ToString("C0")</span></p>
        <p>
            <strong>Được giảm giá:</strong>
            <span class="text-success">
                @(ViewBag.GiamGia != null ? ViewBag.GiamGia + " %" : "Không giảm giá")
            </span>
        </p>


        <h4 class="mt-4">Chi tiết sản phẩm trong đơn hàng</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-2">
                <thead class="table-light">
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (var item in ViewBag.ChiTietDonHang) // Sử dụng ViewBag để lấy thông tin chi tiết
                    {
                        <tr>
                            <td>@item.SanPham.TenSanPham</td>
                            <td>@item.SoLuong</td>
                            <td>@item.Gia.ToString("C0")</td>
                        </tr>
                    }
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="@Url.Action("Index", "Home")" class="btn btn-primary">Trở về trang chủ</a>
        </div>
    </div>
</main>
