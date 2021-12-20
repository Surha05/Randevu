<!DOCTYPE html>
<html lang="ru">
  <?php include_once 'modules/head/head.php'; ?>
  <body> 
    <?php include 'modules/header/header.php'; ?>
    <?php include 'modules/about/about.php'; ?>
    <?php include 'modules/menu-cart/menu-cart.php'; ?>
    <?php include 'modules/working-hours/working-hours.php'; ?>
    <?php include 'modules/our-history/our-history.php'; ?>
    <?php include 'modules/banner/banner.php'; ?>
    <?php include 'modules/dishes-menu/dishes-menu.php'; ?>
    <section class="banner">
      <figure class="banner__box-img">
        <img src="img/banner/Rectangle 40.png" alt="" class="banner__img" />
      </figure>
    </section>
    <section class="delight">
      <div class="delight__left-block">
        <figure class="delight__box-img">
          <img src="img/delight/Rectangle 46.png" alt="" class="delight__img" />
        </figure>
        <figure class="delight__box-img">
          <img src="img/delight/Rectangle 47.png" alt="" class="delight__img" />
        </figure>
      </div>
      <div class="delight__right-block">
        <h2 class="delight__title">ВОСТОРГ</h2>
        <p class="delight__text">
          Мы обещаем интимную и непринужденную обстановку ужина, которая
          предлагает что-то особенное для местных и иностранных посетителей и
          гарантирует, что вы каждый раз будете получать незабываемые
          впечатления от еды.
        </p>
      </div>
    </section>
    <?php
    include "static/footer.php";
    ?>
    <!-- Подключаем тогл -->
    <script src="js/toggle.js"></script>
  </body>
</html>
