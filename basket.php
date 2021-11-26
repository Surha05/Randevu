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
              <label class="basket__label">
                <input class="basket__check-box" type="checkbox" />
                <span class="icon-check"></span>
              </label>
              <div class="basket__content-left">
                <figure class="basket__figure-box">
                  <img src="img/basket/charcoal-chiken.png" alt="" class="charcoal-chiken">
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
            </ul>

             <!-- <ul class="basket__content-right">
              <li class="basket__right-item">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">600 руб.</p>
             </li>
             <li class="basket__right-item">
                <div class="basket__choice-quantity">
                  <button class="basket__btn-minus">-</button>
                  <input value="1" class="basket__quantity-value">
                  <button class="basket__btn-plus">+</button>
                </div>
                <p class="basket__price">600 руб.</p>
             </li> -->
           </ul>
          </div>
        </div>
        <div class="basket-container__right">
         <h2 class="basket__order-title">Ваш заказ
         </h2>
         <div class="basket__order-box">
           <ul class="basket__order-name">
             <li class="basket__order-item">Наименований</li>
             <li class="basket__order-item">4</li>
           </ul>
           <ul class="basket__order-cost">
             <li class="basket__order-item">Стоимость</li>
             <li class="basket__order-item">1940 Р</li>
           </ul>
           <ul class="basket__order-delivery">
             <li class="basket__order-item">Доставка</li>
             <li class="basket__order-item">100 Р</li>
           </ul>
           <ul class="basket__order-reduction">
             <li class="basket__order-item">Скидка</li>
             <li class="basket__order-item">0 Р</li>
           </ul>
           <ul class="basket__order-all">
             <li class="basket__order-item">Итого</li>
             <li class="basket__order-item">1940 Р</li>
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