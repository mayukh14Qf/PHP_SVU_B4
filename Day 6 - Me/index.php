<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 6</title>
</head>

<body>
    <p>To check out the anagram checker page...<a href="php/anagram_check.php">Click here</a></p>
    <div>
        <h3>Creating 2D Array in PHP</h3>
        <pre>
            <code>
                // Creating 2D Array
                $arr1 = array(
                    array("John", 25, "New York"),
                    array("Doe", 30, "California"),
                    array("Smith", 35, "Texas")
                );
            </code>
        </pre>
        <?php
            $arr1 = array(
                array("John", 25, "New York"),
                array("Doe", 30, "California"),
                array("Smith", 35, "Texas")
            );
        ?>
    </div>
    <div>
        <h3>Accessing 2D Array Elements</h3>
        <pre>
            <code>
                echo " ".$arr1[0][0]." lives in ".$arr1[0][2]." ";
            </code>
        </pre>
        <?php
            echo "<p>".$arr1[0][0]." lives in ".$arr1[0][2]."</p>";
        ?>
    </div>
    <div>
        <h3>Creating 3D Array in PHP</h3>
        <pre>
            <code>
                // Creating 3D Array
                $arr2 = array(
                    array(
                        array("John", 25, "New York"),
                        array("Doe", 30, "California"),
                        array("Smith", 35, "Texas")
                    ),
                    array(
                        array("John", 25, "New York"),
                        array("Doe", 30, "California"),
                        array("Smith", 35, "Texas")
                    )
                );
            </code>
        </pre>
        <?php
            $arr2 = array(
                array(
                    array("John", 25, "New York"),
                    array("Doe", 30, "California"),
                    array("Smith", 35, "Texas")
                ),
                array(
                    array("Ram", 25, "where the yanky people live"),
                    array("Shyam", 30, "India"),
                    array("Hehe", 35, "HeheLand")
                )
            );
        ?>
    </div>
    <div>
        <h3>Accessing 3D Array Elements</h3>
        <pre>
            <code>
                echo " ".$arr2[1][2][0]." lives in ".$arr2[1][1][2]." ";
            </code>
        </pre>
        <?php
            echo "<p>".$arr2[1][2][0]." lives ".$arr2[1][0][2]."</p>";
        ?>
    </div>
</body>

</html>