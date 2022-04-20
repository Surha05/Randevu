<div class="popup-container category-del-popup">
    <div class="popup mw500">
        <div class="jc-sb mb20">
            <h2 class="h2">Удалить категорию?</h2>
            <img src="/img/icons/close-icon.png" alt="" class="close-popup">
        </div>
        <form method="POST" action="modules/category/category_delete_by_id.php" class="admin-form">
            <input type="text" value="" id="id" style="display:none;" name="id">
            <div class="flex_f-s">
                <input type="submit" value="Удалить" class="del-submit mr20">
                <p class="cancel close-popup">Отменить</p>
            </div>
        </form>
    </div>
</div>

<script src="/admin/modules/category/del_category_popup.js"></script>