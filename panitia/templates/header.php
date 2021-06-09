<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>IHSAO 21 - <?= isset($PageTitle) ? $PageTitle : "Default Title" ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/src/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/src/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/src/public/img/favicon/site.webmanifest">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/panitia/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/panitia/assets/styles/tailwind.css" />

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!--Button Extension Datatables CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/panitia/assets/styles/datatables-custom.css">

    <!-- Select 2 Js -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/panitia/assets/styles/custom.css">

</head>