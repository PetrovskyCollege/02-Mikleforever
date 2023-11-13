<?php
  session_start();
if (!$_SESSION['user']) {
    header ('Location:index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="main">
<div class="window">

<form class="form">


    <h1> <?= $_SESSION ['user']['login']?></h1>
    <h1> <?= $_SESSION ['user']['email']?></h1>
<a href="inc/logout.php" class="logout"> Выход </a>


</form>

</div>
</div>

</body>
</html>