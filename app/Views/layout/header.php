<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>EVI - BPKP</title>

    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/assets/img/favicon.png">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/plugins/icons/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/css/style.css">
    <!-- datatables  -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/plugins/datatables/datatables.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets/css/bootstrap-datetimepicker.min.css">
</head>


<body>

    <div class="main-wrapper">

        <div class="header header-one">

            <div class="header-left header-left-one">
                <a href="index.html" class="logo">
                    <img src="<?= base_url(); ?>/assets/assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="white-logo">
                    <img src="<?= base_url(); ?>/assets/assets/img/logo-white.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="<?= base_url(); ?>/assets/assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>


            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
            </a>


            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav nav-tabs user-menu">


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="<?= base_url(); ?>/assets/assets/img/profiles/avatar-01.jpg" alt="">
                            <span class="status online"></span>
                        </span>
                        <span><?= session()->get('name') ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i> Profile</a>
                        <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i> Settings</a>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i data-feather="log-out" class="me-1"></i> Logout</a>
                    </div>
                </li>

            </ul>

        </div>