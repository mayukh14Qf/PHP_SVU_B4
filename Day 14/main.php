<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #heading{
            background-color: red;
        }
        #footer{
            background-color: yellow;
            color:white;
        }
    </style>
</head>
<body>
    <nav>
        <?php 
            include("content.php");
            echo $color;
        ?>
    </nav>

    <main>
        This is your Main Section of your page 
    </main>

    <footer>
            <?php 
            include("content2.html");
             ?>
    </footer>
</body>
</html>