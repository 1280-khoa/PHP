<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
     <!-- Favicon -->
    <link href="css/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    
<title>Admincp</title>
</head>
<!-- <?php
	session_start();
	if(!isset($_SESSION['dangnhap'])){
		header('Location: login.php');
	}
?> -->
<body>
	<h3 style="color: gray;" class="title_admin"> Welcome to Admin</h3>
	
		<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3  class="text-primary"><i style="color: red;" class="fa fa-hashtag me-2"></i>SUPERCARS</h3>
                </a>
                
                	<?php
		
		include("modules/menu.php");
		
			?>
	
            </nav>
        </div>
        <?php 
        include("config/config.php");
		include("modules/header.php");
        include("modules/main.php");
		include("modules/footer.php");
         ?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'tomtat' );
        CKEDITOR.replace( 'noidung' );
        CKEDITOR.replace( 'thongtinlienhe' );
    </script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/lib/chart/chart.min.js"></script>
    <script src="css/lib/easing/easing.min.js"></script>
    <script src="css/lib/waypoints/waypoints.min.js"></script>
    <script src="css/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="css/lib/tempusdominus/js/moment.min.js"></script>
    <script src="css/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="css/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="css/js/main.js"></script>
</body>
</html>