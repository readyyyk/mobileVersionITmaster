<?php
    include "srcphp/connect.php";
    include "srcphp/rns.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo "
        <link rel='shortcut icon' href='img/icons/" . $_GET["rn"] . ".png' type='image/x-icon'>
        <link rel='shortcut icon' href='img/icons/" . $_GET["rn"] . ".svg' type='image/x-icon'>
        ";
    ?>
    <title>
        <?php
            echo $rns[$_GET["rn"]-1] . " район";
        ?> 
    </title>
    <style>
        h1 {
        font-size: 35px;
        font-family: sans-serif;
        width: 100%;
        text-align: center;
        }
        .header {
        width: 100%;
        position: fixed;
        text-align: center;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.6);
        padding: 0 2em;
        z-index: 1;
        box-sizing: border-box;
        }
        .header a {
        color: black;
        font-family: sant-serif;
        font-size: 20px;
        position: absolute;
        }
        
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <a href="index.php">назад</a>
        <h1>
            <?php
                echo $rns[$_GET["rn"]-1] . " район";
            ?>
        </h1>
        
    </div>
    <div class="content">
        <div class="cards">
            <?php
                $q = mysqli_query($con,"SELECT * FROM `1` WHERE `area` = " . $_GET["rn"]);
                    while( ($card = mysqli_fetch_assoc($q)) ){
                        echo "
                            <div class='card' style='background-image: url( " . $card["foto"] . " ); '>
                                <div class='card__inner'>
                                    <div class='card__text'>
                                        <div class='card__text__l'>" . $card['name'] . "</div>
                                        <div class='card__text__r'>" . $card['dates'] . "</div>
                                    </div>
                                    <div class='card__open'>
                                        <form action='person.php' method='get'>
                                            <label>
                                                <input type='submit' value=" . $card['id'] . " name='id' class='iv'>
                                                <svg style='width: 70px;height:20px;'>
                                                    <g>
                                                        <path
                                                        style='fill:none;stroke:#000000;stroke-width:6;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1'
                                                        d='M 3, 3 35, 17 67,3'/>
                                                    </g>
                                                </svg>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>";
                    }
            ?>
        </div>
    </div>

</body>
</html>
