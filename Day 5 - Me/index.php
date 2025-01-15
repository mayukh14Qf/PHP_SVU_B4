<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 5</title>
</head>

<body>
    <p>For duplicate removal page...<a href="remove_dupl.php">click here</a></p>
    <h1>Associative Arrays:</h1>
    <div>
        <h3>Declaration and Printing</h3>
        <?php
        $data = ["name" => "John", "age" => 25, "city" => "New York"];
        echo "<pre>
                <code>
                    \$data = [\"name\" => \"John\", \"age\" => 25, \"city\" => \"New York\"];
                    echo \$data[\"name\"]; // John
                    echo \$data[\"age\"]; // 25
                    echo \$data[\"city\"]; // New York
                </code>
            </pre>";
        ?>
    </div>
    <div>
        <h3>Inserting(Overriding in existing index)</h3>
        <?php
            echo "<pre>
                <code>
                    \$data[\"name\"] = \"Doe\"; // name index overrided as it already existed
                    echo \$data[\"name\"]; // Doe
                </code>
            </pre>";
        ?>
    </div>
    <div>
        <h3>Adding new index</h3>
        <?php
            echo "<pre>
                <code>
                    \$data[\"gender\"] = \"Male\"; // gender index was added
                    /*
                    if index section is blank, PHP will search for the nearest numeric index
                    if found, then it will increment said index by one and use it as the key
                    if not found, then it will determine the index to be 0
                    */
                    \$data[] = \"Hello\"; // index 0 was added
                </code>
            </pre>";
        ?>
    </div>
    <div>
        <h3>Sorting</h3>
        <?php
            echo "<pre>
                <code>
                    ksort(\$data); // sorts by key
                    krsort(\$data); // sorts by key in reverse
                    asort(\$data); // sorts by value
                    arsort(\$data); // sorts by value in reverse
                </code>
            </pre>";
        ?>
    </div>
    <div>
        <h3>Deleting</h3>
        <?php
            echo "<pre>
                <code>
                    unset(\$data[\"name\"]); // deletes name index
                    unset(\$data); // deletes the whole array
                </code>
            </pre>";
        ?>
    </div>

</body>

</html>