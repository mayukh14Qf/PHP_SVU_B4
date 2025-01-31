<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        #login{
            border: 2px solid black;
            margin: auto;
            padding: 15px;
        }
        h4{
            text-align: center;
        }
        #invalid{
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>
    
    <h4>LOG IN </h4>

    <?php
    if(array_key_exists("id",$_GET)){
        echo "<h6 id='invalid'>INVALID USERNAME OR PASSWORD</h6>";
    }
    ?>

    <form action="dashboard.php" method="get">
        <table id="login">
            <tr>
                <td><label for="username">User Name : </label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>


</body>
</html>