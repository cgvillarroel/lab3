<div id="header">
  <h1><?= anchor("/", "Chase") ?></h1>
  <p>BSCS - SS211
  <p>
  <ul>
    <?php
    $pages = ["works", "guests", "news", "others"];
    foreach ($pages as $page) {
      echo "<li>";
      echo anchor($page, ucfirst($page));
      echo "</li>";
    }
    ?>
  </ul>
</div>
