<?php

$user = ['name'=>'a', 'last_name'=>'b'];
foreach($user as $key => $value){
  echo "<div>$key $value</div>";
}




// arrays means many, many means loop
// $letters = ['a', 'b', 'c'];
// foreach($letters as $index=>$value){
//   // echo $index; // 012
//   // echo $value; // abc
//   echo "$index $value";
// }
// foreach($letters as $letter){
//   echo $letter;
// }
// sizeof or use count
// for( $i = 0 ;  $i < count($letters); $i++ ){
//   echo $letters[$i];
// }


