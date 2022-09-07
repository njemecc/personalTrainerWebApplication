<?php         ?>

<head>
  <link rel="stylesheet" href="forma.css" />
</head>
<body>
  <div class="container">
    <header>
      <h1 id="title">Anketa</h1>
      <p id="description">
        Popunite ovu anketu i trening skrojen za vas ce biti dostupan za
        najkasnije 24h.
      </p>
    </header>
    <form method="POST" action="zaformu.php" id="survey-form">
      <div class="form-field">
        <label id="email-label" for="email">Email</label>

        <input
          name="email"
          type="email"
          required
          placeholder="me@domain.com"
          id="email"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="tel-label" for="tel">Broj Telefona</label>

        <input
          name="telefon"
          type="tel"
          placeholder="0631246772"
          id="tel"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="name-label">Visina</label>

        <input
          name="visina"
          type="text"
          required
          placeholder="cm"
          id="name"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="name-label">Težina</label>

        <input
          name="tezina"
          type="text"
          required
          placeholder="Kg"
          id="name"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="number-label" for="number">Datum rodjenja</label>
        <input
          type="date"
          name="datum"
          required
          
          class="form-control";
        />
      </div>
      <!-- <div class="form-field">
        <label id="dropdown-label" for="dropdown"
          >Koliko cesto mozete da izdvojite vreme za trening?</label
        >
        <select id="dropdown" required class="form-control">
          <option disabled selected value>select</option>
          <option>jednom nedeljno</option>
          <option>da puta nedeljno</option>
          <option>tri puta nedeljno</option>
          <option>vise od tri puta u tok u nedelje</option>
        </select>
      </div>
      <div class="form-field">
        <label>Kojim danima bi mogli da trenirate?</label>
        <label for="Monday"
          ><input
            value="Monday"
            type="checkbox"
            id="Monday"
            name="day"
            class="input-checkbox"
          />Ponedeljak</label
        >
        <label for="Tuesday"
          ><input
            value="Tuesday"
            type="checkbox"
            id="Tuesday"
            name="day"
            class="input-checkbox"
          />Utorak</label
        >
        <label for="Wednesday"
          ><input
            value="Wednesday"
            type="checkbox"
            id="Wednesday"
            name="day"
            class="input-checkbox"
          />Sreda</label
        >
        <label for="Thursday"
          ><input
            value="Thursday"
            type="checkbox"
            id="Thursday"
            name="day"
            class="input-checkbox"
          />Cetvrtak</label
        >
        <label for="Friday"
          ><input
            value="Friday"
            type="checkbox"
            id="Friday"
            name="day"
            class="input-checkbox"
          />Petak</label
        >
        <label for="Saturday"
          ><input
            value="Saturday"
            type="checkbox"
            id="Saturday"
            name="day"
            class="input-checkbox"
          />Subota</label
        >
        <label for="Sunday"
          ><input
            value="Sunday"
            type="checkbox"
            id="Sunday"
            name="day"
            class="input-checkbox"
          />Nedelja</label
        >
      </div>
    -->

      <div class="form-field">
        <label>Da li ste zaposleni?</label>
        <select name="zaposlen">
          <option>Zaposlen</option>
          <option>Student</option>
          <option>Nesto Drugo</option>
        </select>
      </div>

      <div class="form-field">
        <label id="email-label"
          >Ako ste zaposleni koje vam je radno vreme?</label
        >

        <input
          name="radnoVreme"
          type="text"
          placeholder="9h-17h"
          id="email"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="email-label"
          >Koji je vaš cilj koji želite treningom da postignete?</label
        >

        <input
          name="cilj"
          type="text"
          placeholder="Da dodam misicnu masu"
          id="email"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label id="email-label">Zašto taj cilj smatrate bitnim?</label>

        <input
          name="bitno"
          type="text"
          placeholder="Zbog izgleda/zdravlja"
          id="email"
          class="form-control"
        />
      </div>

      <div class="form-field">
        <label>Da li ste nekada ranije trenirali?</label>
        <select name="treniraliRanije">
          <option>da</option>
          <option>ne</option>
        </select>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label"
              >Ako jeste, koliko dugo i da li ste imali svog trenera?</label
            >

            <input name="imaliTrenera" type="text" class="form-control" /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label" for="email"
          ><div class="form-field">
            <label id="email-label">Zašto ste prestali?</label>

            <input name="prestali" type="text" class="form-control" /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label">Koliko sati spavate?</label>

            <input
              name="spavate"
              type="text"
              required
              class="form-control"
            /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label"
              >Imate li nekih zdravstveih problema (šećer, krvni pritisak,
              itd.)?</label
            >

            <input
              name="zdravstveni"
              type="text"
              id="email"
              class="form-control"
            /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label"
              >Koja su vaša očekivanja uzimanjem ovog programa?
            </label>

            <input
              name="ocekivanja"
              type="text"
              id="email"
              class="form-control"
            /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label">Koliko dnevno obroka imate? </label>

            <input
              name="obrok"
              type="text"
              id="email"
              class="form-control"
            /></div
        ></label>
      </div>

      <div class="form-field">
        <label id="email-label"
          ><div class="form-field">
            <label id="email-label"
              >Da li ste pretežno aktivan ili sedentaran tip?</label
            >

            <input
              name="aktivan"
              type="text"
              required
              class="form-control"
            /></div
        ></label>
      </div>

      <!-- <div class="form-field">
        <label>What types of training are you interested in?</label>
        <label for="pilates"
          ><input
            value="pilates"
            type="checkbox"
            id="pilates"
            name="training-type"
            class="input-checkbox"
          />Pilates</label
        >
        <label for="reformer"
          ><input
            value="reformer"
            type="checkbox"
            id="reformer"
            name="training-type"
            class="input-checkbox"
          />Reformer</label
        >
        <label for="boxing"
          ><input
            value="boxing"
            type="checkbox"
            id="boxing"
            name="training-type"
            class="input-checkbox"
          />Boxing</label
        >
        <label for="strength"
          ><input
            value="Strength"
            type="checkbox"
            id="strength"
            name="training-type"
            class="input-checkbox"
          />Strentgh & Conditioning</label
        >
        <label for="mobility"
          ><input
            value="mobility"
            type="checkbox"
            id="mobility"
            name="training-type"
            class="input-checkbox"
          />Mobility</label
        >
        <label for="spin"
          ><input
            value="spin"
            type="checkbox"
            id="spin"
            name="training-type"
            class="input-checkbox"
          />Spin</label
        >
      </div>
