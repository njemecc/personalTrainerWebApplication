<?php

// neke varijable
$email = $_POST['email'];
$visina = $_POST['visina'];
$tezina = $_POST['tezina'];
$datum = $_POST['datum'];
$zaposleni = $_POST['zaposlen'];
$radnoVreme = $_POST['radnoVreme'];
$cilj = $_POST['cilj'];
$bitnim = $_POST['bitno'];
$trenirali = $_POST['treniraliRanije'];
$trenera = $_POST['imaliTrenera'];
$prestali = $_POST['prestali'];
$sati = $_POST['spavate'];
$zdravstveni = $_POST['zdravstveni'];
$ocekivanja = $_POST['ocekivanja'];
$obroka = $_POST['obrok'];
$aktivan = $_POST['aktivan'];
$dodatno = $_POST['dodatno'];
$telefon = $_POST['telefon'];









$servername = "localhost";
$username = "makson";
$sifra= "makson7!";
$dbname = "personalni_trener";

// Create connection
$conn = new mysqli($servername, $username, $sifra, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['dugme'])) {
  $reg = "INSERT INTO anketa(email_korisnika,broj_telefona,visina,tezina,datum_rodjenja,da_li_je_zaposlen,radno_vreme,cilj_treniranja,cilj_smatrate_bitnim,ranije_trenirali,imali_trenera,prestali_zbog,spavate,zdravstveni_problem,ocekivanja_programa,broj_obroka_dnevno,kakav_tip,nesto_dodatno) 
  VALUES ('$email','$telefon','$visina','$tezina','$datum','$zaposleni','$radnoVreme','$cilj','$bitnim','$trenirali','$trenera','$prestali','$sati','$zdravstveni','$ocekivanja','$obroka','$aktivan','$dodatno')";

if ($conn->query($reg) === TRUE) {
  
} else {
  echo "Error: " . $reg . "<br>" . $conn->error;
}
  }
$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

  <style>
     body{
  
  }
*{
 
  text-align:center;
  font-family: 'Kanit', sans-serif;
}
    h1{
      font-size: 3rem;
  padding: 0.5rem;
  display: inline-block;
  
  border-bottom: 0.3rem solid yellowgreen;
  margin-bottom: 1.8rem;
  font-weight: bold;
  text-align: center;
    }

    h2{
      font-size: 2rem;
      color:yellowgreen;
    }

    p{
      font-size:1.2rem;
      line-height: 1.4;
  font-size: 1.2rem;
  text-align:start;

    }


     .links li {
  display: inline-block;
  margin-left: 1rem;
  font-size: 1.5rem;
  float:right;
}
 .links li a {
  color: yellowgreen;
  text-decoration:none;
  
}
.links .active {
  color: yellowgreen;
}
 .links li a:hover {
  color: yellowgreen;
  font-size:larger;
  
}

@media (max-width: 850px) {
 
  .links {
    height: 29rem;
    width: 36%;
    position: fixed;
    top: 0;
    right: 0;
    border-radius: 1.2rem;
    background-color: yellowgreen;
    display: none;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 9999;
  }
 .links li {
    font-size: 1.9rem;
    margin: 0.5rem;
    flex-grow: 1;
  }
   .links li a {
 
    font-family: sans-serif;
    border-bottom: 1px solid #fff;
    display:inline-block;
  }
   .links li a:hover {
    color: yellowgreen;
    font-size: larger;
  }
  .links .open,
   .links .close {
    color:yellowgreen;
    display: block;
    position: absolute;
    top: 0.5rem;
    right: 1rem;
  }
  .close {
    color: yellowgreen;
    margin-top: 0%;
    padding-top: 0%;
  }
  header .content h1 {
    font-size: 6rem;
  }
}

