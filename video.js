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

function prikazi1() {
  let x = document.querySelectorAll(".video--1");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi2() {
  let x = document.querySelectorAll(".video--2");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi3() {
  let x = document.querySelectorAll(".video--3");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi4() {
  let x = document.querySelectorAll(".video--4");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi5() {
  let x = document.querySelectorAll(".video--5");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi6() {
  let x = document.querySelectorAll(".video--6");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}

function prikazi7() {
  let x = document.querySelectorAll(".video--7");

  for (i = 0; i < x.length; i++) {
    x[i].classList.toggle("hiden");
  }
}
/*
let niz = [];

function init1() {
  let selekcija1 = document.getElementById("selekcija-1");
  selekcija1.addEventListener("change", init1);
  selekcija1.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });

  let x = selekcija1.value;

  localStorage.setItem("opcija-1", x); //event.target.setAttribute("selected", "true");

  document.querySelector(".prvi").src = `snimci/video-${x}.mp4`;
}
/*
function init2() {
  let selekcija2 = document.getElementById("selekcija-2");
  selekcija2.addEventListener("change", init2);
  selekcija2.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija2.value;
  document.querySelector(".drugi").src = `snimci/video-${x}.mp4`;

  localStorage.setItem("opcija-2", x);
}

function init3() {
  let selekcija3 = document.getElementById("selekcija-3");
  selekcija3.addEventListener("change", init3);
  selekcija3.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija3.value;
  document.querySelector(".treci").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-3", x);
}

function init4() {
  let selekcija4 = document.getElementById("selekcija-4");
  selekcija4.addEventListener("change", init4);
  selekcija4.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija4.value;
  document.querySelector(".cetvrti").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-4", x);
}

function init5() {
  let selekcija5 = document.getElementById("selekcija-5");
  selekcija5.addEventListener("change", init5);
  selekcija5.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija5.value;
  document.querySelector(".peti").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-5", x);
}

function init6() {
  let selekcija6 = document.getElementById("selekcija-6");
  selekcija6.addEventListener("change", init6);
  selekcija6.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija6.value;
  document.querySelector(".sesti").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-6", x);
}

function init7() {
  let selekcija7 = document.getElementById("selekcija-7");
  selekcija7.addEventListener("change", init7);
  selekcija7.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija7.value;
  document.querySelector(".sedmi").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-7", x);
}

function init8() {
  let selekcija8 = document.getElementById("selekcija-8");
  selekcija8.addEventListener("change", init8);
  selekcija8.addEventListener("change", function () {
    //selekcija.classList.add("hiden");
  });
  let x = selekcija8.value;
  document.querySelector(".osmi").src = `snimci/video-${x}.mp4`;
  localStorage.setItem("opcija-8", x);
}

const selekcija1 = document.getElementById("selekcija-1");
selekcija1.addEventListener("change", init1);

const selekcija2 = document.getElementById("selekcija-2");
selekcija2.addEventListener("change", init2);

const selekcija3 = document.getElementById("selekcija-3");
selekcija3.addEventListener("change", init3);

const selekcija4 = document.getElementById("selekcija-4");
selekcija4.addEventListener("change", init4);

const selekcija5 = document.getElementById("selekcija-5");
selekcija5.addEventListener("change", init5);

const selekcija6 = document.getElementById("selekcija-6");
selekcija6.addEventListener("change", init6);

const selekcija7 = document.getElementById("selekcija-7");
selekcija7.addEventListener("change", init7);

const selekcija8 = document.getElementById("selekcija-8");
selekcija8.addEventListener("change", init8);

//globalno?

function globalno(broj) {
  let y = localStorage.getItem(`opcija-${broj}`);

  let objekat = [
    "greska",
    "prvi",
    "drugi",
    "treci",
    "cetvrti",
    "peti",
    "sesti",
    "sedmi",
    "osmi",
  ];

  document.querySelector(`.${objekat[broj]}`).src = `snimci/video-${y}.mp4`;
}

// da bi nam sve local storage cuvao i kada se refresha
globalno(1);
globalno(2);
globalno(3);
globalno(4);
globalno(5);
globalno(6);
globalno(7);
globalno(8);
*/
