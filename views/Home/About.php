﻿@{
    ViewBag.Title = "About";
    Layout = "~/Views/Shared/_LayoutHome.cshtml";
}
<style>
    .breadcrumb-area {
        background-image: url('@Url.Content("~/assets/images/banner/banner3.jpg")'); /* Đường dẫn tới hình ảnh */
    }
</style>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Web Bán Laptop và Linh Kiện</h2>
            <ul>
                <li><a href="@Url.Action("Index","Home")">Trang chủ</a></li>
                <li class="active">Web Bán Laptop và Linh Kiện</li>
            </ul>
        </div>
    </div>
</div>
<!-- Bắt Đầu Khu Vực Giới Thiệu Của Web Bán Laptop -->
<div class="about-us-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="overview-img text-center img-hover_effect">
                    <a href="#">
                        <img style="height:400px" class="img-full" src="~/assets/images/banner/laptop.jpg" alt="Hình Ảnh Giới Thiệu Laptop">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 d-flex align-items-center">
                <div class="overview-content">
                    <h2>Chào Mừng Đến <span>Web Bán Laptop</span> của Chúng Tôi!</h2>
                    <p class="short_desc">
                        Chúng tôi cung cấp các sản phẩm laptop và linh kiện chính hãng, chất lượng cao nhất cho bạn.
                        Chúng tôi cam kết mang đến cho bạn những sản phẩm tốt nhất với giá cả hợp lý.
                        Đội ngũ nhân viên tận tâm và chuyên nghiệp sẽ luôn sẵn sàng hỗ trợ bạn trong việc lựa chọn sản phẩm phù hợp.
                        Hãy đến với chúng tôi để trải nghiệm mua sắm tuyệt vời nhất!
                    </p>
                    <div class="uren-about-us_btn-area">
                        <a class="about-us_btn" href="shop-left-sidebar.html">Mua Ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kết Thúc Khu Vực Giới Thiệu Của Web Bán Laptop -->
<!-- Bắt Đầu Khu Vực Thống Kê Dự Án -->
<div class="project-count-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-briefcase-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">5000</h2>
                        <span>Khách Hàng Đã Đặt Hàng</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-wineglass-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">1000</h2>
                        <span>Sản Phẩm Được Bán Ra</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-ios-lightbulb-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">1200</h2>
                        <span>Giờ Làm Việc</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center">
                    <div class="count-icon">
                        <span class="ion-happy-outline"></span>
                    </div>
                    <div class="count-title">
                        <h2 class="count">4500</h2>
                        <span>Khách Hàng Hài Lòng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kết Thúc Khu Vực Thống Kê Dự Án -->
