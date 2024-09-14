let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;

next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}

prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}

let refreshInterval = setInterval(()=> {next.click()}, 50);

function reloadSlider(){
    items.forEach((item, index) => {
        if (index === active) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });

    // Update dots
    let last_active_dot = document.querySelector('.slider .dots li.active');
    if (last_active_dot) {
        last_active_dot.classList.remove('active');
    }
    dots[active].classList.add('active');

    // Reset interval
    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 5000);
}

dots.forEach((li, key) => {
    li.addEventListener('click', () => {
        active = key;
        reloadSlider();
    });
});

window.onresize = function(event) {
    reloadSlider();
};
