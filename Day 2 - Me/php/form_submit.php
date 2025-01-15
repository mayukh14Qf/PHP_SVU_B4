<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a href='../index.html'><button>GO BACK!</button></a>
            ";
        }
        else{
            echo "
                <title>Success!</title>
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