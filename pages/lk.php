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
        <h2 class="h2">Настройки</h2>
        <section class="orders__section">
            <div class="orders__block" id="orders-list" style="display: none;">
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
            <div class="orders__block" id="orders-settings">
                <!-- <p class="orders__text mb30">Вы в любой момент можете обновить ваши данные</p> -->
                <div class="orders__setting-block">
                    <h3 class="h3">Личная информация
                        <img src="/img/lk/edit.png" class="orders__icon">
                    </h3>
                    <div class="orders__row">
                        <p class="orders__col-50 orders__text_head">Имя</p>
                        <p class="orders__col-50 orders__text">Сурхаев Руслан</p>
                    </div>
                    <div class="orders__row">
                        <p class="orders__col-50 orders__text_head">Телефон</p>
                        <p class="orders__col-50 orders__text">+7 (999) 999-88-77</p>
                    </div>
                    <div class="orders__row">
                        <p class="orders__col-50 orders__text_head">Е-mail</p>
                        <p class="orders__col-50 orders__text">randevu@yandex.ru</p>
                    </div>
                </div>
                <div class="orders__setting-block">
                    <h3 class="h3">Адрес доставки</h3>
                    <p class="orders__text mb30">Обновите ваш адрес, и в дальнейшем эти данные будут автоматически указыватьсяпри оформлении заказа.</p>
                    <div><button class="orders-btn">Добавить адрес</button> </div>
                </div>
                <div class="orders__setting-block">
                    <h3 class="h3">Безопастность и вход
                        <img src="/img/lk/edit.png" class="orders__icon">
                    </h3>
                    <p class="orders__text">Убедись, что придуманный пароль является надежным. Надежный пароль содержит цифры, буквы и символы. Он не должен легко угадываться или быть похожим на существующее слово.</p>
                </div>
                <div class="orders__setting-block">
                    <h3 class="h3">Уведомления и рассылки</h3>
                    <p class="orders__text mb30">Вы можете подписаться на рассылки и уведомления нашего магазина для получения новостей про акции и скидки.</p>
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
<script src="/js/toggle.js"></script>
<script src="/js/lk-toggle.js"></script>
</body>
</html>