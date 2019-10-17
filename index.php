<?php
$file = 'file.txt';
 $f = fopen($file, "r") or 
   die("File does not exist!");
   
 $a = Array ();
 while (($data = fgets($f))!==false) {
  $a0 = explode (" ",$data);
  foreach ($a0 as $item) 
    if (is_numeric(trim($item))) $a[] = $item;
 }
 fclose ($f);
 foreach ($a as $item) echo $item.' ';

 $arr=array();
 
 for ($i=0; $i < count($a); $i+=2) { 
 	$arr[]=$a[$i]*$a[$i+1];
 	$arr[]=$a[$i]/$a[$i+1];
 	$arr[]=$a[$i]+$a[$i+1];
 	$arr[]=$a[$i]-$a[$i+1];
  }
 $neg=fopen('neg.txt', 'w');
 $pos=fopen('pos.txt', 'w');
  for ($i=0; $i < count($arr); $i++) { 
  	if ($arr[$i]>=0) 
  		fputs($pos,$arr[$i]." ");
  	else
  		fputs($neg,$arr[$i]." ");
  }

  fclose('neg.txt');
  fclose('pos.txt');
?>