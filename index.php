<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Aliance Production</title>
</head>

<body class="front-page">
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="./about.php" class="mobile-menu-link"> О компании </a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contracts.php" class="mobile-menu-link"> Контрактное производство </a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="./avtohim.php">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./trademarks.php" class="mobile-menu-link"> Собственные торговые марки </a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./404.php" class="mobile-menu-link"> Новости </a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="./contacts.php" class="mobile-menu-link"> Контакты </a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <img src="img/icons/mark.jpg" width="24" height="24" alt="mark" class="phone-icon">
      <address class="mobile-info-address">
        г. Москва, Холодильный пер. 4к1с8
      </address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>
    <div class="mobile-info-link">
      <a href="#" class="footer-social-link">
        <img src="img/icons/vk.jpg" alt="vk" class="footer-social-icon">
      </a>
      <a href="#" class="footer-social-link">
        <img src="img/icons/inst.jpg" alt="inst" class="footer-social-icon">
    </div>
    <!-- /.mobile-info -->
  </div>
  <nav class="navbar">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="header-logo-svg logo-light" width="140" height="44">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="header-logo-svg logo-dark" width="140" height="44">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="./about.php" class="header-nav-link"> О компании </a>
      </li>
      <li class="header-nav-item">
        <a href="./contracts.php" class="header-nav-link"> Контрактное производство </a>
      </li>
      <li class="header-nav-item">
        <a href="./trademarks.php" class="header-nav-link"> Собственные торговые марки </a>
      </li>
      <li class="header-nav-item">
        <a href="./404.php" class="header-nav-link"> Новости </a>
      </li>
      <li class="header-nav-item">
        <a href="./contacts.php" class="header-nav-link"> Контакты </a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">
        +7 (499) 686-10-14
      </a>
    </div>
    <!-- /.header-phone -->
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text"> Получить консультацию </span>
    </button>
  </nav>
  <!-- /.navbar -->
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">
          Подробнее о компании
        </button>
      </div>
      <!-- /.header-content -->

      <!-- основной блок слайдера -->
      <div class="swiper features-slider">
        <!-- обертка слайдера -->
        <ul class="swiper-wrapper header-features">
          <!-- слайды -->
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#certificate"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#control"></use>
            </svg>
            <p class="header-features-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="header-features-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-features-text">Оперативное производство</p>
          </li>
        </ul>
        <!-- кнопки навигации -->
        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->
      </div>
    </div>
    <!-- /.container -->
  </header>
  <?php $block_title = "схема работы";
  include_once("./template-parts/steps-block.php") ?>
  <?php $block_title = "контрактное производство";
  include_once("./template-parts/contracts-block.php") ?>
  <?php $block_title = "собственные торговые марки";
  include_once("./template-parts/trademarks-block.php") ?>
  <section class="section founder">
    <img src="img/founder.jpg" alt="founder" class="founder-photo" />
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="seporator"></div>
          <h2 class="section-title">отношение к делу и к клиентам</h2>
          <p class="founder-text">
            Кстати, интерактивные прототипы описаны максимально подробно.
            Повседневная практика показывает, что укрепление и развитие
            внутренней структуры говорит о возможностях соответствующих
            условий активизации. Внезапно, независимые государства, которые
            представляют собой яркий пример континентально-европейского типа
            политической культуры, будут подвергнуты целой серии независимых
            исследований. С учётом сложившейся международной обстановки,
            синтетическое тестирование выявляет срочную потребность системы
            массового участия. А ещё действия представителей оппозиции,
            превозмогая сложившуюся непростую экономическую ситуацию, в равной
            степени предоставлены сами себе. Не следует, однако, забывать, что
            выбранный нами инновационный путь в значительной степени
            обусловливает важность дальнейших направлений развития.
          </p>
          <a href="#" class="button-link">Подробнее о компании</a>
        </div>
        <!-- /.founder-content -->
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section-founder -->
  <?php include_once("./template-parts/clients-block.php") ?>
  <section class="section blog">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">блог экспертов в области производства</h2>
      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/pexels-tima-miroshnichenko-9574410 2.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса
              функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса
              функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
        </div>
        <div class="blog-slider-footer">
          <a href="blog.php" class="button-link">Весь блог</a>
          <div class="blog-buttons primary-buttons-wrapper">
            <!-- кнопки переключения -->
            <div class="blog-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section blog -->

  <?php include_once('footer.php'); ?>