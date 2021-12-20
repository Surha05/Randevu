<!DOCTYPE html>
<html lang="ru">
  <?php include_once 'modules/head/head.php'; ?>
  <body> 
    <?php include 'modules/header/header.php'; ?>
    <?php include 'modules/about/about.php'; ?>
    <?php include 'modules/menu-cart/menu-cart.php'; ?>
    <?php include 'modules/working-hours/working-hours.php'; ?>
    <section class="our-history">
      <div class="our-history__left-block">
        <figure class="our-history__box-img">
          <img
            src="img/our-history/Rectangle 37.png"
            alt=""
            class="our-history__img"
          />
        </figure>
      </div>
      <div class="our-history__right-block">
        <h2 class="our-history__title">НАША ИСТОРИЯ</h2>
        <p class="our-history__text">
          Рандеву - это ресторан, бар, и кофейня, расположенная на оживленной
          улице Дербента. С застекленным фасадом здания, с прекрасным видом.
        </p>
      </div>
    </section>
    <section class="banner">
      <figure class="banner__box-img">
        <img src="img/banner/Rectangle 36.png" alt="" class="banner__img" />
      </figure>
    </section>
    <section class="dishes-menu">
      <div class="dishes-menu__left-block">
        <h2 class="dishes-menu__title">МЕНЮ</h2>
        <p class="dishes-menu__icon">*</p>
        <p class="dishes-menu__text">
          Для тех, кто ценит истинное наслаждение едой приходите по соседству и
          насыщайте свои желания нашими постоянно меняющимися небольшими
          тарелками, вдохновленными интернациональными и сезонными блюдами. Мы
          любим готовить много разной еды для вас.
        </p>
      </div>
      <div class="dishes-menu__right-block">
        <figure class="dishes-menu__box-img">
          <img
            src="img/dishes-menu/Rectangle 39.png"
            alt=""
            class="dishes-menu__img"
          />
        </figure>
        <figure class="dishes-menu__box-img">
          <img
            src="img/dishes-menu/Rectangle 42.png"
            alt=""
            class="dishes-menu__img"
          />
        </figure>
        <figure class="dishes-menu__box-img">
          <img
            src="img/dishes-menu/Rectangle 41.png"
            alt=""
            class="dishes-menu__img"
          />
        </figure>
        <figure class="dishes-menu__box-img">
          <img
            src="img/dishes-menu/Rectangle 43.png"
            alt=""
            class="dishes-menu__img"
          />
        </figure>
      </div>
    </section>
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
