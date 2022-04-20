

<div class="admin-page" id="category">
    <h2 class="h2">Добавить категорию</h2>
    <form method="POST" action="modules/category/category_add.php" class="admin-form" enctype="multipart/form-data">

        <label class="admin-label">
            <p class="admin-label__text">Имя категории<sup>*</sup></p>
            <input type="text" required name="category_name" class="admin-input">
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Фото категории</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="category_photo" class="admin-input-photo">
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Родитель</p>
            <select name="category_parent" class="admin-select">
                <option>Главная</option>
                <?php
                $category_list = mysqli_query($connection, 'SELECT * FROM `categories` ORDER BY `id`');
                while($category_item = mysqli_fetch_assoc($category_list)) {
                    if($category_item['parent'] == 'Главная') {
                        echo '<option>'. $category_item['category_name'] .'</option>';
                    }
                }
                ?>
            </select>
        </label>

        <input type="submit" value="Добавить категорию" class="admin-submit mt20">
    </form>
    
</div>

<div class="admin-page">

	<h2 class="h2 mb20">Список категорий</h2>

	<div class="aside__block relative">
		<span class="span-id">ID</span>
		<span class="d-ib w200px">Имя</span>
        <span class="">Родитель</span>
	</div>
	<?php
    $category_list = mysqli_query($connection, 'SELECT * FROM `categories` ORDER BY `id` DESC');
    while ( $category_item = mysqli_fetch_assoc($category_list) ) {
        echo '
        <div class="aside__block relative">
            <span class="span-id" >'.$category_item["id"].'</span>
            <span class="span-name d-ib w200px">'.$category_item["category_name"].'</span>
            <span class="">'.$category_item["parent"].'</span>
            <div class="reform">
                <img class="del-category" src="/img/icons/del-icon.png">
            </div>
        </div>';  
    }

    ?>

</div>

<?php
include 'modules/category/del_category_popup.php';
?>