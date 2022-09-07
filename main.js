var mainMenu = document.querySelector(".links");
var openMenu = document.querySelector(".open");
var closeMenu = document.querySelector(".close");

var lastChild = document.querySelector(".lastChild");

var header = document.querySelector("#heder-plana");

var nav = document.querySelector(".header-nav");

openMenu.addEventListener("click", show);
closeMenu.addEventListener("click", close);

function show() {
  mainMenu.style.display = "flex";
  mainMenu.style.right = "0";

  header.style.paddingBottom = "32rem";

  lastChild.style.fontSize = "1rem";
  lastChild.style.fontWeight = "bold";
}
function close() {
  mainMenu.style.right = "-60%";
  header.style.paddingBottom = "0rem";
}

let dugmad = document.querySelectorAll(".iskoci-dugme");

dugmad.forEach((dugme) => {
  dugme.addEventListener("click", function () {
    //telo funkcije
    document.getElementById("uplatnicaDiv").classList.toggle("nevidljivo");
  });
});
