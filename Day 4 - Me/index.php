<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 4</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
        <!-- All about Arrays! -->
        <div>
            <h3>For Loops in Array</h3>
            <?php
                $a = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                echo "<p>Given array: [1,2,3,4,5,6,7,8,9,10,11,12,13]</p>";
                for ($i = 0; $i < 10; $i++) {
                    echo $a[$i] ."<br>";
                }
            ?>
        </div>
        <div>
        <h3>Insertion in Array</h3>
            <?php
                // $a = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                // echo "<p>Given array: [1,2,3,4,5,6,7,8,9,10,11,12,13]</p>";
                echo "<p>Inserting 'Ritesh' at index 3</p>";
                $a[3] = "Ritesh";
                for ($i = 0; $i < 10; $i++) {
                    echo $a[$i] ."<br>";
                }
            ?>
        </div>
        <div>
        <h3>Var Dumping an Array</h3>
            <?php
                // $a = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                // echo "<p>Given array: [1,2,3,4,5,6,7,8,9,10,11,12,13]</p>";
                echo "<p>After Var Dump -> </p>";
                var_dump($a);
                echo "<br>";
            ?>
        </div>
        <div>
        <h3>Length of an Array</h3>
            <?php
                // $a = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
                echo "<p>Given array: [1,2,3,4,5,6,7,8,9,10,11,12,13]</p>";
                echo "<br>";
            ?>
        </div>
</body>
</html>