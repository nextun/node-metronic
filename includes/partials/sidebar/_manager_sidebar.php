<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <?php
    if($debug){
        ?>
        <li class="heading">
            <h3 class="uppercase">Manager</h3>
        </li>
        <?php
    }
    ?>
    <li class="nav-item start ">
        <a href="javascript:;" class="nav-link ">
            <i class="icon-bar-chart"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item start ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-building"></i>
            <span class="title">All Salons</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu" id="menuInfoContainer" style="display: block;">
            <li class="nav-item"><a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-building-o"></i> TanUp Hessle <span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-user"></i> Clients </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-users"></i> Staff </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-sun-o"></i> Beds </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-gift"></i> Packages </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-shopping-cart"></i> Products </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="icon-wallet"></i> Expenses </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link"><i class="fa fa-file-text-o"></i> Reports <span class="arrow nav-toggle"></span> </a>
                        <ul class="sub-menu" style="display: none;">
                            <li class="nav-item"><a href="javascript:;" class="nav-link"><i class="fa fa-calendar-o"></i> Daily </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link"><i class="icon-graph"></i> Custom </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link"><i class="fa fa fa-globe"></i> All Salons </a>
            </li>
        </ul>
    </li>

    <li class="nav-item start ">
        <a href="javascript:;" class="nav-link ">
            <i class="icon-speech"></i>
            <span class="title">Reminders</span>
        </a>
    </li>

    <li class="nav-item start ">
        <a href="javascript:;" class="nav-link ">
            <i class="fa fa-retweet"></i>
            <span class="title">Subscription</span>
        </a>
    </li>
</ul>