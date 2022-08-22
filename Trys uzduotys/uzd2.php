<?php
$out = '';
if (isset($_POST['year1']) &&  $_POST['year1'] != '') {
    $year1 = $_POST['year1'];
    $num = (($year1 - 1896) / 4) + 1;


    if ($year1 % 4 == 0) {
        $out = "$year1 - Olimpiniai metai, $num-a olimpiada.";
    } elseif ($year1 < 1896) {
        $out = "$year1 metais olimpiadų dar nebuvo.";
    } else {
        $out = "$year1 - ne Olimpiniai metai.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antra uzduotis</title>
</head>

<body>
    <div class="col-6 m-auto bg-primary bg-opacity-25 pb-3">
        <?php
        include("navmenu.php");
        ?>
        <div class="col-3 m-auto mt-3">
            <h4 class="text-center my-3">Antra užduotis</h4>
            <form action="" method="post">
                <input class="form-control m-2" name="year1" type="text" placeholder="Įvesti metus">

                <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>
            </form>
            <div class="m-2"><?php echo $out ?></div>
        </div>

    </div>
</body>

</html>