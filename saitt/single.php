<?php include ("path.php"); ?>
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

<!--main-->
<div class="container">
  <div class="contetn row">
    <!-- main content-->
    <div class ="main-content col-md-9 col-12">
      <h2>В Казани открылся Центр развития талантов Ак Барс Банка</h2>
      <div class="single_post row">
        <div class="img col-12 ">
          <img src="assets/images/31.jpg" alt="" class="img-single-thumbnail">
        </div>
        <div class="single_post_text col-12">
         <p>Многофункциональный учебный центр представляет собой площадку для обучения и развития сотрудников, клиентов и партнеров банка, участия в социальных проектах, формирования и реализации программ адаптации персонала банка.</p>
          <p>Центр развития талантов занимает два этажа офисного центра «Мастер». Это пространство используется для проведения тренингов, семинаров, хакатонов, стратегических сессий, открытых лекций, практик и лабораторий. 10 тренинговых аудиторий и 4 компьютерных класса способны вместить 400 учащихся. Кроме комнат для занятий в центре оборудовано место для коворкинга, есть комнаты для собеседований и вебинар-студии. Аудитории центра оснащены необходимым оборудованием для сопровождения эффективного обучения.</p>
          <p>Мастер-классы и открытые лекции будут проводить руководители и эксперты банка, штатные бизнес-тренеры и внешние спикеры, в числе которых преподаватели вузов, представители лидирующих компаний рынка.</p>
          <p>«Центр развития талантов сочетает в себе три функции: подбор, оценку и обучение персонала, в Казани подобных структур нет, — объясняет директор центра развития талантов Александр Хаметзянов. — Наша главная цель — обеспечить банк лучшими кадрами и оказать поддержку в их последующем развитии. Но также мы нацелены на развитие наших партнеров и клиентов. Мы участвуем и в социальных проектах. Например, проводим занятия в рамках федерального проекта «Онлайн-уроки финансовой грамотности» организованному Центральным банком Российской Федерации. Мы участвовали в форуме «Сэлэт» и будем продолжать это делать. Есть еще интересные проекты, но это пока секрет».</p>
          <p>Первое открытое образовательное мероприятие — фестиваль тренингов AkBarsNight — состоялось 7 сентября. Бизнес-тренеры банка провели девять двухчасовых практических занятий по личностному росту и саморазвитию. Участниками фестиваля стали более 300 человек — cотрудники банка, представители компаний-партнеров и жители Казани. В формате игр, квестов, тренингов, воркшопов и интерактивов они учились вести переговоры, определять типологию личности, грамотно планировать рабочий день, работать в режиме многозадачности.</p>

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
          <li><a href="#">Карьерный рост</a></li>
          <li><a href="#">Вакансии</a></li>
          <li><a href="#">Работа с клиентами</a></li>
          <li><a href="#">Работа в офисе</a></li>
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