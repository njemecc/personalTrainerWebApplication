<?php
session_start();

// inicijalne varijable

$email = $_POST['email'];
$password = $_POST['password'];


//pravimo konekciju

$servername = "localhost";
$username = "makson";
$sifra= "makson7!";
$dbname = "personalni_trener";

$con = new mysqli($servername,$username,$sifra,);

mysqli_select_db($con,'personalni_trener');

//LOGIN!

$s = "SELECT * FROM registrovani WHERE email = '$email' && password ='$password'";
                                                                                                                                  
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

$message = '';


if($num == 1){

  //cookie koji traje 48h
 
  setcookie("email",$email,time()+172800);
  setcookie("password",$password,time()+172800);

  
  

  //session za ime
  $_SESSION['email'] = $email;
  
  $upit = "SELECT da_li_je_platio FROM registrovani WHERE email = '$email'";
  $rezultat_upita = mysqli_query($con,$upit);
  $number = mysqli_num_rows($rezultat_upita);
  $row = $rezultat_upita->fetch_assoc();
  //$row = mysql_fetch_array($rezultat_upita,MYSQL_ASSOC)
 
  if($row['da_li_je_platio']== 1){

    header("location:{$email}.php");
   print  "<p>$number</p>";
  }else{
    echo"<h3>Vasa uplata je jos uvek u procesu</h3>";
  }
  
 

  
}else{
 

  header('location:login.html');
  
}
//zatvaranje konekcije
$con->close();
?>