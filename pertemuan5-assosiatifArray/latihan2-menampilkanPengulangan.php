<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pengulangan array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
<?php
$angka = [
    [1,2,3],[4,5,6],[7,8,9]
];
?>

    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $b): ?>
            <div class="kotak"><?php echo $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>