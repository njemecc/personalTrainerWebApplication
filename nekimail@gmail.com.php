<?php
session_start();
//ako nema cookie-ja nema ni ulaska na sajt!
if(!isset($_COOKIE["email"])){
  header("location:login.html");
}

if(!isset($_COOKIE["password"])){
  header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="projekat.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <!-- Odavde pocinje telo aplikacije-->

  <body>
    <header class="trening-header">
      <nav>
        <div class="logo">
          <img class="logo-slika" src="images/logo.png" />
        </div>
        <div class="open"><i class="fas fa-bars"></i></div>
        <ul class="links">
          <li id="houm"><a href="index.html">Home</a></li>
          <li><a href="plan.html">Plan</a></li>

          <li>
            <a href="logout.php" style="margin-right: 0.3rem">Logout</a
            ><i class="fa fa-sign-out" style="font-size: 1.2rem"></i>
          </li>

          <li>
            <a class="lastChild"><?php  echo   $_SESSION['email'];  ?></a>
          </li>

          <div class="close plusic"><i class="fas fa-times"></i></div>
        </ul>
      </nav>
    </header>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">Prvi Dan</h3>

          <i onclick="prikazi1()" class="fa-solid fa-plus"></i>
        </div>

        <!--OVO JE PRVI VIDEO KOPIRAS OVAJ DIV-->
        <div class="video--1 hiden">
          <video src="vezbe/Triceps kickback.mp4" controls></video>
          <p class="p-tag">3 serije 14 ponavljanja</p>
        </div>

        <!--Do ovde-->

        <div class="video--1 hiden">
          <video src="vezbe/Kosi bench bucice.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--1 hiden">
          <video src="vezbe/sklekovi.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--1 hiden">
          <video src="vezbe/Dumbell flys.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">DAN DRUGI</h3>

          <i onclick="prikazi2()" class="fa-solid fa-plus"></i>
        </div>

        <div class="video--2 hiden">
          <video src="/snimci/video-ker.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--2 hiden">
          <video src="/snimci/video-zgib.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--2 hiden">
          <video src="/snimci/video-biceps.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--2 hiden">
          <video src="/snimci/video-skace.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">DAN TRECI</h3>

          <i onclick="prikazi3()" class="fa-solid fa-plus"></i>
        </div>

        <div class="video--3 hiden">
          <video src="/snimci/video-ker.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--3 hiden">
          <video src="/snimci/video-zgib.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--3 hiden">
          <video src="/snimci/video-biceps.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--3 hiden">
          <video src="/snimci/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>


        <div class="video--3 hiden">
          <video src="/snimci/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">CETVRTI DAN</h3>

          <i onclick="prikazi4()" class="fa-solid fa-plus"></i>
        </div>

        <!--OVO JE PRVI VIDEO KOPIRAS OVAJ DIV-->
        <div class="video--4 hiden">
          <video src="vezbe/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <!--Do ovde-->

        <div class="video--4 hiden">
          <video src="vezbe/Kosi bench bucice.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--4 hiden">
          <video src="vezbe/sklekovi.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--4 hiden">
          <video src="vezbe/Dumbell flys.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">PETI DAN</h3>

          <i onclick="prikazi5()" class="fa-solid fa-plus"></i>
        </div>

        <!--OVO JE PRVI VIDEO KOPIRAS OVAJ DIV-->
        <div class="video--5 hiden">
          <video src="vezbe/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <!--Do ovde-->

        <div class="video--5 hiden">
          <video src="vezbe/Kosi bench bucice.mp4 controls"></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--5 hiden">
          <video src="vezbe/sklekovi.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--5 hiden">
          <video src="vezbe/Dumbell flys.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">SESTI DAN</h3>

          <i onclick="prikazi6()" class="fa-solid fa-plus"></i>
        </div>

        <!--OVO JE PRVI VIDEO KOPIRAS OVAJ DIV-->
        <div class="video--6 hiden">
          <video src="vezbe/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <!--Do ovde-->

        <div class="video--6 hiden">
          <video src="vezbe/Kosi bench bucice.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--6 hiden">
          <video src="vezbe/sklekovi.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--6 hiden">
          <video src="vezbe/Dumbell flys.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <div class="container-containera kontejnercina">
      <div class="trening-container">
        <div class="container-containera hatri">
          <h3 class="flex-grow">SEDMI DAN</h3>

          <i onclick="prikazi7()" class="fa-solid fa-plus"></i>
        </div>

        <!--OVO JE PRVI VIDEO KOPIRAS OVAJ DIV-->
        <div class="video--7 hiden">
          <video src="vezbe/Bench press.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <!--Do ovde-->

        <div class="video--7 hiden">
          <video src="vezbe/Kosi bench bucice.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--7 hiden">
          <video src="vezbe/sklekovi.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>

        <div class="video--7 hiden">
          <video src="vezbe/Dumbell flys.mp4" controls></video>
          <p class="p-tag">5 X 15</p>
        </div>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/4795268267.js"
      crossorigin="anonymous"
    ></script>

    <script src="video.js"></script>
    <script src="main.js"></script>
  </body>
</html>
