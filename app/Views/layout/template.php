<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="/css/style.css">

  <title><?= $title; ?></title>

</head>

<body>

  <?= $this->include('layout/menu-navigation'); ?>
  <?= $this->renderSection('content'); ?>


  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.sticky.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>