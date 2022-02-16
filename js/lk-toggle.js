console.log('pre');

window.onload = function() {
    let order_list = document.getElementById('orders-list');
    let settings = document.getElementById('orders-settings');
    let btn_list = document.getElementById('btn-list');
    let btn_settings = document.getElementById('btn-settings');

    btn_list.onclick = function() {
        btn_list.classList.add("active");
        btn_settings.classList.remove("active");
        order_list.style.display = 'block';
        settings.style.display = 'none';
    };

    btn_settings.onclick = function() {
        btn_settings.classList.add("active");
        btn_list.classList.remove("active");
        settings.style.display = 'block';
        order_list.style.display = 'none';

        
    };

    console.log('load');
    
};

console.log('post');