$(document).on('click', '.del-category', function(e) {
    e.preventDefault();
    console.log(5555);
    let elem = $(this);
    let parent = elem.closest('.aside__block');
    let id = parent.children('.span-id').text();
    let name = parent.children('.span-name').text();
    
    let popup = $(document).find('.category-del-popup');
    popup.css('display', 'flex');
    popup.find('#id').attr("value", id);
    popup.find('.h2').text('Удалить ' +name+ ' ?');
});