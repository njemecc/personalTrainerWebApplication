var video = document.querySelectorAll("video");

video.forEach((play) =>
  play.addEventListener("click", () => {
    play.classList.toggle("active");

    if (play.paused) {
      play.play();
    } else {
      play.pause();
      play.currentTime = 0;
    }
  })
);
let niz = [];

let selekcija1 = document.getElementById("selekcija-1");
init1();
selekcija1.addEventListener("change", init1);

function init1() {
  x = selekcija1.value;
  niz[0] = x;
  document.querySelector(".prvi").src = `snimci/video-${niz[0]}.mp4`;
  console.log(niz[0]);
}

window.addEventListener("load", function () {
  document.querySelector(".prvi").src = `snimci/video-${niz[0]}.mp4`;
  console.log(niz[0]);
});
