<?php
    include 'srcphp/connect.php';
    $person =  mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `1` WHERE id = " . $_GET['id']));
    $awardsNames = ["Орден Ленина", "Медаль «За доблестный труд в Великой Отечественной войне 1941—1945 гг.»", "Медаль «В память 800-летия Москвы»", "Народный артист РСФСР", "Народный артист Узбекской ССР", "Сталинская премия"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/person.css">
    <link rel='shortcut icon' href='img/icons/index.png' type='image/x-icon'>
    <title>
        <?php
            echo $person["name"];
        ?>
    </title>
</head>

<body>
    <div class="header">
        <?php
            echo "<a href=rn.php?rn=" . $person["area"] . ">назад</a>"
        ?>
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
$strs = [];
$li = 0;
for($i=0;$i<strlen($person["awardes"]);$i++)
{
    if($person["awardes"][$i] == " " || $i == strlen(intval($person["awardes"])-1))
    {
        array_push($strs,substr($person["awardes"], $li, $i-$li));
        $li = $i+1;
    }
}
// strpos($person["awardes"], " ", strlen($person["awardes"]-3)
// array_push($strs,substr($person["awardes"], $li, $i-$li));

for($i=0;$i<count($strs);$i++){
    if($i%2===0){
        echo "
        <div class='str'>
            <div class='el el__text el__text_l'>
                <h2> " . $awardsNames[intval($strs[$i])-1] . " </h2>
            </div>
            <div class='el el__img'><img src='img/awardes/a-".$strs[$i].".jpg'></div>
        </div>
        ";
    } else {
        echo "
        <div class='str'>
            <div class='el el__img'><img src='img/awardes/a-".$strs[$i].".jpg'></div>
            <div class='el el__text el__text_r'>
                <h2> " . $awardsNames[intval($strs[$i])-1] . " </h2>
            </div>
        </div>";
    }
}
?>
    </div>
    <script>
        document.getElementById("p").style.height = window.innerHeight + "px";
    </script>
</body>

</html>