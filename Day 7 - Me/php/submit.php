<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7</title>

    <style>
        td,
        tr,
        tbody,
        thead {
            border: 1px solid black;
        }

        td {
            font-size: 22px;
            padding: 20px;
            padding-right: 30px;
            color: red;
        }
    </style>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arr1 = $_POST["form"];
    } else {
        exit();
    }

    $name = $arr1[0];
    $email = $arr1[1];
    $password = $arr1[2][0];
    $confirm_password = $arr1[3][0];
    $phone = $arr1[4];

    ?>
    <h1>Document Recieved!</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Password Match?</th>
                <th>Phone</th>
                <th>Skills</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $confirm_password; ?></td>
                <td><?php echo $password == $confirm_password ? "Yes" : "No"; ?></td>
                <td><?php echo $phone; ?></td>
                <td>
                    <?php
                    for ($i = 5; $i < count($arr1); $i++) {
                        echo $arr1[$i][0] . "<br>";
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>