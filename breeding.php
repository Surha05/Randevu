<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="icon.css" />
    <title>Document</title>
  </head>
  <body>
  <?php
  include "static/menu.php"
  ?>
    <section class="breeding">
      <div class="container">
        <h2 class="breeding__title">Пиццы</h2>
        <div class="option">
          <ul class="options__left">
            <li class="options__item options__subtitle">Фильтр:</li>
            <li class="options__item">
              <input
                id="options-all"
                checked
                type="radio"
                value="options__all"
                name="filter"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-all" class="options__label">Все</label>
            </li>
            <li class="options__item">
              <input
                id="options-cold"
                type="radio"
                value="options__cold"
                name="filter"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-cold" class="options__label">Холодные</label>
            </li>
            <li class="options__item">
              <input
                id="options-hot"
                type="radio"
                value="options__hot"
                name="filter"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-hot" class="options__label">Горячие</label>
            </li>
          </ul>
          <ul class="options__right">
            <li class="options__item options__subtitle">Сортировать:</li>
            <li class="options__item">
              <input
                id="options-popular"
                checked
                type="radio"
                value="options__popular"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-popular" class="options__label"
                >Популярные</label
              >
            </li>
            <li class="options__item">
              <input
                id="options-cheap"
                type="radio"
                value="options-cheap"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-cheap" class="options__label">Дешевле</label>
            </li>
            <li class="options__item">
              <input
                id="options-expensive"
                type="radio"
                value="options-expensive"
                name="sort"
                class="real__radio"
              />
              <span class="gustom__radio"></span>
              <label for="options-expensive" class="options__label"
                >Дороже</label
              >
            </li>
          </ul>
        </div>
      </div>
    </section>

    <script src="js/toggle.js"></script>
  </body>
</html>
