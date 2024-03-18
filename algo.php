<?php 
$value = "1011010";

$tableau =  [[1,0,0],[0,1,0],[1,1,0],[0,0,1],[1,1,1],[0,1,1],[1,0,1]];

$errorColumn = null;
for ($i=0; $i < count($tableau); $i++) { 
    $value = $tableau[$i];
    if($value[0] == $s1 && $value[1] == $s2 && $value[2] == $s3){
        $errorColumn = $i + 1;
    }   
}

if($errorColumn == null){
    echo "pas d'error";
}else{
    echo "Vous avez menti à la question". $errorColumn;
}

// foreach($tableau as $value){

// }

// $s1Somme = 0;
// for ($i=0; $i < strlen($value) ; $i++) { 
//     if($i % 2 == 0){
//         $s1Somme += intval($value[$i]);
//         echo $value[$i];
//         echo "</br>";
//     }
// }
// $s1 = $s1Somme %2;

?>