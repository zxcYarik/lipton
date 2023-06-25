<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Форма регистрации</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        if (empty($_COOKIE['user'])) :
        ?>
            <div class="row">
                <div class="col">
                    <h1>Форма регистрации</h1>
                    <form action="/validation-form/check.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"></input><br>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"> <br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
                        <button class="btn btn-success" type="sudmit">Зарегестрировать</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Форма авторизации</h1>
                    <form action="/validation-form/autch.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"> <br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"> <br>
                        <button class="btn btn-success" type="sudmit">Зарегестрировать</button>
                    </form>
                </div>
            <?php else : ?>
                <p>Привет <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="/exit.php"> здесь</a></p>
            <?php endif; ?>
            <?//$gavno = array(1,2,3,4,5,6,7);?>t
            <!-- <pre><?var_dump($gavno);?></pre> -->
</body>

</html>