﻿@model TMDTLaptop.Models.TaiKhoan

@{
    ViewBag.Title = "Đổi Thông Tin Cá Nhân";
    Layout = "~/Views/Shared/_LayoutAdmin.cshtml";
}

<div class="container">
    <h2 class="mt-4 mb-4">Đổi Thông Tin Cá Nhân</h2>

    @if (ViewBag.Message != null)
    {
        <div class="alert alert-success">@ViewBag.Message</div>
    }

    @using (Html.BeginForm("ThongTinCaNhan", "Admin", FormMethod.Post))
    {
        @Html.AntiForgeryToken()

        <div class="form-group">
            @Html.LabelFor(m => m.HoTen)
            @Html.TextBoxFor(m => m.HoTen, new { @class = "form-control" })
        </div>
        <div class="form-group">
            @Html.LabelFor(m => m.DiaChi)
            @Html.TextBoxFor(m => m.DiaChi, new { @class = "form-control" })
        </div>
        <div class="form-group">
            @Html.LabelFor(m => m.SoDienThoai)
            @Html.TextBoxFor(m => m.SoDienThoai, new { @class = "form-control" })
        </div>
        <div class="form-group">
            @Html.LabelFor(m => m.Email)
            @Html.TextBoxFor(m => m.Email, new { @class = "form-control" })
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    }
</div>
