var burger = document.getElementById("burger_menu");
var menu = document.getElementsByClassName('menu-primary-menu-container')[0];

menu.classList.add('hidden');

burger.addEventListener("click",function(){
    console.log("burger clicked");
    burger.classList.toggle("closed");
    menu.classList.toggle("hidden");
},false);

console.log('This is header js');