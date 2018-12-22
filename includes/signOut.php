<?php
if (!isset($_SESSION)) {
    session_start();
}

?>
<div class="navbar-custom-menu">
    <div style="float: left;padding: 15px">
       
<!--        <span style="color: #cccccc">Branch :</span>
            <span></span>
          
        } -->
     
    </div>
    <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../uploads/blank_user_icon.png" class="user-image" alt="User Image">
                <span class="hidden-xs" style="color: #999999"></span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="../uploads/blank_user_icon.png" class="img-circle" alt="User Image">
                    <p>
                        Administrator
                        
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="LogOut.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
    </ul>
</div>