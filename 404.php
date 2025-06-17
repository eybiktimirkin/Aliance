<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title><?= $page_title ?> - Aliance Production</title>
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
            <a href="avtohim.php" class="mobile-submenu-link">Автомобильная химия</a>
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

  <section class="section section-not-found">
    <div class="container">
      <div class="not-found-content-wrapper">
        <h1 class="not-found-title-big">
          404
        </h1>
        <h2 class="not-found-title">
          Страница не найдена
        </h2>
        <p class="not-found-text">
          Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
        </p>
        <button type="submit" class="button">
          Вернуться на главную
        </button>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <svg class="footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
        <div class="footer-info">
          <picture class="phone-icon">
            <source type="image/webp" srcset="img/icons/mark.webp">
            <source type="image/jpeg" srcset="img/icons/mark.jpg">
            <img src="img/icons/mark.jpg" alt="mark">
          </picture>
          <address class="footer-info-address">
            г. Москва, Холодильный пер. 4к1с8
          </address>
        </div>
        <!-- /.footer-info -->
        <div class="footer-info">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
            a.dragunov@tdaliance.ru
          </a>
        </div>
        <!-- /.footer-info -->
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <picture class="phone-icon">
              <source type="image/webp" srcset="img/icons/vk.webp">
              <source type="image/jpeg" srcset="img/icons/vk.jpg">
              <img src="img/icons/vk.jpg" alt="vk">
            </picture>
          </a>
          <a href="#" class="footer-social-link">
            <picture class="phone-icon">
              <source type="image/webp" srcset="img/icons/inst.webp">
              <source type="image/jpeg" srcset="img/icons/inst.jpg">
              <img src="img/icons/inst.jpg" alt="inst">
            </picture>
          </a>
        </div>
      </div>
    </div>
    <hr color="#EBEBF0" class="footer-seporator" />
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Косметическая продукцию</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->
    <hr color="#EBEBF0" class="footer-seporator" />
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('d.m.y') ?> «Aliance Production». Все права защищены.
          </p>
          <a href="./policy.php" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- /.footer-legal -->
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <picture class="phone-icon">
            <source type="image/webp" srcset="img/icons/ruso.webp">
            <source type="image/jpeg" srcset="img/icons/ruso.jpg">
            <img src="img/icons/ruso.jpg" alt="ruso">
          </picture>
        </div>
        <!-- /.footer-author -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>