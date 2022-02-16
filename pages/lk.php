<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=”robots” content=”noindex, nofollow”/>
    <link rel="stylesheet" href="/css/style.css" />
    <title>Личный кабинет</title>
</head>
<body>
<?php include "../modules/menu/menu.php";?>
<div class="lk container">
    <h1 class="h1 mb24">Личный кабинет</h1>
    <div class="orders">
        <h2 class="h2">Заказы</h2>
        <section class="orders__section">
            <div class="orders__block">
                <div class="orders__list head">
                    <div class="orders__date">Дата</div>
                    <div class="orders__number">Заказ</div>
                    <div class="orders__amount">Сумма</div>
                </div>

                <div class="orders__list">
                    <div class="orders__date">19.11.2021</div>
                    <div class="orders__number"><a href="#">Заказ №48924</a></div>
                    <div class="orders__amount">8 465 ₽</div>
                </div>
                <div class="orders__list">
                    <div class="orders__date">24.07.2021</div>
                    <div class="orders__number"><a href="#">Заказ №40824</a></div>
                    <div class="orders__amount">8 465 ₽</div>
                </div>
                <div class="orders__list">
                    <div class="orders__date">24.07.2021</div>
                    <div class="orders__number"><a href="#">Заказ №40924</a></div>
                    <div class="orders__amount">8 465 ₽</div>
                </div>
                <div class="orders__list">
                    <div class="orders__date">24.07.2021</div>
                    <div class="orders__number"><a href="#">Заказ №40892</a></div>
                    <div class="orders__amount">8 465 ₽</div>
                </div>
            </div>
            <div class="orders__nav">
                <ul class="orders__ul">
                    <li class="orders__li active">Заказы</li>
                    <li class="orders__li">Настройки</li>
                    <li class="orders__li">Выход</li>
                </ul>
            </div>
        </section>
    </div>
</div>
<?php include "../modules/footer/footer.php";?>
<script src="js/toggle.js"></script>
</body>
</html>