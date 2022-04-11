<?php
    $con = mysqli_connect("localhost", "root", "","it-master-2022-veterany");
    session_start();
    $person =  mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `1` WHERE id = " . $_GET['id']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/person.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <a href="index.php">назад</a>
        <h1>
<?php
    echo $person["name"];
?>
        </h1>
    </div>

    <?php
        echo '<div class="prev" style="background-image: url(' . $person["foto"] . '); " id="p">';
    ?>
    
    </div>
    <div class="bio">
        <h1>Биография</h1>
        <div class="bio__inner">
        <?php
            echo $person["bio"];
        ?>
        </div>
    </div>
    <br>
    <h1>Награды</h1>
    <div class="awards">
        <?php

for($i=0;$i<strlen($person["awardes"]);$i++){
    
}

        ?>
        <div class="str">
            <div class="el el__text el__text_l">
                <h2>Орден Ленина </h2> Получен дважды </div>
            <div class="el el__img"><img src="order_of_Lenin.png"></div>
        </div>
        <div class="str">
            <div class="el el__img"><img src="2.jpg" alt=""></div>
            <div class="el el__text el__text_r">
                <h2>Медаль «За доблестный труд в Великой Отечественной войне 1941—1945 гг.»</h2>
            </div>
        </div>
        <div class="str">
            <div class="el el__text el__text_l">
                <h2>Медаль «В память 800-летия Москвы»</h2>
            </div>
            <div class="el el__img"><img src="3.jpg" alt=""></div>
        </div>
        <div class="str">
            <div class="el el__img"><img src="4.png" alt=""></div>
            <div class="el el__text el__text_r">
                <h2>Народный артист РСФСР</h2>
            </div>
        </div>
        <div class="str">
            <div class="el el__text el__text_l">
                <h2>Народный артист Узбекской ССР</h2>
            </div>
            <div class="el el__img"><img src="5.png" alt=""></div>
        </div>
        <div class="str">
            <div class="el el__img"><img src="6.jpg" alt=""></div>
            <div class="el el__text el__text_r">
                <h2>Сталинская премия</h2>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("p").style.height = window.innerHeight + "px";
    </script>
</body>

</html>