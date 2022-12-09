<?php
$out1 = "";


if (isset($_POST['year']) && is_numeric($_POST['year'])) {
    $year = $_POST['year'];


    switch ($year % 10) {
        case 0:
        case 1:
            $color = "Balta";
            break;
        case 2:
        case 3:
            $color = "Juoda";
            break;
        case 4:
        case 5:
            $color = "Žalia";
            break;
        case 6:
        case 7:
            $color = "Raudona";
            break;
        case 8:
        case 9:
            $color = "Geltona";
            break;
        default:
            $color = "Ups!!! Įveskite tinkamą reikšmę.";
    }

    $out1 = "$year metai yra  $color spalva";


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trecia uzduotis</title>
</head>

<body>
<div class="col-6 m-auto bg-primary bg-opacity-25 pb-3">
    <?php
    include("navmenu.php");
    ?>
    <h4 class="text-center my-3">3. Japonų kalendorius</h4>
    <div class="col-3 m-auto text-center">

        <form action="" method="post">
            <label for="">Įveskite metus:</label>
            <input class="form-control m-2" name="year" type="text" value="<?php
            if (isset($_POST['year']) >= 1) {
                echo $year;
            };
            ?>" required>

            <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>

        </form>

        <div class="ms-2">
            <?php if (isset($color) && $color == 'Juoda') {
                echo '<p class="bg-dark text-white ">' . $out1 . '</p>';
            }
            if (isset($color)&& $color == 'Žalia') {
                echo '<p class="bg-success text-white ">' . $out1 . '</p>';
            }
            if (isset($color)&& $color == 'Geltona') {
                echo '<p class="bg-warning text-dark ">' . $out1 . '</p>';
            }
            if (isset($color)&& $color == 'Balta') {
                echo '<p class="bg-white text-dark ">' . $out1 . '</p>';
            }
            if (isset($color)&& $color == 'Raudona') {
                echo '<p class="bg-danger text-white ">' . $out1 . '</p>';
            }
            ?>
        </div>
    </div>

</div>
</body>

</html>