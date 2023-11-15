<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $depot = [122,143,45,28];
        $retrait = [12,47,60,80];
    ?>
    <p><?php distributer($depot, "Depot")?></p>
    <p><?php distributer($retrait, "Retrait")?></p>
</body>
</html>
<?php
function distributer(array $arr, string $str){
    $arr = array_sum($arr)/count($arr);
    echo "$str : $arr";
}
?>