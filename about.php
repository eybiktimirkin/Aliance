<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>О компании - Aliance Production</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link"> О компании </a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link"> Контрактное производство </a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link"> Собственные торговые марки </a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link"> Новости </a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link"> Контакты </a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
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
        <a href="img/sprite.svg#vk" class="mobile-link"></a>
        <a href="img/sprite.svg#inst" class="mobile-link"></a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <nav class="navbar navbar-light">
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
          <a href="#" class="header-nav-link"> Контрактное производство </a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link"> Собственные торговые марки </a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link"> Новости </a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link"> Контакты </a>
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
    <section class="about">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="about-title">о компании</h2>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/index.html" class="breadcrumb-text">
              Главная
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="/about.php" class="breadcrumb-text">
              О компании
            </a>
          </li>
        </ol>
      </div>
    </section>
    <!-- /.about -->

    <?php include_once('footer.php');?>