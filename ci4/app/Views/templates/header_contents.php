<div id="header">
  <h1><?= anchor("/", "Chase") ?></h1>
  <p>BSCS - SS211
  <p>
  <ul>
    <?php
    $pages = ["works", "guests", "news", "others"];
    foreach ($pages as $page) {
      echo "<li>";
      // manual instead of url helper because index.php in the url is ugly
      echo anchor($page, ucfirst($page));
      // echo "<a href=\"" . base_url($page) . "\">" . ucfirst($page) . "</a>";
      echo "</li>";
    }
    ?>
  </ul>
</div>
