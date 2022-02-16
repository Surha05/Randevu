<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name=”robots” content=”noindex, nofollow”/>
  <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="icon.css" />
  <title>Document</title>
</head>
<body>
  <?php
  include "../modules/menu/menu.php";
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
          <div class="form-wrapper"> 
            <h2 class="form__title">Данные покупателя</h2>
            <div class="form form-buer">
              <form action="#" id="form" class="form__body">
                <div class="form__box-top">
                  <div class="form__item">
						        <label for="formName" class="form__label">Имя<span>*</span></label>
						        <input id="formName" type="text" placeholder="Имя" name="name" class="form__input">
					        </div>
                  <div class="form__item">
						        <label for="formPhone" class="form__label">Телефон<span>*</span></label>
						        <input id="formPhone" type="text" name="phone" class="form__input">
					        </div>
                </div>
                <div class="form__box-bottom">
                  <div class="form__item">
						        <label for="formEmail" class="form__label">E-mail:</label>
						        <input id="formEmail" type="text" placeholder="E-mail"  name="email" class="form__input">
					        </div>
                </div> 
              </form>
            </div>
            <h2 class="form__title form__title-delivery">Cпособ доставки</h2>
            <div class="form form-delivery">
              <div class="form-control__pickup">
                <label class="form-control__label">
                  <input class="form__real-radio" type="radio"                   name="delivery"/>
                  Самовывоз
                  <span class="form__gustom-radio"></span>
                </label>
                <p class="form-control__text">Самовывоз осуществляется по адресу: г. Дербент ул. Гагарина 10</p>
              </div>
              <div class="form-control__delivery">
                <label class="form-control__label">
                  <input class="form__real-radio" type="radio"                   name="delivery"/>                  Доставка
                  <span class="form__gustom-radio"></span>
                </label>
                <div class="form__map">
                  <span class="icon-map"></span>
                  <p class="form__map-text">Дербент</p>
                  <span class="icon-Union"></span>
                </div>
                <form action="#" class="form__body-delivery">
                  <div class="form-control__item">
						        <label for="formStreet" class="form__label-item">Улица<span>*</span></label>
						        <input id="formStreet" type="text" placeholder="Улица"  name="street" class="form__input-item">
					        </div>
                  <div class="form-control__item">
						        <label for="formStreet" class="form__label-item">Комментарий</label>
						        <input id="formCommentary" type="text" placeholder="Комментарий"  name="commentary" class="form__input-item form__input-comment">
					        </div>
                </form>
              </div>
            </div>
            <h2 class="form__title form__title-pay">Cпособ оплаты</h2>
            <div class="form form-pay">
              <div class="form-control__pay-online">
                <label class="form-control__label">
                  <input class="form__real-radio" type="radio"                   name="pay"/>
                  Оплата при получении
                  <span class="form__gustom-radio"></span>
                </label>
                <p class="form-control__text">Оплата наличными и картой при получении заказа.</p>
              </div>
              <div class="form-control__pay-cart">
                <label class="form-control__label">
                  <input class="form__real-radio" type="radio"                   name="pay"/>
                  Онлайн-оплата картой
                  <span class="form__gustom-radio"></span>
                </label>
                <p class="form-control__text">Онлайн-оплата на сайте банковской картой Visa, MasterCard или Мир (без комиссии).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="basket-container__right">
          <div class="basket__order">
            <h2 class="basket__order-title">Ваш заказ
            </h2>
            <ul class="basket__order-items">
              <li class="basket__order-item">
                <p class="basket__order-name">Наименований</p>
                <p class="basket__order-price">4 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-cost">Стоимость</p>
                <p class="basket__order-price">1940 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-delivery">Доставка</p>
                <p class="basket__order-price">100 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-reduction">Скидка</p>
                <p class="basket__order-price">0 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-all">Итого</p>
                <p class="basket__order-price">1940 Р</p>
              </li>
            </ul>
           <button class="basket__order-btn">Оформить заказ</button>
           <p class="basket__order-consent">Нажимая на кнопку, я даю свое согласие на обработку персональных данных</p>
          </div>
        </div>
        <div class="basket-container__bottom">
          <div class="basket__order">
            <h2 class="basket__order-title">Ваш заказ
            </h2>
            <ul class="basket__order-items">
              <li class="basket__order-item">
                <p class="basket__order-name">Наименований</p>
                <p class="basket__order-price">4 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-cost">Стоимость</p>
                <p class="basket__order-price">1940 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-delivery">Доставка</p>
                <p class="basket__order-price">100 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-reduction">Скидка</p>
                <p class="basket__order-price">0 Р</p>
              </li>
              <li class="basket__order-item">
                <p class="basket__order-all">Итого</p>
                <p class="basket__order-price">1940 Р</p>
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
  include "../modules/footer/footer.php";
  ?>
  <!-- Подключаем тогл -->
  <script src="js/toggle.js"></script>
</body>
</html>