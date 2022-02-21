<?php
 $text = "корова";
 $newText = str_replace(' ', '', mb_strtolower($text));

 function reverse ($str) {
     $arr = [];
     for ($i=mb_strlen($str)-1; $i>=0; $i--){
         $arr[]= mb_substr($str, $i, 1);
     }

     return implode($arr);

 }

 if ($newText == reverse($newText)) {
     echo "yes, polindrom";
 } else {
     function findMiniPolidrom ($str){
         $miniPalindrom = '';
         for($i=0; $i<mb_strlen($str)-2; $i++) {
             for ($k=3; $k<=mb_strlen($str); $k++) {
                 if (mb_substr($str, $i, $k) == reverse(mb_substr($str, $i, $k)) &&
                     mb_substr($str, $i, $k) != $miniPalindrom &&
                     mb_strlen(mb_substr($str, $i, $k)) > mb_strlen($miniPalindrom)
                 ) {
                    $miniPalindrom = mb_substr($str, $i, $k);
                 }
             }
         }
         return $miniPalindrom;
     }
    echo findMiniPolidrom($newText);
 }

 
?>


