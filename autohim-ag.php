<?php
$page_title = "Автохимия AG-TECH";
$header_style = "page-header-bg-grey";
include_once('header-page.php'); ?>

<section class="section autohim-ag-section">
  <div class="container">
    <div class="autohim-ag-content-wrapper">
      <picture class="autohim-photo-ag">
        <source type="image/webp" srcset="img/avtohim/autohim-ag.webp">
        <source type="image/jpeg" srcset="img/avtohim/autohim-ag.jpg">
        <img src="img/avtohim/autohim-ag.jpg" alt="autohim-ag">
      </picture>
      <div class="autohim-ag-content">
        <div class="seporator"></div>
        <h2 class="section-title autohim-ag-title">Собственное производство автохимия AG-Tech</h2>
        <p class="autohim-ag-text">
          Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость
          приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут
          описаны максимально подробно.
          <br>
          <br>
          Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный
          количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров,
          соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает
          широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы
          политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения
          представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция
          общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить
          качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на
          привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
        </p>
      </div>
    </div>
    <?php include_once('template-parts/features-block.php') ?>
  </div>
</section>
<section class="section section-catalog">
  <div class="bg-grey catalog-wrapper">
    <picture class="catalog-image">
      <source type="image/webp" srcset="img/avtohim/book.webp">
      <source type="image/jpeg" srcset="img/avtohim/book.png">
      <img src="img/avtohim/book.png" alt="book">
    </picture>
    <div class="catalog-form container">
      <div class="seporator"></div>
      <h2 class="section-title avtohim-prod-title">Генеральный дистрибьютор премиальной
        автохимии</h2>
      <p class="avtohim-prod-text">
        Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы
        этики и морали.
      </p>
      <ul class="avtohim-prod-list">
        <li class="avtohim-prod-item">
          <picture class="icon avtohim-prod-list-icon">
            <source type="image/webp" srcset="img/icons/him.webp">
            <source type="image/jpeg" srcset="img/icons/him.jpg">
            <img src="img/icons/him.jpg" alt="him">
          </picture>
          Полное описание товаров
        </li>
        <li class="avtohim-prod-item">
          <picture class="icon avtohim-prod-list-icon">
            <source type="image/webp" srcset="img/icons/car.webp">
            <source type="image/jpeg" srcset="img/icons/car.jpg">
            <img src="img/icons/car.jpg" alt="car">
          </picture>
          Актуальные цены
        </li>
        <li class="avtohim-prod-item">
          <picture class="icon avtohim-prod-list-icon">
            <source type="image/webp" srcset="img/icons/brush.webp">
            <source type="image/jpeg" srcset="img/icons/brush.jpg">
            <img src="img/icons/brush.jpg" alt="brush">
          </picture>
          Лаки и краски
        </li>
        <li class="avtohim-prod-item">
          <picture class="icon avtohim-prod-list-icon">
            <source type="image/webp" srcset="img/icons/him.webp">
            <source type="image/jpeg" srcset="img/icons/him.jpg">
            <img src="img/icons/him.jpg" alt="him">
          </picture>
          Химические производства
        </li>
      </ul>
      <button type="submit" class="button catalog-button">
        Скачать каталог
      </button>
    </div>
  </div>
</section>
<?php include_once('template-parts/research-block.php') ?>
<?php $block_title = "схема работы";
include_once("./template-parts/steps-block.php") ?>
<?php include_once("./template-parts/clients-block.php") ?>
<?php include_once('footer.php'); ?>