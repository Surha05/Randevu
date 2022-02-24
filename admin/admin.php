<?php 

include "connect.php";
// include "get_main_setting_site.php";

?>

<main class="admin-main">
  <ul class="menu-admin">
    <div class="sticky">
    <p class="menu-admin__item"><a href="#add-stuff">Продукты</a></p>
    <p class="menu-admin__item"><a href="#stuff-list">Категории</a></p>
    <p class="menu-admin__item"><a href="#additional-pages">Дополнительные страницы</a></p>
    <p class="menu-admin__item"><a href="#settings">Общие настройки</a></p>
    </div>
  </ul>
  <section class="admin-content">
    <h1 class="h1">
      <?php 
        if($connection) {
          echo 'Административная панель';}
        else {
          echo 'Не удалось соединиться с сервером';
          exit();
        } ?>
    </h1>
    <div class="admin-page" id="add-stuff">
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
    </div>

    <div class="admin-page" id="stuff-list">
      <h2 class="h2">Все материалы</h2>
      <div class="aside__block relative">
        <span class="span-id">ID</span>
        <span>Заголовок материала</span>
      </div>
      <?php include "../modules/stuffs_admin.php"; ?>
      <?php if($is_pagination) include "../modules/front_pag_admin.php"; ?>
        
    </div>

    <div class="admin-page">
      <h2 class="h2">События</h2>
      <div class="aside__block relative">
        <span class="span-id">ID</span>
        <span>Заголовок События</span>
      </div>
      <div class="max-h-400">
      <?php include "../modules/stuffs_admin_events.php"; ?>
      </div>
    </div>

    <div class="admin-page">
      <h2 class="h2">Документы</h2>
      <div class="aside__block relative">
        <span class="span-id">ID</span>
        <span>Заголовок Документа</span>
      </div>
      <div class="max-h-400">
      <?php include "../modules/stuffs_admin_doc.php"; ?>
      </div>
    </div>

    <div class="admin-page">
      <h2 class="h2">Статистика</h2>
      <div class="aside__block relative">
        <span class="span-id">ID</span>
        <span>Заголовок Статистики</span>
      </div>
      <div class="max-h-400">
      <?php include "../modules/stuffs_admin_stat.php"; ?>
      </div>
    </div>

    <div class="admin-page" id="additional-pages">
      <h2 class="h2">Дополнительные страницы</h2>
      <form method="POST" action="set_stat.php" class="admin-form">

        <input type="submit" value="Добавить" class="admin-submit mt20">
      </form>

      <form method="POST" action="set_contact.php" class="admin-form">

        <label class="admin-label">
          <p class="admin-label__text">Страница Контакты</p>
          <textarea id="textarea-contact" name="desc_contact"><?php echo $desc_contact ?></textarea>
        </label>

        <input type="submit" value="Добавить" class="admin-submit mt20">
      </form>

      <form method="POST" action="set_korpus.php" class="admin-form">

        <label class="admin-label">
          <p class="admin-label__text">Страница Депутатский корпус</p>
          <textarea id="textarea-korpus" name="desc_korpus"><?php echo $desc_korpus ?></textarea>
        </label>

        <input type="submit" value="Добавить" class="admin-submit mt20">
      </form>
    </div>

    <?php include "front_slider.php"; ?>

    <div class="admin-page" id="settings">
      <h2 class="h2">Общие настройки</h2>
      <form method="POST" action="set_main_setting_site.php" class="admin-form" enctype="multipart/form-data">

        <label class="admin-label">
          <p class="admin-label__text">Заголовок сайта<sup>*</sup></p>
          <input type="text" name="title-site" class="admin-input" value="<?php echo $title_site ?>">
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Главное фото сайта</p>
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          <input type="file" name="main-photo-site" class="admin-input-photo">
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Ключевые слова (через запятую)</p>
          <input type="text" name="keywords-site" class="admin-input" value="<?php echo $keywords_site ?>">
        </label>

        <label class="admin-label">
          <p class="admin-label__text">Описание сайта</p>
          <textarea name="description-site" class="admin-textarea"><?php echo $description_site ?></textarea>
        </label>

        <input type="submit" value="Сохранить" class="admin-submit mt20">
      </form>
    </div>
  </section>
</main>



