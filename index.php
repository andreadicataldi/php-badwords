<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $text = 'PHP è un linguaggio';
  $badword = $_GET['badword'];
  $badword = '***'
  ?>
  <h1><?php var_dump($text . ' ' . $badword); ?></h1>
</body>

</html>