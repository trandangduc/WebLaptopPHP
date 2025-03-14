﻿<?php
$title = "Trang chủ | WebLaptopPHP";
ob_start();
?>

<div class="uren-slider_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-slider slider-navigation_style-2">
                <?php

                    foreach ($banner as $b)
                    {
                        echo '<div class="single-slide">
                            <div class="banner-image">
                                <img src="./assets/images/banner/'.$b['HinhAnh'].'" alt="Banner" class="img-fluid w-100 h-100" />
                            </div>
                            <div class="slider-content">
                                <h3>'.$b['MoTa'].'</h3>
                               
                            </div>
                        </div>';
                        
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.main-slider').slick({
            dots: true, // Hiện điểm điều hướng
            infinite: true, // Cuộn liên tục
            speed: 500, // Tốc độ chuyển động
            fade: true, // Hiệu ứng mờ khi chuyển đổi
            cssEase: 'linear' // Hiệu ứng chuyển động
        });
    });
</script>
<style>
    .uren-slider_area {
        position: relative;
        overflow: hidden;
    }

    .single-slide {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        height: 400px; /* Đặt chiều cao cho banner */
    }

    .banner-image {
        width: 100%;
        height: 100%; /* Đảm bảo chiều cao toàn bộ */
        overflow: hidden; /* Giúp ẩn hình ảnh vượt quá kích thước tối đa */
    }

        .banner-image img {
            width: 100%; /* Ảnh chiếm toàn bộ chiều rộng của div chứa */
            height: 100%; /* Đảm bảo chiều cao chiếm toàn bộ */
            object-fit: cover; /* Đảm bảo tỉ lệ của ảnh được giữ nguyên mà không bị méo */
            transition: transform 0.5s ease; /* Hiệu ứng khi hover */
        }

            .banner-image img:hover {
                transform: scale(1.05); /* Phóng to ảnh khi hover */
            }

    .slider-content {
        padding: 15px;
        position: absolute;
        bottom: 20px; /* Đặt nội dung gần đáy ảnh */
        left: 50%; /* Căn giữa nội dung */
        transform: translateX(-50%); /* Căn giữa chính xác */
    }
</style>
<div class="uren-shipping_area">
    <div class="container-fluid">
        <div class="shipping-nav">
            <div class="row no-gutters">
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-paperplane-outline"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Miễn Phí Vận Chuyển</h6>
                            <p>Miễn phí vận chuyển cho tất cả đơn hàng tại Mỹ</p>
                        </div>
                    </div>
                </div>
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-help-outline"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Hỗ Trợ 24/7</h6>
                            <p>Liên hệ với chúng tôi 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-refresh-empty"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Hoàn Tiền 100%</h6>
                            <p>Bạn có 30 ngày để trả lại hàng</p>
                        </div>
                    </div>
                </div>
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-undo-outline"></i>
                        </div>
                        <div class="shipping-content">
                            <h6>Trả Lại Trong 90 Ngày</h6>
                            <p>Nếu hàng gặp vấn đề</p>
                        </div>
                    </div>
                </div>
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <div class="shipping-icon">
                            <i class="ion-ios-locked-outline"></i>
                        </div>
                        <div class="shipping-content last-child">
                            <h6>Thanh Toán An Toàn</h6>
                            <p>Chúng tôi đảm bảo thanh toán an toàn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uren-product_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title_area">
                    <span>Sản phẩm mới</span>
                    <h3>Chào mừng bạn đến với những sản phẩm mới nhất</h3>
                </div>
                <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6,
                        "arrows" : true
                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                            ]'>
                            <?php
                            foreach ($sp as $s)
                           
                            {
                                 echo'
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a>
                                                    <img class="primary-img" style="width: 100%; height: 200px;" src="./assets/images/product/'.$s['MaSanPham'].'/'.$s['HinhAnh'].'" alt="'.$s['TenSanPham'].'">
                                                    <img class="secondary-img" style="width: 100%; height: 200px;" src="./assets/images/product/'.$s['MaSanPham'].'/'.$s['HinhAnh'].'" alt="'.$s['TenSanPham'].'">
                                                </a>
                                                <div class="sticker">
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="add-actions">
                                                    <ul>
        
                                                        <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <a href="/Home/ChiTietSanPham?id='.$s['MaSanPham'].'" data-toggle="tooltip" data-placement="top" title="Quick View">
                                                                <i class="ion-android-open"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <h6><a class="product-name" href="single-product.html">'.$s['TenSanPham'].'</a></h6>
                                                    <div class="price-box">';
                                                        if ($s['GiaMoi']!= null)
                                                        {
                                                          echo  ' <span class="old-price">'.$s['Gia'].' đ</span>
                                                            <span class="new-price">'.$s['GiaMoi'].'đ</span>';
                                                        }
                                                        else
                                                        {
                                                           echo '<span class="new-price">'.$s['Gia'].' đ</span>';
                                                        }
        
        echo'
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// Lấy nội dung đã lưu trong buffer
$content = ob_get_clean();

// Gọi layout chính
include __DIR__ . '/../Layout/LayoutHome.php';
?>