<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>IHSAO 21 - <?= isset($PageTitle) ? $PageTitle : "Default Title" ?></title>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../src/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../src/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../src/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/src/public/img/favicon/site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="assets/styles/tailwind.css" />

    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')) {
        customPageHeader();
    } ?>
</head>