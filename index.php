
<?php
$x= 35;
if ($x >25) {
  echo"true";
}
 else {
   echo"false";
 };
?>
<br>
<?php
$age = 40;
if ($age <=18) {
  echo "vaikas";
} elseif ($age>=18 && $age<=65) {
  echo "suauges";
} elseif ($age>65) {
  echo "pensininkas";
}

 ?>
 <br>

<?php
$day=5;
 switch ($day) {
   case 1:
     echo("pirmadienis");
     break;
   case 2 :
     echo ('antradienis');
     break;
    case 3:
    echo("treciadienis");
    break;
    case 4:
    echo('ketvirtadienis');
    break;
    case 5:
    echo('penktadienis');
    break;
 }
 ?>
<br>
<?php

function Variables($var1, $var2, $var3 ) {
  echo "<h3> $var1, $var2, $var3</h3>";
}
Variables(2,5,12);
 ?>
 <br>
 <?php
function Result ($x1, $x2) {
  $m = $x1 * $x2;
  echo $m;
}
Result(6,2);
  ?>
  <br>
  <!-- Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras. -->
  <?php
function Double($z) {
  echo $z * $z;
}
Double(4);
   ?>
   <br>
   <!-- Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus. -->
   <?php
function Summ($c, $b) {
  echo $c+$b;
}
Summ(5,6)
  ?>
  <br>
  <!-- Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio. -->
<?php
function Minus($r,$y,$w) {
  echo $y-$r/$w;
}
Minus(5,2,6)
 ?>
 <br>
 <!-- Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba. -->
<?php
function Day($d) {
  if ($d==1) {
    echo "pirmadienis";
  } elseif ($d==2) {
    echo "antradienis";
  } elseif ($d==3) {
    echo "trečiadienis";
  } elseif ($d==4) {
    echo "ketvirtadienis";
  } elseif ($d==5) {
    echo "penktadienis";
  } elseif ($d==6) {
    echo "šeštadienis";
  } elseif ($d==7) {
    echo "sekmadienis";
  }
}
Day(5)
 ?>
<br>
<!-- Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump(). -->
<?php
$mass= ['a','b','c'];
echo $mass[0];
// <!-- Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį. -->
var_dump ($mass);
 ?>
 <br>

 <?php
 for($i=0; $i>9; $i++){
   for($j=1; $j>=$i;$j++){
     echo $i;
   }
   echo "<br>";
 }
  ?>
  <br>
  <?php
function ToCamel($str) {
  return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
}
ToCamel(1)
   ?>
   <br>
   <?php
   function astro($year,$month,$day) {
     if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Avinas"; }
  elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Jautis"; }
  elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "dvynys"; }
  elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Vežys"; }
  elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Liūtas"; }
  elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Mergelė"; }
  elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Svarstyklės"; }
  elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Skorpionas"; }
  elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Šaulys"; }
  elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Ožiaragis"; }
  elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Vandenis"; }
  elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "žuvys"; }
  return $zodiac;
}
   astro(2014,05,3)
    ?>
