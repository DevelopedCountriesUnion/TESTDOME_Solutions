--- PHP --- 

<?php

function groupByOwners(array $files) : array
{
    $result = [];
    
    foreach($files as $file => $owner){
        $result[$owner][] = $file;
    }
    return $result;
}

/*
foreach ($array as $value) {
  code to be executed;
}
*/

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(groupByOwners($files));
