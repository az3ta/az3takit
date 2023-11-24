<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php snippet('meta') ?>
  <?php snippet('favicon') ?>
  <?= css('assets/css/style.css') ?>
  <?= js('assets/js/script.js', ['defer' => true]) ?>
</head>

<body class="flex flex-col justify-between h-screen">

  <header class="p-4 bg-red-200">Header</header>