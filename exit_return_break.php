<?php

// exit is for everything anywhere
// return is used inside functions
// break is used inside loops

$letters = ['a', 'b', 'c'];
foreach($letters as $letter){
  echo "<div>$letter</div>";
  break; // do not use in a loop
}

echo "<div>x</div>";


/*
function test(){
  echo '<div>I am inside test</div>';
  exit;
  echo '<div>This is the next line</div>';
}
test();
echo '<div>x</div>';
*/



/*
echo 'x';
exit();
echo 'y';
*/