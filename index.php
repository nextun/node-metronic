<?php
    require_once "includes/init.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Salon Administrator</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- START THE CUSTOM PLUGIN STYLES -->
        <!-- amCharts plugins -->
        <link rel="stylesheet" href="//www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <link rel="stylesheet" href="//www.amcharts.com/lib/3/plugins/export/export.css">
        <link rel="stylesheet" href="/includes/styles/styles.css">
        <!-- END THE CUSTOM PLUGIN STYLES -->

        <link rel="shortcut icon" href="favicon.ico" />
    </head>
        <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <?php require_once "includes/partials/_header.php"; ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <?php
                        require_once "includes/partials/_sidebar.php";
                    ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <?php
                require_once "includes/partials/_main_content.php";
            ?>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <?php
                require_once "includes/partials/_quick_sidebar.php";
            ?>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php
            require_once "includes/partials/global/_footer.php";
        ?>
        <!-- END FOOTER -->

        <!--[if lt IE 9]>
        <script src="assets/global/plugins/respond.min.js"></script>
        <script src="assets/global/plugins/excanvas.min.js"></script>
        <script src="assets/global/plugins/ie8.fix.min.js"></script>
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>


        <!-- START THE CUSTOM PLUGIN SCRIPTS -->
        <script type="text/javascript" src="//www.amcharts.com/lib/3/amcharts.js"></script>

        <script type="text/javascript" src="//www.amcharts.com/lib/3/serial.js"></script>

        <script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>

        <script type="text/javascript" src="//www.amcharts.com/lib/3/themes/light.js"></script>

        <script type="text/javascript" src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <!-- END THE CUSTOM PLUGIN SCRIPTS -->

        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- START WEBPACK EXPORT -->
        <script src="/includes/scripts/all.js"></script>
        <!-- END WEBPACK EXPORT -->
        <pre>
        <?php
            if($debug){
                print_r($_SESSION);
            }

        ?>
        </pre>
    </body>

</html>