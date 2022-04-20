

<div class="admin-page" id="product">
    <h2 class="h2">Добавить продукт</h2>
    <form method="POST" action="modules/product/product_add.php" class="admin-form" enctype="multipart/form-data">

        <label class="admin-label">
            <p class="admin-label__text">Имя продукта<sup>*</sup></p>
            <input type="text" required name="name" class="admin-input">
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Фото продукта</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Категория</p>
            <select name="category" class="admin-select">
                <option disabled>Выберите категорию</option>
                <?php
                $category_list = mysqli_query($connection, 'SELECT * FROM `categories` ORDER BY `id`');
                while($category_item = mysqli_fetch_assoc($category_list)) {
                    echo '<option>'. $category_item['category_name'] .'</option>';
                }
                ?>
            </select>
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Описание<sup>*</sup></p>
            <textarea class="admin-textarea" name="description"></textarea>
        </label>

        <label class="admin-label">
            <p class="admin-label__text">Цена<sup>*</sup></p>
            <input type="number" required name="price" class="admin-input">
        </label>

        <input type="submit" value="Добавить продукт" class="admin-submit mt20">
    </form>
    
</div>

<div class="admin-page">

	<h2 class="h2 mb20">Список продуктов</h2>

	<div class="aside__block relative">
		<span class="span-id">ID</span>
		<span class="d-ib w200px">Имя</span>
        <span class="">Категория</span>
	</div>
	<?php
    $product_list = mysqli_query($connection, 'SELECT * FROM `product` ORDER BY `id` DESC');
    while ( $product_item = mysqli_fetch_assoc($product_list) ) {
        echo '
        <div class="aside__block relative">
            <span class="span-id" >'.$product_item["id"].'</span>
            <span class="span-name d-ib w200px">'.$product_item["name"].'</span>
            <span class="">'.$product_item["category"].'</span>
            <div class="reform">
                <img class="del-product" src="/img/icons/del-icon.png">
            </div>
        </div>';  
    }

    ?>

</div>

<?php
include 'modules/product/del_product_popup.php';
?>