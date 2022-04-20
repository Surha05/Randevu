

<section class="menu-cart">
  <h2 class="menu-cart__title">МЕНЮ</h2>
  <div class="menu-cart-wrapper container">
    <div class="menu-cart__container">
      <?php
      $category_list = mysqli_query($connection, 'SELECT * FROM `categories` ORDER BY `id`');
      while ( $category_item = mysqli_fetch_assoc($category_list) ) {
        echo '
        <a href="/pages/breeding.php?category='.$category_item['category_name'].'" class="menu-cart__link">
          <div class="menu-cart__li">
            <figure class="menu-cart__figure"><img src="img/categories/'.$category_item['category_photo'].'" class="menu-cart__img"></figure>
            <h4 class="menu-cart__h4">'.$category_item['category_name'].'</h4>
          </div>
        </a>
        ';  
      }
      ?>
      <!-- <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Пицца</h4>
        </div>
      </a> -->
      <!-- <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Шашлыки</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Супы</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Завтраки</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Гарниры</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Роллы</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Салаты</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Чуду</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Мучное</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Десерты</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Напитки</h4>
        </div>
      </a>
      <a href="/pages/breeding.php" class="menu-cart__link">
        <div class="menu-cart__li">
          <figure class="menu-cart__figure"><img src="img/menu/menu-img.png" alt="" class="menu-cart__img"></figure>
          <h4 class="menu-cart__h4">Мясные</h4>
        </div>
      </a> -->
    </div>
  </div>
  <!-- <div class="">
    <div class="menu-cart__wrapper container">
      <div class="menu-cart__wrapper-top"></div>
      <div class="menu-cart__wrapper-bottom"></div>
      <ul class="menu-cart__container">
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ПИЦЦА</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ШАШЛЫКИ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">СУПЫ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ЗАВТРАКИ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ГАРНИРЫ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">МЯСНЫЕ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">РОЛЛЫ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">САЛАТЫ</p>
          </a>
          <p class="menu-card__line"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ЧУДУ И МУЧНОЕ</p>
          </a>
          <p class="menu-card__line menu-card__line-chudu"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ДЕСЕРТЫ</p>
          </a>
          <p class="menu-card__line menu-card__line-desert"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">НАПИТКИ</p>
          </a>
          <p class="menu-card__line menu-card__line-drink"></p>
        </li>
        <li class="menu-cart__item">
          <a href="/pages/breeding.php" class="menu-cart__link">
            <figure class="menu-cart__img-box">
              <img src="img/меню/menu-img.png" alt="" class="menu-card__img" />
            </figure>
            <p class="menu-card__name">ЧАЙ</p>
          </a>
          <p class="menu-card__line menu-card__line-tea"></p>
        </li>
      </ul>
    </div>
  </div> -->
</section>