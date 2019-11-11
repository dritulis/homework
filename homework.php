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
