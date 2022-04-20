<?php 

include "connect.php";
// include "get_main_setting_site.php";

?>

<main class="admin-main">
  <nav class="menu-admin">
    <div class="sticky">
      <p class="menu-admin__item menu-admin__item_active"><a href="#category">Категории</a></p>
      <p class="menu-admin__item"><a href="#product">Товары</a></p>
      <!-- <p class="menu-admin__item"><a href="#settings">Общие настройки</a></p> -->
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

    <?php
    include 'modules/category/admin_section.php';
    include 'modules/product/admin_section.php';
    ?>

   
  </section>
</main>

<script src="/js/close_popup.js"></script>




