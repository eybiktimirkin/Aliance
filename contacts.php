<?php
$page_title = "Контакты";
$header_style = "page-header-bg-grey";
include_once('header-page.php'); ?>

<section class="section section-contacts">
  <div class="container">
    <div class="footer-top">
      <a href="tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
      <div class="footer-info">
        <img src="img/icons/mark.jpg" width="24" height="24" alt="mark" class="phone-icon">
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
          <img src="img/icons/vk.jpg" alt="vk" class="footer-social-icon">
        </a>
        <a href="#" class="footer-social-link">
          <img src="img/icons/inst.jpg" alt="inst" class="footer-social-icon">
        </a>
      </div>
    </div>
  </div>
  <div class="contacts-content">
    <img src="img/contacts/map.jpg" alt="map" class="map-photo"/>
  </div>
</section>
<?php include_once('footer.php'); ?>