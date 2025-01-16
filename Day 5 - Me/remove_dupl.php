<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 5</title>
</head>

<body>
    <p>For associative array page...<a href="index.php">click here</a></p>
    <?php
    function check_in_array($a, $payload)
    {
        if (count($a) == 0)
            return false;
        $low = 0;
        $high = count($a) - 1;
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($a[$mid] == $payload)
                return true;
            if ($payload < $a[$mid])
                $high = $mid - 1;
            else
                $low = $mid + 1;
        }
        return false;
    }
    function remove_dupl($array): array
    {
        $len = count($array);
        $dupl = [];
        $new = [];
        for ($i = 0; $i < $len; $i++) {
            if (check_in_array($dupl, $array[$i]))
                continue;
            else
                $new[] = $dupl[] = $array[$i];
        }
        return $new;
    }
    function printArray($array): void
    {
        echo "[";
        $len = count($array);
        for ($i = 0; $i < $len; $i++) {
            if ($i == ($len - 1))
                echo "$array[$i]";
            else
                echo "$array[$i], ";
        }
        echo "]";
    }

    echo "Given array: ";
    $a = [2, 1, 1, 2, 3, 4, 6, 4, 2];
    printArray($a);
    sort($a);
    echo "<br>";
    echo "After removing duplicates: ";
    $a = remove_dupl($a);
    printArray($a);
    ?>
    <p>Code Part: </p>
    <pre>
        <code>
            function check_in_array($a, $payload)
        {
            if (count($a) == 0)
                return false;
            $low = 0;
            $high = count($a) - 1;
            while ($low <= $high) {
                $mid = floor(($low + $high) / 2);
                if ($a[$mid] == $payload)
                    return true;
                if ($payload < $a[$mid])
                    $high = $mid - 1;
                else
                    $low = $mid + 1;
            }
            return false;
        }
        function remove_dupl($array): array
        {
            $len = count($array);
            $dupl = [];
            $new = [];
            for ($i = 0; $i < $len; $i++) {
                if (check_in_array($dupl, $array[$i]))
                    continue;
                else
                    $new[] = $dupl[] = $array[$i];
            }
            return $new;
        }
        function printArray($array): void
        {
            echo "[";
            $len = count($array);
            for ($i = 0; $i < $len; $i++) {
                if ($i == ($len - 1))
                    echo "$array[$i]";
                else
                    echo "$array[$i], ";
            }
            echo "]";
        }

        echo "Given array: ";
        $a = [2, 1, 1, 2, 3, 4, 6, 4, 2];
        printArray($a);
        sort($a);
        echo "<br>";
        echo "After removing duplicates: ";
        $a = remove_dupl($a);
        printArray($a);
        </code>
    </pre>

</body>

</html>