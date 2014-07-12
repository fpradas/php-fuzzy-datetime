<?php


function amoment($etime){

  $p=mt_rand(0,mt_getrandmax())/mt_getrandmax();
  $phrase="";
  if(am_func($etime)>=$p){ $phrase="A moment ago";}
  
  return $phrase;
}


function am_func($x){
# return 1-$x/20;
  if($x<80) {$out=0.8*1/(1+exp(-$x+15));}
  else {$out=0.8*1/(1+exp($x-145));}
  return $out;
}

?>
