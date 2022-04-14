<?php 

include "connect.php";
// include "get_main_setting_site.php";

?>

<main class="admin-main">
  <nav class="menu-admin">
    <div class="sticky">
      <p class="menu-admin__item menu-admin__item_active"><a href="#add-stuff">Продукты</a></p>
      <p class="menu-admin__item"><a href="#additional-pages">Страницы</a></p>
      <p class="menu-admin__item"><a href="#settings">Общие настройки</a></p>
    </div>
  </nav>
  <section class="admin-content">
    <h1 class="h1 m0">
      <?php 
        if($connection) {
          echo 'Админ панель Рандеву';}
        else {
          echo 'Не удалось соединиться с сервером';
          exit();
        } ?>
    </h1>

    <div class="admin-page" id="stuff-list">
      <h2 class="h2">Категории</h2>
      <form method="POST" action="category_add.php" class="admin-form" enctype="multipart/form-data">

        <label class="admin-label">
          <p class="admin-label__text">Имя категории<sup>*</sup></p>
          <input type="text" required name="category_name" class="admin-input">
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Фото категории</p>
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          <input type="file" name="category_photo" class="admin-input-photo">
        </label>

        <input type="submit" value="Добавить категорию" class="admin-submit mt20">
      </form>
    </div>

    <!-- <div class="admin-page" id="add-stuff">
      <h2 class="h2">Продукты</h2>
      <form method="POST" action="set_stuff.php" class="admin-form" enctype="multipart/form-data">

        <label class="admin-label">
          <p class="admin-label__text">Заголовок материала<sup>*</sup></p>
          <input type="text" required name="title_stuff" class="admin-input">
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Категория материала</p>
          <select name="category_stuff" class="admin-select">
            <option>Без категории</option>
            <option>События</option>
            <option>Документы</option>
            <option>Статистика</option>
          </select>
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Содержимое материала</p>
          <textarea id="mytextarea" name="desc_stuff"></textarea>
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Добавить фото</p>
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          <input type="file" name="photo_stuff[]" class="admin-input-photo" multiple>
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Дата материала</p>
          <input type="date" name="date_stuff" class="admin-input" autocomplete>
        </label>

        <input type="submit" value="Добавить" class="admin-submit mt20">
      </form>
    </div> -->

   
  </section>
</main>



