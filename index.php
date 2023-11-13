<?php
  session_start();

if ($_SESSION['user']) {
    header ('Location:profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Вход в Почтамп</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="main">

<div class="window">


<h1 class="maintext"> Вход в Почтамп  </h1>

<form class="form" action="inc/signin.php" method="post">
   <label>Логин</label>
    <input type="text" name="login" placeholder="Номер телефона, адрес почты">
    <label>Пароль</label>
    <input type="password" name="password">
    <button type="submit" class="button">Войти</button>


</form>
    <p class="unbutton">
        Нет учётной записи? <a class="unbutton2" href="register.php"> Регистрация </a>
    </p>
    <?php
    if ($_SESSION['message']){
        echo '<p class="message">'.$_SESSION['message'].' </p>';
    }
    unset($_SESSION['message']);

    ?>


</div>

</div>


</body>
</html>