﻿
@{
    ViewBag.Title = "CuaHang";
    Layout = "~/Views/Shared/_LayoutHome.cshtml";
}

@model IEnumerable<TMDTLaptop.Models.SanPham>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Cửa hàng</h2>
            <ul>
                <li><a href="@Url.Action("Index","Home")">Trang chủ</a></li>
                <li class="active">Cửa hàng</li>
            </ul>
        </div>
    </div>
</div>
<style>
    .breadcrumb-area {
        background-image: url('@Url.Content("~/assets/images/banner/banner3.jpg")'); /* Đường dẫn tới hình ảnh */
    }
</style>
<!-- Uren's Breadcrumb Area End Here -->
<!-- Begin Uren's Shop Grid Fullwidth  Area -->
<div class="shop-content_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <form action="@Url.Action("CuaHang", new { id = Model.FirstOrDefault().MaDanhMuc })" method="get" class="d-flex">
                            <input type="text" name="search" style="width:300px" placeholder="Tìm kiếm theo tên sản phẩm..." class="form-control me-2" />
                            <button style="margin-left:10px" type="submit" class="btn btn-primary">Tìm kiếm</button>
                            <button type="button" class="btn btn-secondary" id="btnAdvancedSearch" style="margin-left:10px">Tìm kiếm nâng cao</button>
                        </form>

                        <!-- Thêm phần tử lọc nâng cao ra ngoài form chính -->
                        <div id="advancedSearchPanel" style="display:none;">
                            <form action="@Url.Action("CuaHang", new { id = Model.FirstOrDefault().MaDanhMuc })" method="get">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Giá từ:</label>
                                        <input type="number" name="minPrice" class="form-control" placeholder="0" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Đến:</label>
                                        <input type="number" name="maxPrice" class="form-control" placeholder="10,000,000" />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Hãng sản phẩm:</label>
                                        <select name="brand" class="form-control">
                                            <option value="">Chọn hãng</option>
                                            <!-- Giả định bạn có danh sách hãng sản phẩm -->
                                            @foreach (var brand in ViewBag.Brands)
                                            {
                                                <option value="@brand.MaHang">@brand.TenHang</option>
                                            }
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">Lọc</button>
                            </form>
                        </div>
                    </div>

                    <script>
                        document.getElementById('btnAdvancedSearch').addEventListener('click', function () {
                            var panel = document.getElementById('advancedSearchPanel');
                            panel.style.display = panel.style.display === 'none' ? 'block' : 'none';
                        });
                    </script>
                </div>



                <div class="shop-product-wrap grid gridview-3 listfullwidth img-hover-effect_area row">
                    @foreach (var product in Model)
                    {
                        <div class="col-lg-4">
                            <div class="product-slide_item">
                                <div class="inner-slide">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="@Url.Action("ChiTietSanPham","Home",new {id=product.MaSanPham})">
                                                <img class="primary-img" style="height:300px" src="~/assets/images/product/@product.MaSanPham/@product.HinhAnh" alt="@product.TenSanPham">
                                                <img class="secondary-img" style="height:300px" src="~/assets/images/product/@product.MaSanPham/@product.HinhAnh" alt="@product.TenSanPham">
                                            </a>
                                            <div class="add-actions">
                                                <ul>

                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter">
                                                        <a href="@Url.Action("ChiTietSanPham","Home",new {id=product.MaSanPham})" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                            <i class="ion-android-open"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="product-content">
                                            <div class="product-desc_info">
                                                <h6>
                                                    <a class="product-name" href="single-product.html">@product.TenSanPham</a>
                                                </h6>
                                                @if (product.GiaMoi != null)
                                                {
                                                    <div class="price-box">
                                                        <span class="old-price">@product.Gia.ToString("N0") đ</span>
                                                        <span class="new-price">@product.GiaMoi.Value.ToString("N0") đ</span>
                                                    </div>
                                                }
                                                else
                                                {
                                                    <div class="price-box">
                                                        <span class="new-price">@product.Gia.ToString("N0")</span>
                                                    </div>
                                                }


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    }
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="uren-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="uren-pagination-box primary-color">
                                        @for (int i = 1; i <= ViewBag.TotalPages; i++)
                                        {
                                            <li class="@(ViewBag.CurrentPage == i ? "active" : "")">
                                                <a href="@Url.Action("CuaHang", new { id = Model.FirstOrDefault().MaDanhMuc, page = i,search = ViewBag.Search,minPrice= ViewBag.MinPrice,maxPrice = ViewBag.MaxPrice, brand = ViewBag.Brand })">@i</a>
                                            </li>
                                        }
                                        <li class="@(ViewBag.CurrentPage == ViewBag.TotalPages ? "disabled" : "")">
                                            <a class="Next" href="@Url.Action("CuaHang", new { id = Model.FirstOrDefault().MaDanhMuc, page = ViewBag.CurrentPage + 1,search = ViewBag.Search,minPrice= ViewBag.MinPrice,maxPrice = ViewBag.MaxPrice, brand = ViewBag.Brand })">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

