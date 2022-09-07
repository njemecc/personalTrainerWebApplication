<?php 

session_start();

session_destroy();

header('location:login.html');


setcookie("email",'',time()-18000);
setcookie("password",'',time()-18000);

?>