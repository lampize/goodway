let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
let $input = $(".qty .qty_input");

$qty_up.click(function(e){
    if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i, oldval){
            return ++oldval;
        });
    }
});

$qty_down.click(function(e){
    if($input.val() > 1 && $input.val() <= 10){
        $input.val(function(i, oldval){
            return --oldval;
        });
    }
});