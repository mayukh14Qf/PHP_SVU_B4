<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwO</title>
    <link rel="stylesheet" href="../assets/style.css"> <!-- why u no work???? -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: black;
            color: yellow;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }

        input[type="text"] {
            padding: 10px 20px;
            background-color: transparent;
            border: 1px solid yellow;
            font-size: 18px;
            color: red;
            margin-left: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: transparent;
            border: 1px solid red;
            font-size: 18px;
            color: red;
        }

        label,
        p {
            font-size: 32px;
            margin-top: 20px;
        }

        .sticky-footer {
            position: fixed;
            bottom: 0;
            background-color: black;
            color: yellow;
            padding: 10px;
        }
    </style>
</head>

<body>

    <form action="" method="GET">
        <label for="word1">First word: </label>
        <input type="text" name="word1" id="word1" placeholder="Enter first word">
        <br>
        <label for="word2">Second word: </label>
        <input type="text" name="word2" id="word2" placeholder="Enter second word">
        <br>
        <input type="submit" value="Check">
    </form>

    <?php
    error_reporting(E_ERROR | E_PARSE);
    function sanitize_and_sort($arr): array
    {
        sort($arr);
        return array_unique($arr);
    }
    function anagram_check($word1, $word2): bool
    {
        if (count($word1) != count($word2))
            return false;
        $word1 = sanitize_and_sort($word1);
        $word2 = sanitize_and_sort($word2);
        if (!($word1 == $word2))
            return false;
        return true;
    }

    $word1 = strtolower($_GET["word1"]); //PETA
    $word2 = strtolower($_GET["word2"]); //TEAF
    if (!(empty($word1) || empty($word2))) {
        if (anagram_check(str_split($word1), str_split($word2))) {
            echo "<p>The words are anagrams</p>";
        } else {
            echo "<p>The words are not anagrams</p>";
        }
    }
    ?>
    <div class="sticky-footer">
        <p>To return to ND Array Page...<a href="../">Click here</a></p>
    </div>
</body>

</html>