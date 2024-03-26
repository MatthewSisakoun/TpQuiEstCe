    
<?php
$nombre = "1011010";

$s1 = (($nombre[0] + $nombre[2] + $nombre[4] + $nombre[6]) % 2);
$s2 = (($nombre[1] + $nombre[2] + $nombre[4] + $nombre[5]) % 2);
$s3 = (($nombre[3] + $nombre[4] + $nombre[5] + $nombre[6]) % 2);

echo 'votre nombre ='. $nombre;
echo '<br>'; 
echo 's1 = '. $s1;
echo '<br>';
echo 's2 = '. $s2;
echo '<br>';    
echo 's3 = '. $s3;
echo '<br>'; 

$signaturesyndrome =  [[1,0,0],[0,1,0],[1,1,0],[0,0,1],[1,1,1],[0,1,1],[1,0,1]];

$errorColumn = null;
for ($i=0; $i < count($signaturesyndrome); $i++) { 
    $value = $signaturesyndrome[$i];
    if($value[0] == $s1 && $value[1] == $s2 && $value[2] == $s3){
        $errorColumn = $i + 1;
    }   
}

if($errorColumn == null){
    echo "Vous n'avez pas menti";
}else{
    echo "Vous avez menti à la question ". $errorColumn;
}

?>
