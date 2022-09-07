var mainMenu = document.querySelector(".links");
var openMenu = document.querySelector(".open");
var closeMenu = document.querySelector(".close");

var header = document.querySelector("#heder-plana");

var nav = document.querySelector(".header-nav");

openMenu.addEventListener("click", show);
closeMenu.addEventListener("click", close);

function show() {
  mainMenu.style.display = "flex";
  mainMenu.style.right = "0";
}
function close() {
  mainMenu.style.right = "-60%";
}
