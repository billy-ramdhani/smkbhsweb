<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK BHS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php base_url() ?>assets/images/favicon/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/depan/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/depan/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/depan/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/depan/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/depan/css/stylemading.css') ?>" rel="stylesheet">
</head>
<body>
    	<!--================ Navbar ==================-->
        <?php $this->load->view('front/layouts/_navbar') ?>
		<!--================ Content =================-->
		<?php $this->load->view('front/pages/' . $page) ?>
		<!--================ End Content =================-->
        <?php $this->load->view('front/layouts/_footer') ?>
   
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/depan/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url('assets/depan/madding/js/vendor/modernizr-3.5.0.min.js') ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?= base_url('assets/depan/madding/js/vendor/jquery-1.12.4.min.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/popper.min.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/bootstrap.min.js')?>"></script>
	    <!-- Jquery M -->
        <script src="<?= base_url('assets/depan/madding/js/jquery.slicknav.min.js')?>"></script>

		<!-- Jquery S< -->
        <script src="<?= base_url('assets/depan/madding/js/owl.carousel.min.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/slick.min.js')?>"></script>
        <!-- Date Pic -->
        <script src="<?= base_url('assets/depan/madding/js/gijgo.min.js')?>"></script>
		<!-- One Paged-HeadLin -->
        <script src="<?= base_url('assets/depan/madding/js/wow.min.js')?>"></script>
		<script src="<?= base_url('assets/depan/madding/js/animated.headline.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/jquery.magnific-popup.js')?>"></script>

        <!-- Breakinging -->
        <script src="<?= base_url('assets/depan/madding/js/jquery.ticker.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/site.js')?>"></script>

		<!-- Scrollupect, sticky -->
        <script src="<?= base_url('assets/depan/madding/js/jquery.scrollUp.min.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/jquery.nice-select.min.js')?>"></script>
		<script src="<?= base_url('assets/depan/madding/js/jquery.sticky.js')?>"></script>
        
        <!-- contact -->
        <script src="<?= base_url('assets/depan/madding/js/contact.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/jquery.form.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/jquery.validate.min.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/mail-script.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/jquery.ajaxchimp.min.js')?>"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?= base_url('assets/depan/madding/js/plugins.js')?>"></script>
        <script src="<?= base_url('assets/depan/madding/js/main.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>assets/depan/js/main.js"></script>
</body>

</html>