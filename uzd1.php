<?php
$out = '';
if (isset($_POST['k1']) &&  $_POST['k1'] != '') {
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $k3 = $_POST['k3'];

    if (($k1 + $k2) > $k3 && ($k1 + $k3) > $k2 && ($k2 + $k3) > $k1) {
        $out = "<b class='alert alert-secondary col-6 '>Trikampį sudaryti galime.</b>";
    } else {
        $out = "<b class='alert alert-danger col-6 ' >Neįmanoma sudaryti trikampio.</b>";
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
        <h4 class="text-center my-3">1. Ar įmanoma iš pateiktų trijų kraštinių ilgių sudaryti trikampį?</h4>
        <div class="col-8 m-auto text-center pb-3">

            <form action="" method="post" class="text-center col-3 m-auto">
                <label for="">Įvesti kraštinės A ilgį:</label>
                <input class="form-control m-2" name="k1" type="text"
                       value="<?php
                       if(isset($_POST['k1'])!=''){
                           echo $k1;
                       };
                        ?>" >
                <label for="">Įvesti kraštinės B ilgį:</label>
                <input class="form-control m-2" name="k2" type="text"  value="<?php
                if(isset($_POST['k2'])!=''){
                    echo $k2;
                };
                ?>">
                <label for="">Įvesti kraštinės C ilgį:</label>
                <input class="form-control m-2" name="k3" type="text"  value="<?php
                if(isset($_POST['k3'])!=''){
                    echo $k3;
                };
                ?>">


                <button type="submit" class="btn btn-primary ms-2 my-3">Skaičiuoti</button>
            </form>
            <?php if($out!=''){
            echo '<p class="text-primary fw-bold mb-4">Rezultatas:  </p>'.$out ;
        };
            ?>
        </div>

    </div>
</body>

</html>