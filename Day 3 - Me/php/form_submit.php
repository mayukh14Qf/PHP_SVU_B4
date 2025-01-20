<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php

    function form_validate()
    {
        $name = $_POST['id'];
        $pswd = $_POST['pswd'];
        $email = $_POST['email'];

        if(empty($name) || empty($pswd) || empty($email)){
            echo "
            <title>Invalid input</title>
            <p>Invalid inputs detected...</p>
            <p>Redirecting to form again, in 10 seconds...</p>
            ";
            // header("Location:../index.php?error_msg=You have given empty field :(");
            header("Location:../index.php");

            // sleep(10);
        }
        else{
            echo "
            <div class='display-box'>
                <br>
                Data Received!
                <br><br>Name: $name<br>
                Password: $pswd<br>
                Email: $email
                </div>
            ";
        }
    }

    form_validate();

    ?>
</body>

</html>