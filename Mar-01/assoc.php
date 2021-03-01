<?php
//         key   val    key         VALUE
//                                 0      1 
$user = ['name'=>'A', 'phones'=>['111','222']];
echo $user['phones'][1];

// JSON
// ASSOC array is JSON
// let user = {"name":"a", "last_name":"b"}
// [] array
// key and values
//        KEY     VAL     KEY      VAL
// $user = ['name'=>'A', 'last_name'=>'B'];
// Associative array
// echo 'Hi '.$user['name'].' '.$user['last_name'];
// echo "Hi {$user['name']} {$user['last_name']}"; // use {}
// $user['age'] = 1;
// unset($user['age']); // remove key value from array
// I made a mistake, how do I remove the age
// from the array?

// var_dump // do not use echo
// print_r // do not use echo
// json_encode
// echo json_encode($user); // compared to JSON.stringify
















