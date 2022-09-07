<?php
session_start();

// uzimamo inicajlne varijable iz name-a kod register.html-a
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$password = $_POST['password'];
$text = $_POST['text'];
 

//pravimo konekciju

$servername = "localhost";
$username = "makson";
$sifra= "makson7!";
$dbname = "personalni_trener";

$con = new mysqli($servername,$username,$sifra,);

mysqli_select_db($con,'personalni_trener');

$s = "SELECT * FROM registrovani WHERE email = '$email'";
                                                                                                                                  
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"Vec se koristi email";
}else{
  $reg = "INSERT INTO registrovani(ime,prezime,email,password,text) 
  VALUES ('$ime','$prezime','$email','$password','$text')";

  mysqli_query($con,$reg);

  echo"Uspesna Registracija!";

  //uzimamo ceo html i php od trening.php-a
  $promenljiva_html = file_get_contents("trening.html");

//pravimo file sa ime lika .html
  $myfile = fopen("{$email}.php", "w+");
  
  fwrite($myfile, "{$promenljiva_html}");
  fclose($myfile);




  header('Location:forma.php');
}


//zatvaranje konekcije
$con->close();

?>