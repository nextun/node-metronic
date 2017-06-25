<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Blank Page Layout
                    <?php
                    if($debug){
                        ?>
                        <small>Manager main content</small>
                        <?php
                    }
                    ?>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
                <!-- BEGIN THEME PANEL -->
                <?php
                    require_once "includes/partials/global/_theme_panel.php";
                ?>
                <!-- END THEME PANEL -->
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Blank Page</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Page Layouts</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="note note-info">
            <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>