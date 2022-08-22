<?php
$out = '';
if (isset($_POST['k1']) &&  $_POST['k1'] != '') {
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $k3 = $_POST['k3'];

    if (($k1 + $k2) > $k3 && ($k1 + $k3) > $k2 && ($k2 + $k3) > $k1) {
        $out = "Rezultatas: Trikampį sudaryti galime";
    } else {
        $out = "Rezultatas: Neįmanoma sudaryti trikampio";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma uzduotis</title>
</head>

<body>
    <div class="col-6 m-auto bg-primary bg-opacity-25 pb-3">
        <?php
        include("navmenu.php");
        ?>
        <div class="col-3 m-auto">
            <h4 class="text-center my-3">Pirma užduotis</h4>
            <form action="" method="post">
                <input class="form-control m-2" name="k1" type="text" placeholder="Įvesti kraštinės A ilgį">
                <input class="form-control m-2" name="k2" type="text" placeholder="Įvesti kraštinės B ilgį">
                <input class="form-control m-2" name="k3" type="text" placeholder="Įvesti kraštinės C ilgį">
                <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>
            </form>
            <div><?php echo $out ?></div>
        </div>

    </div>
</body>

</html>