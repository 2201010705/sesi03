<?php
   $buah = array("salak","duku","rambutan","apel");

   print_r($buah);


   foreach($buah as $nval){
       echo "buah".$nval. "<br>";

   }
   echo "<hr>";
   echo "<ol>";
   foreach($buah as $nval){
       echo "<li>".$nval."</li>";
   }
   echo "</ol>";