<?php function debug($maFonction, $mort=false)
   {
       echo"<pre>";
       var_dump($maFonction,);
       echo "</pre>";
       if($mort){
       die;
       }
    }
    