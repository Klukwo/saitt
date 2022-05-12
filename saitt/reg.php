<?php include "path.php";
include "app/controllers/users.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome-->
    <script src="https://kit.fontawesome.com/f9efde2062.js" crossorigin="anonymous"></script>
    <!--styli dlya css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Test sait</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- end header-->

<!--registratsiya-->

<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.php">
        <h2>Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p>  <?php include "app/helps/errorInfo.php"; ?></p>
        </div>
    <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
        <label for="formGroupExampleInput" class="form-label">Псевдоним</label>
        <input name ="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Мухамадиев Расим">
    </div>
        <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
        <input  name = "mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Мы никогда не будем делиться вашей электронной почтой с кем-либо еще.</div>
    </div>
        <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
    </div>
        <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
        <label for="exampleInputPassword2" class="form-label"> Повторите пароль</label>
        <input  name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
    </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
    <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
            <a href="log.php">Войти</a>
        </div>
</form>
</div>
<!--footer-->
<?php include("app/include/footer.php"); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>