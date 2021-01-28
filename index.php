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
  ?>
  <h2>Lunghezza paragrafo</h2>
  <p><?php
      $textLength = strlen($text . ' ' . $badword);
      echo $textLength; ?> </p>
  <h2>Paragrafo</h2>
  <p><?php echo str_replace($badword, '***', $text . ' ' . $badword); ?></p>

</body>

</html>