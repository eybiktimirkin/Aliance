<?php
$page_title = "Автохимия AG-TECH";
$header_style = "page-header-bg-grey";
include_once('header-page.php'); ?>

<section class="section autohim-ag-section">
  <div class="container">
    <div class="autohim-ag-content-wrapper">
      <img src="img/avtohim/autohim-ag.jpg" alt="autohim-ag" class="autohim-photo-ag" />
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
    <img src="./img/avtohim/book.jpg" alt="book" class="catalog-image" />
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
          <svg width="24" height="24" class="icon avtohim-prod-list-icon">
            <use href="./img/sprite.svg#him"></use>
          </svg>
          Полное описание товаров
        </li>
        <li class="avtohim-prod-item">
          <svg width="24" height="24" class="icon avtohim-prod-list-icon">
            <use href="./img/sprite.svg#car"></use>
          </svg>
          Актуальные цены
        </li>
        <li class="avtohim-prod-item">
          <svg width="24" height="24" class="icon avtohim-prod-list-icon">
            <use href="./img/sprite.svg#brush"></use>
          </svg>
          Лаки и краски
        </li>
        <li class="avtohim-prod-item">
          <svg width="24" height="24" class="icon avtohim-prod-list-icon">
            <use href="./img/sprite.svg#him"></use>
          </svg>
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