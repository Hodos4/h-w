<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-4">
    <?php
         if($_COOKIE['user'] == ''):
     ?>
    <div class="row">
    <div class="col">
        <h1>Форма регистрации</h1>
        <form action="check.php" method="post">
        <input type="text" class="form-control "name="login" id="login" placeholder="Введите логин"><br>
        <input type="text" class="form-control "name="name" id="name" placeholder="Введите имя"><br>
        <input type="password" class="form-control "name="pass" id="pass" placeholder="Введите пароль"><br>
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>
      </form>
   </div>
   <div class="col">
       <h1>Форма авторизации</h1>
       <form action="auth.php" method="post">
       <input type="text" class="form-control "name="login" id="login" placeholder="Введите логин"><br>
       <input type="password" class="form-control "name="pass" id="pass" placeholder="Введите пароль"><br>
       <button type="submit" class="btn btn-success">Авторизоваться</button>
     </form>
   </div>
<?php else: ?>
<p><a href="/сайт.html">сайт</a></p>
<p><a href="/exit.php">авторизоваться заново</a></p>
 <?php endif; ?>

  </div>
 </div>
</body>
</html>
