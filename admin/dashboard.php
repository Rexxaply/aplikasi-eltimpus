<?php
session_start();
include '../config/config.php';

if (!isset($_SESSION['admin'])) {
?> <script>
		alert('Maaf ! Anda Belum Login !!');
		window.location = '../index.php';
	</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ELTIMPUS</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../assets/css_animate/node_modules/animate.css/animate.min.css">
    <!-- My CSS-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Calendar CSS -->
    <?php include '../assets/css/calendar.php' ?>
    <!-- Seletize CSS -->
    <link rel="stylesheet" href="../assets/selectize.js/css/selectize.bootstrap5.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="https://eltibiz.com/" class="logo" target="_blank">
                    <b class="text-white">ELTIMPUS</b>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <?php include 'navbarHeader.php' ?>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <?php include 'sideBar.php' ?>
        <!-- End Sidebar -->

        <!-- Start Main Content -->
        <?php include 'mainContent.php' ?>
        <!-- End Main Content -->

    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Datatables JS & Selectize-->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="../assets/selectize.js/js/selectize.min.js"></script>
    <script>
        $(document).ready(function() {
            // DataTable
            let table = $('#dataTable').DataTable({
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'ToDos'],
                ]
            });
        });

        $(".select").selectize();
    </script>



    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>


    <!-- Calendar JS -->
    <?php
    include '../assets/js/calendar.php';
    ?>

    <!-- Auto Image -->
    <script src="../assets/js/autoImage.js"></script>

</body>

</html>