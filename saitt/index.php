<?php
    include 'path.php';
    include 'app/controllers/topics.php';
?>

<!doctype html>
<html lang="en">
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

<!--наша карусель-->
<div class="container">
  <div class ="row">
    <h2 class ="slider-title">Главные события</h2>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href="https://www.akbars.ru/career/start/">Карьера в Ак Барс Банке</a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href="https://www.akbars.ru/university/">Корпоративный университет</a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href="https://www.akbars.ru/career/vacancies?cityId=88">Удачный старт</a></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!--karusel` end-->
<!--main-->
<div class="container">
  <div class="contetn row">
    <!-- main content-->
      <div class ="main-content col-md-9 col-12">
        <h2>Последние публикации</h2>
          <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="assets/images/31.jpg" alt="" class="img-thumbnail">
            </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="single.php">В Казани открылся Центр развития талантов Ак Барс Банка</a>
            </h3>
            <p class="preview-text">
              20 апреля в Москве состоялась торжественная церемония награждения лауреатов премии СХ WORLD AWARDS.
            </p>
            <i class="far fa-calendar">April 23, 2022</i>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/31p.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Режим работы Ак Барс Банка в праздник Весны и Труда</a>
            </h3>
            <p class="preview-text">
              Сообщаем вам об изменениях в графике работы отделений банка.
              Режим обслуживания физических лиц:...
            </p>
            <i class="far fa-calendar">April 23, 2022</i>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/1p.jpg" alt="" class="img-thumbnail">
          </div>
        <div class="post_text col-12 col-md-8">
          <h3>
            <a href="#">Ак Барс Банк проведет бесплатный вебинар по факторингу</a>
          </h3>
          <p class="preview-text">
            Ак Барс Банк проведет бесплатный вебинар на тему «Факторинг — финансирование цепочки поставок»...
          </p>
          <i class="far fa-calendar">April 23, 2022</i>
        </div>
      </div>
</div>
    <!-- sidebar-->
    <div class="sidebar col-md-3 col-12">
      <div class="section search">
         <h3>Поиск</h3>
        <form action="/" method="post">
          <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
        </form>
      </div>
      <div class="section topics">
        <h3>Актуальные темы</h3>
        <ul>
            <?php foreach ($topics as $key => $topic): ?>
          <li>
              <a href="#"><?=$topic['name'];?></a>
          </li>
            <?php endforeach;?>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--main end-->
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