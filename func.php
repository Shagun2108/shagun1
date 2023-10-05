<?php  
 echo "hello world";

function processMarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value) {
        $sum+=$value;
        # code...
    }
    return $sum;
}
$rohan=[12,23,45,67,89];
echo processMarks($rohan);
echo"<br>";
// *********************************************************
$d=date("d F  y");
echo $d ."time ===";
$time=date('g:i A');
echo $time;
 $favcolor=array('shgaun'=>"red", 
 'roahn'=>"green",
 "namen"=>"yellow");
 echo $favcolor[namen];

foreach ($favcolor as $key => $value) {
    # code...
    echo "< br>favourite color of $key is$value";
}

 $multidim=array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
 );
 echo var_dump($multidim);
 echo $multidim[0][0];
  for ($i=0; $i < count($multidim); $i++) { 
    for ($j=0; $j <count($multidim[$i]); $j++) { 
        # code...
        echo "  ". $multidim[$i][$j];
    }
    # code...
  }
?>
