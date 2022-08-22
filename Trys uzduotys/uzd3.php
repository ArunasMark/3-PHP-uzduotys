<?php
$out1 = "";
$out2 = "";
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

    $out1 = "Spalva: $color";
    $out2 = "Įvesti metai: $year.";
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
        <div class="col-3 m-auto">
            <h4 class="text-center my-3">Trečia užduotis</h4>
            <form action="" method="post">
                <input class="form-control m-2" name="year" type="text" placeholder="Įvesti metus">
                <div class="text-danger ms-2"><?php if ($year == 0) {
                                                    echo ("Ups!!! Įveskite tinkamą reikšmę.");
                                                } ?></div>

                <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>

            </form>

            <div><?php echo $out2 ?></div>
            <div><?php echo $out1 ?></div>
        </div>

    </div>
</body>

</html>