<?php

date_default_timezone_set("Africa/lagos");

$time1 =strtotime("2021-11-02");
$now =strtotime(date("Y-m-d"));

$total =$now - $time1;
echo floor($total/(60*60*24))."<br>";


// $date1 = new DateTime("now");
// $interval = $origin->diff($target);

// $time = date("y-m-d");
// $time2 =date("20211201");

// $total =$time - $time2;
// $now =new DateTime('now');
// $diff = $now->diff($time)->format('%y%m %d');


// $date2 = new DateTime('now');
// $date1 = new DateTime('2021-11-01');

// $interval = date_diff($date1, $date2);

// echo $interval->format('%a')."<br>";
// $num = $interval->format('%a');

// if( $num >30){
//     echo $num." good";
//     echo $num+20;
// }else{
//     echo $num." not good";
// }



// $origin = new DateTime('2021-11-01');
// $target = new DateTime('now');
// $interval = $origin->diff($target);

// echo $interval->format('%R%a');
// $time = $interval->format('%R%a');
// if($time > 10){
//     echo "correct";
// }else{
//     echo "not correct";
// }



// $date1 = new DateTime("now");
// $date2 = new DateTime("tomorrow");

// var_dump($date1 == $date2);
// var_dump($date1 < $date2);
// var_dump($date1 > $date2);

?>