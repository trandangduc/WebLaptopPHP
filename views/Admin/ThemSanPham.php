﻿@model TMDTLaptop.Models.SanPham

@{
    ViewBag.Title = "Thêm Sản Phẩm";
    Layout = "~/Views/Shared/_LayoutAdmin.cshtml";
}

<div class="container">
    <h2 class="mt-4 mb-4">Thêm Sản Phẩm Mới</h2>

    @using (Html.BeginForm("ThemSanPham", "Admin", FormMethod.Post, new { enctype = "multipart/form-data" }))
    {
        @Html.AntiForgeryToken()
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    @Html.LabelFor(model => model.TenSanPham)
                    @Html.TextBoxFor(model => model.TenSanPham, new { @class = "form-control" })
                    @Html.ValidationMessageFor(model => model.TenSanPham, "", new { @class = "text-danger" })
                </div>

                <div class="form-group">
                    @Html.LabelFor(model => model.MoTa)
                    @Html.TextAreaFor(model => model.MoTa, new { @class = "form-control", rows = 5, @id = "editor" })
                    @Html.ValidationMessageFor(model => model.MoTa, "", new { @class = "text-danger" })
                </div>

                <script>
                    CKEDITOR.replace('editor'); // Khởi tạo CKEditor cho trường MoTa
                </script>

                <div class="form-group">
                    @Html.LabelFor(model => model.Gia)
                    @Html.TextBoxFor(model => model.Gia, new { @class = "form-control", type = "number", step = "0.01" })
                    @Html.ValidationMessageFor(model => model.Gia, "", new { @class = "text-danger" })
                </div>

                <div class="form-group">
                    @Html.LabelFor(model => model.SoLuong, "Số Lượng")
                    @Html.TextBoxFor(model => model.SoLuong, new { @class = "form-control", type = "number", min = "0" })
                    @Html.ValidationMessageFor(model => model.SoLuong, "", new { @class = "text-danger" })
                </div>

                <div class="form-group">
                    @Html.Label("Hình Ảnh Đại Diện")
                    <input type="file" name="HinhDaiDien" class="form-control" />
                    @Html.ValidationMessage("HinhAnh", "", new { @class = "text-danger" })
                </div>

                <div class="form-group">
                    @Html.Label("Hình Ảnh Kèm Theo")
                    <input type="file" name="HinhKemTheo" class="form-control" multiple />
                    @Html.ValidationMessage("HinhKemTheo", "", new { @class = "text-danger" })
                    <small class="form-text text-muted">Chọn nhiều hình ảnh (hình kèm theo).</small>
                </div>

                <div class="form-group">
                    @Html.LabelFor(model => model.MaHang, "Hãng")
                    @Html.DropDownListFor(model => model.MaHang, new SelectList(ViewBag.Hang, "MaHang", "TenHang"), "Chọn Hãng", new { @class = "form-control" })
                    @Html.ValidationMessageFor(model => model.MaHang, "", new { @class = "text-danger" })
                </div>

                <div class="form-group">
                    @Html.LabelFor(model => model.MaDanhMuc, "Danh Mục")
                    @Html.DropDownListFor(model => model.MaDanhMuc, new SelectList(ViewBag.DanhMuc, "MaDanhMuc", "TenDanhMuc"), "Chọn Danh Mục", new { @class = "form-control" })
                    @Html.ValidationMessageFor(model => model.MaDanhMuc, "", new { @class = "text-danger" })
                </div>

                <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
            </div>
        </div>
    }
</div>
