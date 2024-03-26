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
        <form class="question-container" action="./post.php" method="post">
            <div>
                1. A-t-il des lunettes ?
                <label for="q1-oui">
                    oui
                    <input type="radio" name="q1" id="q1-oui" value="1">
                </label>

                <label for="q1-non">
                    non
                    <input type="radio" name="q1" id="q1-non" value="0">
                </label>
            </div>
            
            <div>
                2. A-t-il une moustache ?
                <label for="q2-oui">
                    oui
                    <input type="radio" name="q2" id="q2-oui" value="1">
                </label>

                <label for="q2-non">
                    non
                    <input type="radio" name="q2" id="q2-non" value="0">
                </label>
            </div>

            <div>
                3. A-t-il un chapeau ?
                <label for="q3-oui">
                    oui
                    <input type="radio" name="q3" id="q3-oui" value="1">
                </label>

                <label for="q3-non">
                    non
                    <input type="radio" name="q3" id="q3-non" value="0">
                </label>
            </div>

            <div>
                4. A-t-il des cheveux ?
                <label for="q4-oui">
                    oui
                    <input type="radio" name="q4" id="q4-oui" value="1">
                </label>

                <label for="q4-non">
                    non
                    <input type="radio" name="q4" id="q4-non" value="0">
                </label>
            </div>

            <div>
                5. A-t-il une boucle d'oreille ?
                <label for="q5-oui">
                    oui
                    <input type="radio" name="q5" id="q5-oui" value="1">
                </label>

                <label for="q5-non">
                    non
                    <input type="radio" name="q5" id="q5-non" value="0">
                </label>
            </div>
            <div>
                6. A-t-il une barbe ?
                <label for="q6-oui">
                    oui
                    <input type="radio" name="q6" id="q6-oui" value="1">
                </label>

                <label for="q6-non">
                    non
                    <input type="radio" name="q6" id="q6-non" value="0">
                </label>
            </div>
            <div>
            7. A-t-il un noeud papillon ?
                <label for="q7-oui">
                    oui
                    <input type="radio" name="q7" id="q7-oui" value="1">
                </label>

                <label for="q7-non">
                    non
                    <input type="radio" name="q7" id="q7-non" value="0">
                </label>
            </div>
            
            <button type="submit">submit</button>
        </form>
    </div>
    <!-- <script src="./index.js"></script> -->
</body>


</html>

<!-- <label for="q1">
                1. A-t-il des lunettes ?
            </label>
            <label for="q2">
                2. A-t-il une moustache ?
                <input id="q2" type="checkbox" name="q2">
            </label>
            <label for="q3">
                3. A-t-il un chapeau ?
                <input id="q3" type="checkbox" name="q3">
            </label>
            <label for="q4">
                4. A-t-il des cheveux ?
                <input id="q4" type="checkbox" name="q4">
            </label>
            <label for="q5">
                5. A-t-il une boucle d'oreille ?
                <input id="q5" type="checkbox" name="q5">
            </label>
            <label for="q6">
                6. A-t-il une barbe ?
                <input id="q6" type="checkbox" name="q6">  
            </label>
            <label for="q7">
                7. A-t-il un noeud papillon ?
                <input id="q7" type="checkbox" name="q7">
            </label> -->