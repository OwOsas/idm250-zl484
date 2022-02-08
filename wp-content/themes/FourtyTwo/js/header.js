var burger = document.getElementById("burger_menu");
var menu = document.getElementsByClassName('menu-primary-menu-container')[0];

menu.classList.add('hidden');

burger.addEventListener("click",function(){
    console.log("burger clicked");
    burger.classList.toggle("closed");
    menu.classList.toggle("hidden");
},false);

console.log('This is header js');

window.addEventListener('load', function() {
    var document_height = document.body.clientHeight;
    console.log(document_height);
    document.getElementById("header_sticky_container").style.height = document_height + "px";
  });

  window.addEventListener('resize', function() {
    var document_height = document.body.clientHeight;
    console.log(document_height);
    document.getElementById("header_sticky_container").style.height = document_height + "px";
  });