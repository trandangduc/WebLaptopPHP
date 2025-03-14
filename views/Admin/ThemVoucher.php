﻿@model TMDTLaptop.Models.Voucher

@{
    ViewBag.Title = "Thêm Voucher";
    Layout = "~/Views/Shared/_LayoutAdmin.cshtml";
}

<div class="container">
    <h2 class="mt-4">@ViewBag.Title</h2>

    <div class="card">
        <div class="card-body">
            @if (!ViewData.ModelState.IsValid)
            {
                <div class="alert alert-danger">
                    <strong>Thông báo:</strong>
                    <ul>
                        @foreach (var error in ViewData.ModelState.Values.SelectMany(v => v.Errors))
                        {
                            <li>@error.ErrorMessage</li>
                        }
                    </ul>
                </div>
            }
            @using (Html.BeginForm("ThemVoucher", "Admin", FormMethod.Post))
            {
                @Html.AntiForgeryToken()
                <div class="form-group">
                    <label for="MaVoucher">Mã Voucher</label>
                    @Html.TextBoxFor(m => m.Code, new { @class = "form-control", placeholder = "Nhập mã voucher", required = "required" })
                </div>

                <div class="form-group">
                    <label for="GiamGia">Giảm Giá (%)</label>
                    @Html.TextBoxFor(m => m.GiamGia, new { @class = "form-control", placeholder = "Nhập giảm giá", required = "required" })
                </div>
                <div class="form-group">
                    <label for="NgayHetHan">Ngày bắt đầu </label>
                    @Html.TextBoxFor(m => m.NgayBatDau, new { @class = "form-control", type = "date", required = "required" })
                </div>
                <div class="form-group">
                    <label for="NgayHetHan">Ngày Hết Hạn</label>
                    @Html.TextBoxFor(m => m.NgayKetThuc, new { @class = "form-control", type = "date", required = "required" })
                </div>
                <div class="form-group">
                    <label for="SoLuongSuDungToiDa">Số lượng sử dụng</label>
                    @Html.TextBoxFor(m => m.SoLuongSuDungToiDa, new { @class = "form-control", placeholder = "Nhập số lượng sử dụng", required = "required" })
                </div>
                <div class="form-group">
                    <label for="MoTa">Mô tả</label>
                    @Html.TextBoxFor(m => m.MoTa, new { @class = "form-control", placeholder = "Nhập mô tả", required = "required" })
                </div>
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="@Url.Action("QuanLyVoucher")" class="btn btn-secondary">Quay lại</a>
            }
        </div>
    </div>
</div>
