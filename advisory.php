 <?php //original weather34 script original css/svg/php by weather34 2015-2019 // 
include('livedata.php');date_default_timezone_set($TZ);$json_string = file_get_contents("jsondata/darksky.txt");
$parsed_json = json_decode($json_string);
$alerttype = $parsed_json->{'alerts'}[0]->{"title"};
$type = explode(" ", $alerttype);
$alertlevel = $type[0];
//$alertlevel = "Yellow";
$alerttype = $type[1];
$alerttime = $parsed_json->{'alerts'}[0]->{"expires"};

$alertexp = date('H:i d M',$alerttime);
$alertiss = $parsed_json->{'alerts'}[0]->{"time"};

$alertissued = date('H:i d M',$alertiss);
?>



<div class="eqcirclehomeregional"><div class="eqtexthomeregional" style="background-color:yellow;">
<?php
///METEOALARM
if (strpos($alertlevel,'Yellow') !== false)
  {echo '<spanelightning><alertvalue><a alt="Meteoalarm" title="Meteoalarm" href="meteoalarm.php" data-featherlight="iframe"><?php echo $chartinfo?><yellow>Yellow '.$alert.' Alert <br>'.$alerttype.' </yellow></a><br>Expires '.$alertexp.'</alertvalue>
   </spanelightning></div></div></div>';}
else if (strpos($alertlevel,'Orange') !== false)
  {echo '<spanelightning><alertvalue><a alt="Meteoalarm" title="Meteoalarm" href="mereoalarm.php" data-featherlight="iframe"><?php echo $chartinfo?><orange>Amber '.$alert.' Alert <br>'.$alerttype.' </orange></a><br>Expires '.$alertexp.'</alertvalue>
  </spanelightning></div></div></div>';}
else if (strpos($alertlevel,'Red') !== false)
  {echo '<spanelightning><alertvalue><a alt="Meteoalarm" title="Meteoalarm" href="meteoalarm.php" data-featherlight="iframe"><?php echo $chartinfo?><red>Red '.$alert.' Alert <br>'.$alerttype.' </red></a><br>Expires '.$alertexp.'</alertvalue>
  </spanelightning></div></div></div>';}
  
  ///WEATHER34 freezing //celsius
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]<=0){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitc.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   

  else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<=32){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitf.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
 
  ///WEATHER34 freezing //celsius
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]<=0){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitc.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   

  else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<=32){echo '<spanelightning><alertvalue><blue>'. number_format($weather["dewpoint"],1).' '.$weatherunitf.'</blue> Dewpoint below <blue>Freezing</blue> <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   



 ///WEATHER34 fire risk//celsius
 else if ($weather["temp_units"]=='C' && ($weather["humidity"]<=40) && ($weather["temp"]>=27)){echo '<spanelightning><alertvalue><orange>'.number_format($weather["temp"],1).' '.$weatherunitc.'</orange> Caution Fire risk is high <alertadvisory>'.$newalert.'
   </spanelightning></div></div></div>';}  
    
//WEATHER34 fire risk // fahrenheit
 else if ($weather["temp_units"]=='F' && ($weather["humidity"]<=40) && ($weather["temp"]>=80.6)){echo '<spanelightning><alertvalue><orange>'.number_format($weather["temp"],1).' '.$weatherunitf.'</orange> Caution Fire risk is high <alertadvisory>'.$newalert.'
   </spanelightning></div></div></div>';}   
	 

  
 ///WEATHER34 aurora
 
 else if ($kp>=6)
  {echo '<spanelightning><alertvalue><orange>'.number_format($kp,1).'</orange> 144MHz Radio Aurora or Viewing Possible
   </spanelightning></div></div></div>';}  
   
   
   
   //weather34 wu alerts rain,snow   
  else if ($wuskydayprecipIntensity0>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow0>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}    
  else if ($wuskydayprecipIntensity1>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow1>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}  
  else if ($wuskydayprecipIntensity2>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow2>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
  else if ($wuskydayprecipIntensity3>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow3>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
  else if ($wuskydayprecipIntensity4>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow4>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydayprecipIntensity5>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow5>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';} 
  else if ($wuskydayprecipIntensity6>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow6>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}     
  else if ($wuskydayprecipIntensity7>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}
  else if ($wuskydaysnow7>0 && $position6=="forecast3wu.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
  
  //weather34 darksky alerts rain,snow  
  else if ($darkskydayIcon=='snow' && $position6=="forecast3ds.php")
  {echo '<spanelightning>'.$snowalert.'<alertvalue> Expect <blue>Snow Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}   
    else if ($darkskydayIcon=='rain' && $position6=="forecast3ds.php")
  {echo '<spanelightning><alertvalue> Expect <blue>Rain Showers</blue> This Week <alertadvisory>'.$newalertcold.'</alertadvisory>
   </spanelightning></div></div></div>';}     
   
  
  
 //WEATHER34 solar eclipse events and no alerts 
 else {echo '<spanelightning><alertvalue>'.$eclipse_default.'</spanelightning></div></div></div>';}   
  
 
  ?></noalert></div></div>