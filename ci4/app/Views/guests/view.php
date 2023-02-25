<h2><?= esc($guests['name']) ?></h2>
<h3>Email</h3>
<p><?= mailto(esc($guests['email'])) ?></p>
<h3>Website</h3>
<p><?= anchor(esc($guests['website'])) ?></p>
<h3>Comment</h3>
<p><?= esc($guests['comment']) ?></p>
<h3>Gender</h3>
<p><?= ucfirst(esc($guests['gender'])) ?></p>
