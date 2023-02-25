<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="<?= base_url() . "/news/create" ?>" method="post">
  <?= csrf_field() ?>

  <?= form_label("Title", "title") ?>
  <br />
  <?= form_input("title", set_value("title"), [
    "placeholder" => "Article title...",
  ]) ?>
  <br />
  <br />

  <?= form_label("Body", "body") ?>
  <br />
  <?= form_textarea("body", set_value("body"), [
    "cols" => "45",
    "rows" => "4",
    "placeholder" => "Article content...",
  ]) ?>
  <br />
  <br />

  <input type="submit" name="submit" value="CREATE NEWS ITEM">
</form>
