<!doctype html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html lang="en">

<head>
  <title>CodeIgniter Tutorial</title>
  <?php
  helper("html");
  echo link_tag("css/style.css");
  ?>
</head>

<body>
  <div class="content">
    <?php include "header_contents.php" ?>
    <hr />
    <h1><?= esc($title) ?></h1>
