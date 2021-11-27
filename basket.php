<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”robots” content=”noindex, nofollow”/>
  <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="icon.css" />
  <title>Document</title>
</head>
<body>
  <?php
  include "static/menu.php";
  ?>
  <section class="basket">
    <div class="container">
      <h2 class="basket__title">Корзина</h2>
      <div class="basket-container">
        <div class="basket-container__left">
          <div class="basket-control">
            <label class="basket__label">
              <input class="basket__check-box" type="checkbox" />
              <span class="icon-check"></span>
              <span class="basket__option__all">Выбрать Все</span> 
            </label>
            <p class="basket__option-delete">Удалить выбранные</p>
          </div>
          <div class="basket-content">          
            <ul class="basket__row">
             <li class="basket__content-item">
              <div class="basket__content-left">
                <label class="basket__label">
                  <input class="basket__check-box" type="checkbox" />
                  <span class="icon-check"></span>
                </label>
                <figure class="basket__figure-box">
                  <img src="img/basket/charcoal-chiken.png" alt="" class="basket__img">
                </figure>
                <div class="basket__content-desc">
                  <p class="basket__content-subtitle">Шашлыки</p>
                  <p class="basket__content-dish">Курица на углях</p>
                </div>
              </div>
              <div class="basket__content-right">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">600 руб.</p>
              </div>
             </li>
             <li class="basket__content-item">
              <div class="basket__content-left">
                <label class="basket__label">
                  <input class="basket__check-box" type="checkbox" />
                  <span class="icon-check"></span>
                </label>
                <figure class="basket__figure-box">
                  <img src="img/basket/chudu.png" alt="" class="basket__img">
                </figure>
                <div class="basket__content-desc">
                  <p class="basket__content-subtitle">Чуду и мучное</p>
                  <p class="basket__content-dish">Чуду с говядиной и картофелем</p>
                </div>
              </div>
              <div class="basket__content-right">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">370 руб.</p>
              </div>
             </li>
             <li class="basket__content-item">
              <div class="basket__content-left">
                <label class="basket__label">
                  <input class="basket__check-box" type="checkbox" />
                  <span class="icon-check"></span>
                </label>
                <figure class="basket__figure-box">
                  <img src="img/basket/charcoal-chiken.png" alt="" class="basket__img">
                </figure>
                <div class="basket__content-desc">
                  <p class="basket__content-subtitle">Шашлыки</p>
                  <p class="basket__content-dish">Курица на углях</p>
                </div>
              </div>
              <div class="basket__content-right">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">600 руб.</p>
              </div>
             </li>
             <li class="basket__content-item">
              <div class="basket__content-left">
                <label class="basket__label">
                  <input class="basket__check-box" type="checkbox" />
                  <span class="icon-check"></span>
                </label>
                <figure class="basket__figure-box">
                  <img src="img/basket/chudu.png" alt="" class="basket__img">
                </figure>
                <div class="basket__content-desc">
                  <p class="basket__content-subtitle">Чуду и мучное</p>
                  <p class="basket__content-dish">Чуду с говядиной и картофелем</p>
                </div>
              </div>
              <div class="basket__content-right">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">370 руб.</p>
              </div>
             </li>
            </ul>
          </div>
        </div>
        <div class="basket-container__right">
          <div class="basket__order">
            <h2 class="basket__order-title">Ваш заказ
            </h2>
            <ul class="basket__order-items">
              <li class="basket__order-item">
                <p class="basket__order-name">Наименований</p>
                <p class="basket__order-price">4</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-cost">Стоимость</p>
                <p class="basket__order-price">1940 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-delivery">Доставка</p>
                <p class="basket__order-price">100</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-reduction">Скидка</p>
                <p class="basket__order-price">0</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-all">Итого</p>
                <p class="basket__order-price">1940</p>
              </li>
            </ul>
           <button class="basket__order-btn">Оформить заказ</button>
           <p class="basket__order-consent">Нажимая на кнопку, я даю свое согласие на обработку персональных данных</p>
        </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include "static/footer.php";
  ?>
</body>
</html>