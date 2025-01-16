<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <form action="php/form_submit.php" method="POST">
        <table>
            <tbody>
                <tr>
                    <td class="left">
                        <label for="id">User ID: </label>
                    </td>
                    <td class="right">
                        <input type="text" name="id" id="id">
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label for="pswd">Password: </label>
                    </td>
                    <td class="right">
                        <input type="text" name="pswd" id="pswd">
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label for="email">Email: </label>
                    </td>
                    <td class="right">
                        <input type="text" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="right">
                        <input type="submit" value="Submit!">
                    </td>
                </tr>
    </form>
    </tbody>
    </table>
</body>

</html>