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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp Qui Est Ce ?</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="title">
        <h1>Qui est-ce ?</h1>
    </div>
    <div class="main-container">
        <div class="images-container">
            <?php foreach ($personnnages as $personnnage) { ?>
                <img src=<?= "./images/$personnnage" ?> alt="" srcset="">
                <?php
            }
            ?>
        </div>
        <div class="question-container">
            <label for="q1">
                1. A-t-il des lunettes ?
                <input id="q1" type="checkbox">
            </label>
            <label for="q2">
                2. A-t-il une moustache ?
                <input id="q2" type="checkbox">
            </label>
            <label for="q3">
                3. A-t-il un chapeau ?
                <input id="q3" type="checkbox">
            </label>
            <label for="q4">
                4. A-t-il des cheveux ?
                <input id="q4" type="checkbox">
            </label>
            <label for="q5">
                5. A-t-il une boucle d'oreille ?
                <input id="q5" type="checkbox">
            </label>
            <label for="q6">
                6. A-t-il une barbe ?
                <input id="q6" type="checkbox">
            </label>
            <label for="q7">
                7. A-t-il un noeud papillon ?
                <input id="q7" type="checkbox">
            </label>
        </div>
    </div>
</body>

</html>