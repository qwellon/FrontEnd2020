<?php

//1.
// $arr = [];
// for ($i = 0; $i < 11; $i++) {
//     $arr[$i] = rand(10, 100);
// }
// $revarr = array_reverse($arr);

// for ($i = 0; $i < 11; $i++) {
//     var_dump($arr[$i] . " ");

//     var_dump($revarr[$i] . " ");
//     var_dump("<br>");
// }




//3

// $picarr = array("img/1.jpg", "img/2.jpg");

// $pic = $picarr[rand(0, 1)];
// 


//4
$arr = [];
$arrsec = [];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $arrsec[$j] = rand(10, 100);
    }
    $arr[$i] = $arrsec;
    var_dump($arr[$i]);
    var_dump("</br>");
}

var_dump("</br> ====================================== </br>");

for ($i = 0; $i < 5; $i++) {
    array_multisort($arr[$i], SORT_ASC);
}
// array_multisort(
//     $arr[0],
//     SORT_ASC,
//     $arr[2],
//     SORT_ASC,
//     $arr[3],
//     SORT_ASC,
//     $arr[4],
//     SORT_ASC
// );
for ($i = 0; $i < 5; $i++) {
    var_dump($arr[$i]);
    var_dump("</br></br>");
}


//var_dump($arr)
?>
<!-- <div>
     <img src="<?php echo $pic  ?>" alt="" width="500">
 </div> -->