﻿@model TMDTLaptop.Models.DanhMucSanPham

@{
    ViewBag.Title = "Sửa Danh Mục";
    Layout = "~/Views/Shared/_LayoutAdmin.cshtml";
}

<div class="container">
    <div class="card">
        <div class="card-body">
            <h2 class="mt-4">@ViewBag.Title</h2>

            @using (Html.BeginForm("SuaDanhMuc", "Admin", FormMethod.Post))
            {
                @Html.HiddenFor(m => m.MaDanhMuc) <!-- Giữ lại Mã Danh Mục trong form -->

                <div class="form-group">
                    <label for="TenDanhMuc">Tên Danh Mục</label>
                    @Html.TextBoxFor(m => m.TenDanhMuc, new { @class = "form-control", placeholder = "Nhập tên danh mục" })
                </div>

                <button type="submit" class="btn btn-success">Cập Nhật</button>
                <a href="@Url.Action("QuanLyDanhMuc")" class="btn btn-secondary">Quay lại</a>
            }
        </div>
    </div>
</div>
