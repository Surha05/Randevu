$(document).on('click', '.del-product', function(e) {
    e.preventDefault();
    let elem = $(this);
    let parent = elem.closest('.aside__block');
    let id = parent.children('.span-id').text();
    let name = parent.children('.span-name').text();
    
    let popup = $(document).find('.product-del-popup');
    popup.css('display', 'flex');
    popup.find('#id').attr("value", id);
    popup.find('.h2').text('Удалить ' +name+ ' ?');
});