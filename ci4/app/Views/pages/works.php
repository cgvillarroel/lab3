<p>Not really a portfolio, just stuff I made I think are cool.</p>
<div id="carousel">
  <a href="https://github.com/chusecubr/rm-docket" target="_blank">
    <?php echo img([
      "src" => "images/carousel0.png",
      "class" => "carousel_img"
    ]) ?>
  </a>
  <a href="https://github.com/chusecubr/dotfiles" target="_blank">
    <?php echo img([
      "src" => "images/carousel1.png",
      "class" => "carousel_img"
    ]) ?>
  </a>
  <a href="https://github.com/cgvillarroel/lab3" target="_blank">
    <?php echo img([
      "src" => "images/carousel2.png",
      "class" => "carousel_img"
    ]) ?>
  </a>
</div>
<div id="carousel_nav">
  <a onclick="move_slide(-1)">&lt</a>
  <a class="carousel_btn" onclick="show_slide(0)">1</a>
  <a class="carousel_btn" onclick="show_slide(1)">2</a>
  <a class="carousel_btn" onclick="show_slide(2)">3</a>
  <a onclick="move_slide(1)">&gt</a>
</div>
<div id="carousel_caption">
  <a class="carousel_title" href="https://github.com/chusecubr/rm-docket" target="_blank">
    <h3>Docket</h3>
  </a>
  <p class="carousel_desc">An interactive desktop schedule display</p>
  <a class="carousel_title" href="https://github.com/cgvillarroel/lab3" target="_blank">
    <h3>This website</h3>
  </a>
  <p class="carousel_desc">My first project with JS, PHP, and a framework</p>
  <a class="carousel_title" href="https://github.com/chusecubr/dotfiles" target="_blank">
    <h3>dotfiles</h3>
  </a>
  <p class="carousel_desc">My WIP linux rice (configuration/setup)</p>
</div>
<hr />
<h2>What I'm working on</h2>
<p>My most recent GitHub commits.</p>
<div id="commits">
</div>
<?php
echo script_tag("js/carousel.js");
echo script_tag("js/commits.js");
?>
