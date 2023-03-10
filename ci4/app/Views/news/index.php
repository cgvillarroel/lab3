<p>Want to submit an article? <?= anchor("news/create", "You can do so here!") ?></p>
<?php if (!empty($news) && is_array($news)) : ?>

  <?php foreach ($news as $news_item) : ?>

    <h2><?= esc($news_item['title']) ?></h2>

    <div class="main">
      <?= esc($news_item['body']) ?>
    </div>
    <p>
      <?= anchor("news/" . esc($news_item['slug'], 'url'), "View article") ?>
    </p>

  <?php endforeach ?>

<?php else : ?>

  <h2>No News</h2>

  <p>Unable to find any news for you.</p>

<?php endif ?>
