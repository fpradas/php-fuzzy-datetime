<?php


function justnow($etime){

  $p=mt_rand(0,mt_getrandmax())/mt_getrandmax();
  $phrase="";
  if(jn_func($etime)>=$p){ $phrase="Just now";}
  
  return $phrase;
}


function jn_func($x){
# return 1-$x/20;
  return 1/(1+exp($x-15));
}

?>
