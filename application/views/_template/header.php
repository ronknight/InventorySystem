<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="icon" href="<?=base_url()?>uploads/images/jht_logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/main_theme.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="<?= base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!--Sweetalert & Toastr-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr.css">

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script  src="<?= base_url() ?>assets/toastr.js"> </script>

    <!-- Google Font -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?=base_url()?>index.php/dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>K</b>UMS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                
                <b style="font-size: 15px"><?php echo $title;?></b><b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img style="border-radius:100%;width:30px;height:30px;" src="<?=base_url()?>uploads/images/<?=$company->logo;?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=$this->session->userdata('employee');?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img style="border-radius:100%;width:150px;height:100px;" src="<?=base_url()?>uploads/images/<?=$company->logo;?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $this->session->userdata('employee');?>

                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=base_url('index.php/users/change_password')?>" class="btn btn-default btn-flat">Change Password</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=base_url('index.php/users/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->


                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>uploads/images/jht_logo.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata('employee');?></p>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="nav-item active">
                            <a href="<?=base_url()?>index.php/dashboard" class="nav-link ">
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                    </ul>


                </li>
                <?php foreach ($parent_nav as $prow): ?>
                    <?php if ($prow->MENU_TEXT == $this->session->userdata('parent_name')) {
                        $class = 'active';
                        $open = 'menu-open';
                        ?>
                        <li class="treeview <?php echo $class . ' ' . $open; ?>">

                    <?php } else { ?>
                        <li class="treeview">
                    <?php } ?>
                    <a href="<?php if ($prow->MENU_URL == "#") {
                        echo "javascript:;";
                    } else {
                        echo base_url() . $prow->MENU_URL;
                    } ?>" class="nav-link nav-toggle">
                        <i class="fa fa-folder"></i>
                        <span class="title"><?php echo $prow->MENU_TEXT; ?></span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php $child_menus = $My_Controller->fetchsidebar_childMenuById($prow->MENU_ID); ?>
                        <?php foreach ($child_menus as $child_menuss => $val) {
                            //print_r($val->MENU_TEXT);
                            ?>
                            <?php if ($prow->MENU_ID == $val->PARENT_ID) { ?>
                                <?php if ($val->MENU_TEXT == $this->session->userdata('child_name')) {
                                    $class1 = 'active';
                                    ?>
                                    <li class="nav-item <?= $class1 ?>">
                                <?php } else { ?>
                                    <li class="nav-item">
                                <?php } ?>
                                <a href="<?php echo base_url() . "index.php/generals/getpage/" . $val->MENU_ID; ?>"
                                   class="nav-link ">
                                    <span class="title"><?php echo $val->MENU_TEXT; ?></span>
                                </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php $My_Controller->Getsave_up_delPermissions(); ?>
            <h1>

                <small></small>
            </h1>

            <ol class="breadcrumb">

                <?php


                $url = str_replace("/", "", "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

                $url_1 = str_replace("/", "", base_url() . "dashboard/");
                $url_2 = str_replace("/", "", base_url() . "index.php/dashboard/");
                $url_3 = str_replace("/", "", base_url());
                $url_4 = str_replace("/", "", base_url() . "index.php");


                if ($url == $url_1 || $url == $url_2 || $url == $url_3 || $url == $url_4) { ?>
                    <li>
                        <a href="<?= base_url(); ?>dashboard"><i class="icon-home"></i></a><span
                                class="divider-last">&nbsp;</span>
                    </li>

                <?php } else { ?>

                    <li>
                        <a href="<?= base_url(); ?>dashboard"><i class="icon-home"></i></a><span
                                class="divider">&nbsp;</span>
                    </li>

                    <?php if ($this->session->userdata('child_name')) { ?>

                        <li>
                            <?php echo $this->session->userdata('parent_name'); ?>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a style="color: green; font-weight: bold; font-style: normal"
                               href="<?php echo $this->session->userdata('child_url'); ?>"><?php echo $this->session->userdata('child_name'); ?></a><span
                                    class="divider-last">&nbsp;</span></li>

                    <?php } else {
                        if ($this->session->userdata('parent_name')) { ?>
                            <li><a href="#"><?php echo $this->session->userdata('parent_name'); ?></a>
                                <span class="divider-last">&nbsp;</span></li>

                        <?php }
                    }
                } ?>


            </ol>

        </section>

        <section class="content">
