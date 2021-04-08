<?php
  require_once('DB.php');

  $db = new DB();
  $data = $db->viewData();

  // var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Live Search</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <h1>Live Search</h1>

  <form action="search.php" method="POST">
    <input type="text" name="name" placeholder="Search Here..."
    id="searchBox" oninput=search(this.value)>
  </form>

  <ul id="dataViewer">
  <?php foreach ($data as $i) { ?>
    <li><?php echo $i["name"]; ?></li>
  <?php } ?>
  </ul>

  <script src="main.js"></script>

</body>
</html>
