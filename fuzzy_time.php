<?php

include "just_now.php";
include "time_ago.php";
include "a_moment_ago.php";

for ($i=0;$i<100;$i++){
  $T=mt_rand(0,100); # rand only for testing. T is in seconds
  $phrase="";

  if($T<25){
    $phrase=justnow($T);
  }
  if($phrase=="" && $T<165){
    $phrase=amoment($T);
  }
  if($phrase==""){ # Default case: no output from previous functions
    $phrase=timeago($T);
  }

  echo "Seconds " . $T . " was: " . $phrase . "\r\n"; 


}

?>
