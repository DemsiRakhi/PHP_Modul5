<?php
   function luas_kerucut($jari, $pelukis){
       return ($jari+$pelukis) * 3.14 * $jari;
   }
   function volume_kerucut($jari, $tinggi){
       return (1/3 * 3.14) * ($jari * $jari) * $tinggi;
   }

   $tinggi=20;
   $jari=10;
   $pelukis=10;
   
   echo "Diketahui : <br>";
   echo "tinggi = $tinggi <br>";
   echo "Jari-Jari = $jari <br>";
   echo "Garis Pelukis = $pelukis <br><br>";
   echo "Rumus : <br>";
   echo "Rumus Luas Kerucut : (jari + pelukis) * 3.14 * jari <br>";
   echo "Rumus Volume Kerucut : (1/3 * 3.14) * (jari * jari) * t <br><br>";
   echo "Hasil : <br>";
   echo "Luas Kerucut : ";
   echo luas_kerucut($jari,$pelukis);
   echo "<br> Volume Kerucut : ";
   echo volume_kerucut($jari,$tinggi);
   
?>