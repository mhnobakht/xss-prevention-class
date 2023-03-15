<?php
include_once 'XSSPrevention.php';
XSSPrevention::CSP();
if(isset($_POST['name'])) {
    $name = XSSPrevention::sanitize($_POST['name']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Show</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
  <div class="columns is-centered">
    <div class="column is-half has-text-centered">
      <h2 class="title">
        <?php echo $name; ?>
      </h2>
    </div>
  </div>
</body>
</html>