-->
    
    
      <div class="form-field">
        <label for="comments">Nesto dodatno sto biste hteli da kazete:</label>
        <textarea id="comments" name="dodatno"></textarea>
      </div>

      <div class="form-field">
        <button name="dugme" type="submit" id="submit">Submit</button>
      </div>
      
        
      <?php/*
      
      if(isset($_POST['dugme'])) {
        
       
      

        
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

$con = new mysqli($servername,$username,$sifra,$dbname);

mysqli_select_db($con,'personalni_trener');




$reg = "INSERT INTO anketa(email_korisnika,broj_telefona,visina,tezina,datum_rodjenja,da_li_je_zaposlen,radno_vreme,cilj_treniranja,cilj_smatrate_bitnim,ranije_trenirali,imali_trenera,prestali_zbog,spavate,zdravsveni_problem,ocekivanja_programa,broj_obroka_dnevno,kakav_tip,nesto_dodatno) 
  VALUES ('$email','$telefon','$visina','$tezina','$datum','$zaposleni','$radnoVreme','$cilj','$bitnim','$trenirali','$trenera','$prestali','$zdravstveni','$ocekivanja','$obroka','$aktivan','$dodatno')";






  mysqli_query($con,$reg);




  
  */

  
    ?>
    </form>
  </div>
</body>
