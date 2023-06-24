<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Primary Meta Tags -->
  <title><?= $title; ?></title>
  <meta name="title" content="#">
  <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquid nemo cupiditate sed optio similique quo nam quidem obcaecati repudiandae?">
  <meta name="keywords" content="Keyword1, Keyword2, Keyword3">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="#">
  <meta property="og:title" content="#">
  <meta property="og:description" content="#">
  <meta property="og:image" content="#">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="#">
  <meta property="twitter:title" content="#">
  <meta property="twitter:description" content="#">
  <meta property="twitter:image" content="#">

  <?php include_once 'application/views/frontend/shared/css.php'; ?>

</head>

<body class="projects-template-default single single-projects postid-2300 theme-prague woocommerce-no-js  wpb-js-composer js-comp-ver-5.7 vc_responsive" data-scrollbar="">

  <?php include_once 'application/views/frontend/shared/header.php'; ?>

  <?= $content; ?>


  <?php include_once 'application/views/frontend/shared/js.php'; ?>

</body>

</html>