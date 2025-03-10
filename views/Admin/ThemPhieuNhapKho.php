﻿@model TMDTLaptop.Models.PhieuNhapKho

@{
    ViewBag.Title = "Thêm Phiếu Nhập Kho";
    Layout = "~/Views/Shared/_LayoutAdmin.cshtml";
}
@if (ViewBag.ErrorMessage != null)
{
    <script>
     alert('@Html.Raw(ViewBag.ErrorMessage)');
    </script>
}
<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="mt-4">@ViewBag.Title</h2>

            @using (Html.BeginForm("ThemPhieuNhapKho", "Admin", FormMethod.Post))
            {
                @Html.AntiForgeryToken()
                <div class="form-group">
                    <label for="NgayNhap">Ngày Nhập</label>
                    <input type="date" class="form-control" id="NgayNhap" name="NgayNhap" value="@DateTime.Now.ToString("yyyy-MM-dd")" readonly />
                </div>

                <div class="form-group">
                    <label for="TongTien">Tổng Tiền</label>
                    <input type="number" class="form-control" id="TongTien" name="TongTien" value="0" readonly />
                </div>

                <div class="form-group">
                    <label for="GhiChu">Ghi Chú</label>
                    @Html.TextAreaFor(m => m.GhiChu, new { @class = "form-control", placeholder = "Nhập ghi chú nếu có" })
                </div>

                <h4>Chi Tiết Phiếu Nhập Kho</h4>
                <div id="chiTietContainer">
                    <div class="row" id="chiTietTemplate">
                        <div class="col-md-4">
                            <label for="SanPham_0">Sản Phẩm</label>
                            <select class="form-control" id="SanPham_0" name="ChiTietPhieuNhaps[0].MaSanPham">
                                <option value="">Chọn sản phẩm</option>
                                @foreach (var sanPham in ViewBag.SanPhams)
                                {
                                    <option value="@sanPham.MaSanPham">@sanPham.TenSanPham</option>
                                }
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="SoLuong_0">Số Lượng</label>
                            <input type="number" class="form-control" id="SoLuong_0" name="ChiTietPhieuNhaps[0].SoLuong" required />
                        </div>
                        <div class="col-md-3">
                            <label for="GiaNhap_0">Giá Nhập</label>
                            <input type="number" class="form-control" id="GiaNhap_0" name="ChiTietPhieuNhaps[0].GiaNhap" required />
                        </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-danger" onclick="removeChiTiet(this)">Xóa</button>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary" id="addChiTiet">Thêm Chi Tiết</button>
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="@Url.Action("QuanLyPhieuNhapKho", "Admin")" class="btn btn-secondary">Quay lại</a>
            }
        </div>
    </div>
</div>

<script>
    let chiTietIndex = 0;

    document.getElementById('addChiTiet').addEventListener('click', function () {
        const template = document.getElementById('chiTietTemplate').cloneNode(true);
        chiTietIndex++;

        // Cập nhật các thuộc tính name của các input trong template
        template.querySelector('select[name="ChiTietPhieuNhaps[0].MaSanPham"]').name = `ChiTietPhieuNhaps[${chiTietIndex}].MaSanPham`;
        template.querySelector('input[name="ChiTietPhieuNhaps[0].SoLuong"]').name = `ChiTietPhieuNhaps[${chiTietIndex}].SoLuong`;
        template.querySelector('input[name="ChiTietPhieuNhaps[0].GiaNhap"]').name = `ChiTietPhieuNhaps[${chiTietIndex}].GiaNhap`;

        // Cập nhật id cho các trường mới
        template.querySelector('select').id = `SanPham_${chiTietIndex}`;
        template.querySelector('input[name$=".SoLuong"]').id = `SoLuong_${chiTietIndex}`;
        template.querySelector('input[name$=".GiaNhap"]').id = `GiaNhap_${chiTietIndex}`;

        // Xóa giá trị để tránh nhầm lẫn
        template.querySelector('select').value = "";
        template.querySelector('input[name$=".SoLuong"]').value = "";
        template.querySelector('input[name$=".GiaNhap"]').value = "";

        document.getElementById('chiTietContainer').appendChild(template);
    });

    function removeChiTiet(button) {
        button.closest('.row').remove();
    }
</script>
