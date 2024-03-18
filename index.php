<?php
    $personnnages = [
        "0000000.jpg",
        "0010011.jpg",
        "0100101.jpg",
        "0110110.jpg",
        "1000110.jpg",
        "1010101.jpg",
        "1100011.jpg",
        "1110000.jpg",
        "0001111.jpg",  
        "0011100.jpg",  
        "0101010.jpg",
        "0111001.jpg",
        "1001001.jpg",
        "1011010.jpg",
        "1101100.jpg",
        "1111111.jpg"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>  
    <div class="images-containner">
        <?php foreach($personnnages as $personnnage){?>
            <img 
                src=<?="./images/$personnnage"?>
                alt=""
                srcset=""
            >
        <?php 
            }
        ?>
    
    </div>
</body>
</html>
