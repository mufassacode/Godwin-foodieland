<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>
    <div>
      <h1>Hi<span><?= $_SESSION['name']; ?></span></h1>
      <button onclick="window.location.href='logout.php'">logout</button>
    </div>

</body>
</html>