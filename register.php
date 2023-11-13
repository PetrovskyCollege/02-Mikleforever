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

    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="main">

    <div class="window">


        <h1 class="maintext"> Регистрация  </h1>

        <form class="form" action="inc/signup.php" method="post">
            <label>ФИО</label>
            <input type="text" name="full_name" placeholder="Введите ваше полное имя">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите почтовый адрес">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Создайте пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Повторите пароль">

            <button type="submit" class="button">Зарегистрироваться</button>


        </form>
        <p class="unbutton">
            Уже есть аккаунт? <a class="unbutton2" href="index.php"> Войти </a>
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