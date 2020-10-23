<?php
if (isset($_GET['multi1'])){
    $mlt1 = $_GET['multi1'];
    $mlt2 = $_GET['multi2'];
    if (isset($mlt1, $mlt2)){
        $result = ($mlt1 * $mlt2);
    } else {
    echo "Impossible";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <div class="bg-danger mt-5 pt-5 rounded ">
            <form class="offset-3">
                <select class="col-lg-2" name="multi1">
                    <?php $i = 0; 
                    while($i < 100):
                    {echo $i++;
                    }
                    ?>
                    <option><?= $i ?></option>
                    <?php endwhile ?>
                </select>
                <select class="col-lg-2" name="multi2">
                    <?php $i = 0; 
                    while($i < 100):
                    {echo $i++;
                    }
                    ?>
                    <option><?= $i ?></option>
                    <?php endwhile ?>
                </select>
                <input class="col-lg-2" type="submit" value="calculer">
            </form>       
        <h1 class="text-light text-center pt-5 pb-5"><?= $result ?></h1>
    </div>
</body>
</html>