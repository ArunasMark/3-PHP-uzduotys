<?php
$out = '';
if (isset($_POST['year1']) &&  $_POST['year1'] != '') {
    $year1 = $_POST['year1'];
    $num = (($year1 - 1896) / 4) + 1;


    if ($year1 % 4 == 0) {
        $out = '<p class="text-secondary fw-bold">'.$year1. ' metai - olimpiniai metai, ' .$num.'-a olimpiada.';'</p>';
    } elseif ($year1 < 1896) {
        $out = '<p class="text-danger fw-bold">'.$year1.' metais olimpiadų dar nebuvo.</p>';
    } else {
        $out = '<p class="text-primary fw-bold">'.$year1.' metai - ne olimpiniai metai.</p>';
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
        <h4 class="text-center my-3">2. Olimpinių metų skaičiuoklė</h4>
        <div class="col-3 m-auto mt-3 text-center">

            <form action="" method="post">
                <label for="">Įveskite metus:</label>
                <input class="form-control m-2" name="year1" type="text" value="<?php
                if(isset($_POST['year1'])!=''){
                    echo $year1;
                };
                ?>" required>

                <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>
            </form>
            <div class="m-2"><?php echo $out ?></div>
        </div>

    </div>
</body>

</html>