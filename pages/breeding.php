<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=”robots” content=”noindex, nofollow”/>
    <link rel="stylesheet" href="/css/style.css" />
    <!-- <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/icon.css" /> -->
    <title>Document</title>
  </head>
  <body>
  <?php 
  include "../admin/connect.php";
  include "../modules/menu/menu.php";

  $category = $_GET['category']
  ?>
    <section class="breeding">
      <div class="container">
        <h2 class="breeding__title">Пиццы</h2>
        <div class="option">
          <ul class="options__left">
            <li class="options__item options__subtitle">Фильтр:</li>
            <li class="options__item">
              <label class="options__label">
                <input
                  id="options-all"
                  type="radio" 
                  value="options__all"
                  name="filter"
                  class="real__radio"
                /> Все
                <span class="gustom__radio"></span>                
              </label>
              
            </li>
            <li class="options__item">
            <label class="options__label">
                <input
                  id="options-all"
                  type="radio" 
                  value="options__all"
                  name="filter"
                  class="real__radio"
                /> Холодные
                <span class="gustom__radio"></span>                
              </label>
            </li>
            <li class="options__item">
            <label class="options__label">
                <input
                  id="options-all"
                  type="radio" 
                  value="options__all"
                  name="filter"
                  class="real__radio"
                /> Горячие
                <span class="gustom__radio"></span>                
              </label>
            </li>
            <li class="options__mob-item">Фильтры</li>
          </ul>
          <ul class="options__right">
            <li class="options__item options__subtitle">Сортировать:</li>
            <li class="options__item">
            <label class="options__label"
                >Популярные
              <input
                id="options-popular"
                checked
                type="radio"
                value="options__popular"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              </label
              >
            </li>
            <li class="options__item">
            <label class="options__label">Дешевле
              <input
                id="options-cheap"
                type="radio"
                value="options-cheap"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              </label>
            </li>
            <li class="options__item">
            <label class="options__label options__label-last"
                >Дороже
              <input
                id="options-expensive"
                type="radio"
                value="options-expensive"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              </label
              >
            </li>
            <li class="options__mob-item">Сортировка</li>

          </ul>
        </div>
        <ul class="card">
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
            <li class="card__item">
              <a href="" class="card__link">
                  <figure class="card__box-img"><img src="/img/card/Фото.png" alt="" class="card__img"></figure>
                <p class="card__subtitle">Пиццы</p>
                <h3 class="card__title">Пицца "Рандеву"</h3>
                <p class="card__desc">говядина копч., курица копч., шампиньоны, сыр, соус 500г</p>
              </a>
              <div class="card__conrol">
               <p class="card__price">370 р.</p>
               <div class="card__choice-quantity">
                <button class="card__btn-minus">-</button>
                <input value="1" class="card__quantity-value">
                <button class="card__btn-plus">+</button>
               </div>
               <a href="#" class="card__basket"><i class="fa-regular fa-cart-plus"></i></a>
              </div>
              <button class="card__mob-basket">В корзину</button>
            </li>
        </ul>
      </div>
    </section>
    <?php include "../modules/footer/footer.php";?>
    <script src="js/toggle.js"></script>
  </body>
</html>
