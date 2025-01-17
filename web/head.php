<?php
    require_once "functions.php";

    $lang = ($_SESSION['language']) ? $_SESSION['language'] : "th";

    if ($page == "home") {
        $MetaSQL = "SELECT * FROM `pages` WHERE `alias` = 'home'";
        $MetaQuery = mysqli_query($con, $MetaSQL) or die(mysqli_error($con));
        $MetaResult = mysqli_fetch_array($MetaQuery);
    }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?=$MetaResult['header_title_'.$lang];?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />