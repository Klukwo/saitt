<header class="container-fluid">
    <div class="container">
        <div class ="row">
            <div class = "col-4">
                <div class="background">
                    <div class="blur"></div>
                </div>
                <h1>
                    <a href="<?php echo BASE_URL ?>">AkBarsTalented</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Главная</a></li>
                    <li><a href="#">Направление</a></li>
                    <li><a href="#">О нас</a></li>
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="#">
                                <?php echo $_SESSION['login'];?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']): ?>
                                <li> <a href="#">Админ панель</a></li>
                                <?php endif;?>
                                <li> <a href="<?php echo BASE_URL . "logout.php"; ?> ">Выход</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "log.php";?>">
                                Войти
                            </a>
                        <?php endif;?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>