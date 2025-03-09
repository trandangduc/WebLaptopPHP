<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="/assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="/assets/js/vendor/vendor.min.js"></script>
    <script src="/assets/js/plugins/plugins.min.js"></script>
    -->
    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="template-color-1">
    <div class="main-wrapper">

        <?php include '_PartialHeader.php'; ?>
        <div>
            <?php echo $content; ?>
        </div>
        <?php include '_PartialFooter.php'; ?>
    </div>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="/assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="/assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="/assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="/assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="/assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="/assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Lightgallery JS -->
    <script src="/assets/js/plugins/lightgallery.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="/assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="/assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- JavaScript code to display popup automatically -->
    <?php if (!empty($voucher)) : ?>
        <?php include '_VoucherPopup.php'; ?>
    <?php endif; ?>
</body>
</html>
