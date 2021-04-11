<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'flowerpower');

$name = ['naam'];
$gn = ['gebruikersnaam'];
$pass = ['wachtwoord'];
$pass = ['email'];
$tele = ['telefoonnummer'];
$adr = ['adres'];
$postc = ['postcode'];
$woonp = ['woonplaats'];

$s = " select * from usertable where name = '$gn'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Gebruikersnaam al in gebruik";
}else{
    $reg = "insert into usertable(gebruikersnaam , wachtwoord) values ('$gn' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registratie voltooid";
}

  
?>