<?php 

require('../app/functions.php');

  $members = ['Nayeon', 'Jeongyeon', 'Momo'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <ul>
    <?php foreach ($members as $member) { ?>
      <li><?= h($member); ?></li>
    <?php } ?>
  </ul>
</body>
</html>