@media (max-width: 850px) {
  #houm {
    margin-top: 40%;
  }
  #houm a {
    color: yellowgreen;
  }
   body .links {
    height: 29rem;
    width: 36%;
    position: fixed;
    top: 0;
    right: 0;
    border-radius: 1.2rem;
    background-color: yellowgreen;
    display: none;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    z-index: 9999;
  }
  body .links li {
    font-size: 1.9rem;
    margin: 0.5rem;
    flex-grow: 1;
  }
  body .links li a {
    color: yellowgreen;
    font-family: sans-serif;
    border-bottom: 1px solid #fff;
  }
  body .links li a:hover {
    color: yellowgreen;
    font-size: larger;
  }
 .open,
   .links .close {
    display: block;
    position: absolute;
    top: 0.5rem;
    right: 1rem;
  }
  .close {
    color: yellowgreen;
    margin-top: 0%;
    padding-top: 0%;
  }
  header .content h1 {
    font-size: 6rem;
  }
}

    </style>
</head>
<body>
<div class="open"><i class="fas fa-bars"></i></div>
<ul class="links">
          <li id="houm"><a href="index.html">Home</a></li>
         
         
          <div class="close"><i class="fas fa-times"></i></div>
        </ul>
<h1>Molim Vas sačekajte, Vaše informacije se obrađuju. U roku od narednih 24h dobijate svoj program treninga.</h1>

<h2>UPUTSTVO ZA TRENIRANJE!</h2>
<ul>
  <li><p>Dobićete snimke vežbi, kako se izvode kao i broj ponavljanja.
Ako posle naziva vežbe piše 4 x 10, to znači da treba da se uradi 4 serije po 10 ponavljanja te iste vežbe.</p>
</li>

<li><p>
Ono što je takođe bitno jeste kilaža sa kojom se izvode vežbe. Kilaža mora da bude podešena tako da se sa njom uradi zadati broj ponavljanja, a da pritom ostane maksimum 2 ponavljanja u rezervi. Šta to znači?
  </br>
<b>Primer:</b> Ako se vežba veslanje u pretklonu uradi sa ukupno 60kg x 10 ponavljanja, a mogli ste recimo 15+ ponavljanja, znači da je kilaža nedovoljna i mora da se podigne malo, na recimo 65 ili 70kg, tako da kada se uradi 10 ponavljanja prilično se umorite i da ste mogli još 2 do potpunog otkaza.</p>
</li>

<li>
<p>
  
Takođe, svake naredne nedelje je potrebno da se pravi postepen progres u treningu, u smislu povećavanja opterećenja, broja ponavljanja ili eventualno broja serija za datu vežbu.
U saradnji sa mnom, i u skladu sa Vašim sposobnostima, to sve korigujemo usput.

</p>
  </li>
  <li>
    <p>
  Dužni ste da šaljete izveštaj jednom nedeljno u vidu broja serija, ponavljanja i kilaže urađenih za svaku datu vežbu u svom aktuelnom programu. Te informacije su mi potrebne iz razloga kako bih imao uvid u Vaše sposobnosti i napredak i kako bih mogao adekvatno da korigujem parametre u treningu kako bih osigurao Vaš dalji napredak.
Takođe, za početak bi bilo neophodno da mi pošaljete po 1 snimak izvođenja svake vežbe kako bih proverio Vašu tehniku, korigovao je ako treba i tako povećali šanse za brži napredak.</p>
  </li>
<li>
<p>Neki predviđeni vremenski period za trajanje jednog programa (datih vežbi) je otprilike 5-7 nedelja. Ukoliko isti program treninga daje rezultate i duže od toga nije ga potrebno menjati.
Ono što je još bitno je da poštujete datum uplate. Za razliku od programa, aplikacija je otključana 30 dana nakon uplate novca na račun. Po isteku 30 dana, ako novac nije legao na račun aplikacija se zaključava i gubite pristup vežbama.
Ukoliko postoji nekih nedoumica možete mi pisati preko Whats’app-a i rado ću odgovoriti na sva Vaša pitanja. Ako je problem kompleksniji i zahteva vreme moguće je organizovati 1 Zoom sastanak nedeljno u trajanju od sat vremena.
</p>
  </li>
  </ul>

  <script src="main.js"> </script>
</body>
</html>