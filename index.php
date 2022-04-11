<?php
        $con = mysqli_connect("localhost", "root", "","it-master-2022-veterany");
        session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="cards">
            <?php
$q = mysqli_query($con,"SELECT * FROM `1`");
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
</div>
                ";
        }
                    ?>
        </div>
    </div>
</body>

</html>