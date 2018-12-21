<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!--<script src="../dist/js/jquery-1.8.3.min.js" type="text/javascript"></script>-->
                <!--<script src="../dist/js/app.min.js"></script>-->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left info">
                <p style="font-weight: normal;color: #cccccc"> <small> </small></p>
            </div>
        </div>
        <ul class="sidebar-menu">

            <!-- admin dashboard-->

            <li class="header" style="text-align: center">MAIN NAVIGATION </li>
            <li class="treeview">
                <a href="Dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>

                    <span>මුල් පිටුව</span>
                    <span class="label label-primary pull-right"></span>
                </a>
                <!--                <ul class="treeview-menu">
                                    <li><a href="CreateCenter.php"><i class="fa fa-circle-o"></i> Create Center</a></li>
                                    <li><a href="ViewCenters.php"><i class="fa fa-circle-o"></i>View Centers</a></li>
                                </ul>-->
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fas fa-user"></i>

                    <span>සාමාජිකයින්  කළමනාකරණය  </span>
                    <span class="label label-primary pull-right"></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="AddMember.php"><i class="far fa-circle"></i>  සාමාජිකයින්  ඇතුලත් කිරීම </a></li>
                    <li><a href="ViewMembers.php"><i class="far fa-circle"></i>  සියලුම සාමාජිකයන්</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fas fa-file-alt"></i>
                    <span> පුවත් හා සිදුවීම් කළමනාකරණය </span>
                    <span class="label label-primary pull-right"></span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="AddNews.php"><i class="far fa-circle"></i> පුවත් ඇතුලත් කිරීම</a></li>

                    <li><a href="ViewNews.php"><i class="far fa-circle"></i> සියලුම පුවත් </a></li>
                </ul>
            </li>

           

        </ul>
    </section>
</aside>
