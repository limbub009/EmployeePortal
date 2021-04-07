<?php
  require_once('DB.php');

  $db = new DB();
  $data = $db->viewData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Live Search</title>
</head>

<body>

  <h1>Live Search</h1>

  <form action="search.php" method="POST">
    <input type="text" name="name" placeholder="Search Here..." id="searchBox">
  </form>

  <ul id="dataViewer">
    <?php foreach($data as $li) {?>
    <li><?php echo $li["name"]; ?></li>
  <?php } ?>
  </ul>

</body>
</html>
