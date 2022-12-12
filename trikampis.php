<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketvirta uzduotis</title>
</head>

<body>
<div class="col-6 m-auto bg-primary bg-opacity-25 pb-3">
    <?php
    include("navmenu.php");
    ?>
    <?php
    $a = null;
    $b = null;
    $c = null;

    ?>

    <h4 class="text-center my-3">4. Trikampio ploto skaičiuoklė</h4>
    <div class="col-8 m-auto bg-secondary bg-opacity-25 py-3 text-center">
        <form class="col-3 m-auto" action="" method="post">

            <label for="">Įvesti a kraštinės ilgį (cm):</label><br>
            <input class="form-control" type="text" name="krastineA" value="<?php

            if (isset($_POST['krastineA']) != '') {
                $a = $_POST['krastineA'];
                echo $a;
            };
            ?>" required><br>
            <label for="">Įvesti b kraštinės ilgį (cm):</label><br>
            <input class="form-control" type="text" name="krastineB" value="<?php

            if (isset($_POST['krastineB']) != '') {
                $b = $_POST['krastineB'];
                echo $b;
            };
            ?>" required><br>
            <label for="">Įvesti c kraštinės ilgį(cm):</label><br>
            <input class="form-control" type="text" name="krastineC" value="<?php

            if (isset($_POST['krastineC']) != '') {
                $c = $_POST['krastineC'];
                echo $c;
            };
            ?>" required><br>
            <button class="btn btn-info">Skaičiuoti trikampio plotą</button>
            <br>
        </form>

        <br>
        <?php
        function area($a, $b, $c)
        {
            
            if (($a + $b) < $c || ($a + $c) < $b || ($b + $c) < $a) {
                return '<p class="text-danger">Trikampio ploto apskaičiuoti neįmanoma.</p>';
            }
            $trikPerimetras = (($a + $b + $c) / 2);
            $plotas = sqrt($trikPerimetras * ($trikPerimetras - $a) * ($trikPerimetras - $b) * ($trikPerimetras - $c));
            return $plotas;
        }
        echo "Trikampio plotas: " .round(area($a, $b, $c), 2). " cm².<br>";
        echo "Trikampio perimetras: " . $trikPerimetras = $a + $b + $c . " cm.<br>";


        ?>
    </div>
</div>
</body>

</html>
