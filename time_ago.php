<?php


//returns "X seconds/minutes/days/weeks/moths/years ago"
//default return of fuzzy datetime
//input elapsed time assumed in seconds
function timeago($etime){
  $now=0;
  $then=0;  
  $sameday=isSameDay($now,$then); //later on, function timeago() will require the dates... 
				  //for testing purposes, $now and $then are set to 0
  $sameweek=isSameWeek($now,$then);
  $samemonth=isSameMonth($now,$then);


  if($etime < 58){
    if($etime<=20){
      $phrase= $etime . " seconds ago";
    } else {
      $mod5=($etime % 5);
      if($mod5 < 3) {$etime = $etime - $mod5;} else {$etime = $etime + (5 - $mod5);}
      $phrase=$etime . " seconds ago";
    }
    
  } else if ($etime >= 58 && $etime < 3420){
    $tmin=$etime/60;
    $tmin=round($tmin);
    if($tmin<=5){
      $phrase=$tmin . " minutes ago";
    } else {
      $mod5=($tmin % 5);
      if($mod5 < 3) {$tmin =  $tmin - $mod5 ;} else {$tmin = $tmin + (5 - $mod5);}
      
      $phrase="About " . $tmin . " minutes ago";
    }
  } else if ($etime >=3420 && $etime <23.5*3600 && $sameday==true){
    $thour=round($etime/3600);
    $phrase=$thour . " hours ago";
  } else if (($etime >=23.5*3600 || $sameday==false) && $etime<6.5*24*3600 && $sameweek==true){
    $tday=round($etime/(3600*24));
    $phrase=$tday . " days ago";
  } else if (($etmie >=6.5*24*3600 || $sameweek==true) && $etime<29*7*24*3600 && $samemonth==true){
    $tweeks=round($etime/(3600*24*7));
    $phrase=$tweeks . " weeks ago";

  }
  return "About " . $phrase;

}

function isSameDay($now, $then){ //return if day is different between 'now' and 'then' 
  return true;
}

function isSameWeek($now, $then){ //return if 7 days in the calendar passed between 'now' and 'then'
  return true;
}


function isSameMonth($now, $then){ //return if 30 days in the calendar passed between 'now' and 'then'
  return true;
}

echo gettimeofday()

  #for($i=1;$i<2500;$i+=5){
  #  echo "Seconds: ";
  #  echo $i; 
  #  echo " Minutes: ";
  #  echo $i/60;
  #  echo " elapsed time: ";
  #  echo timeago($i);
  #  echo "\r\n";
  #}
?>
