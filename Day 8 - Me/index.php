<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 8</title>
    <style>
        pre {
            width: fit-content;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>String Functions</h1>
    <!-- String Methods -->
    <!-- 
    1) Length of string
    2) Array -> String
    3) String -> Array
    4) Access the String
    5) Replacing particular char
    in string
    6) Replacing particular word
    in string
    7) Lowercase-Uppercase
    conversion 
    -->
    <section>
        <h3>Length of a string</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo strlen($str);
            </code>
        </pre>
        <p>Output: 11</p>
    </section>
    <section>
        <h3>Accessing a string</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo $str;
            </code>
        </pre>
        <p>Output: Hello World</p>
    </section>
    <section>
        <h3>Array -> String</h3>
        <pre>
            <code>
<?php
$arr = array('Hello', 'World');
?>$arr = array('Hello', 'World');
echo implode(" ", $arr); //first parameter is the glue(in technical terms, delimiter)
            </code>
        </pre>
        <p>Output: Hello World</p>
    </section>
    <section>
        <h3>String -> Array</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo(explode(" ", $str)); //first parameter is the delimiter
            </code>
        </pre>
        <p>Output: Array ( [0] => Hello [1] => World )</p>
    </section>
    <section>
        <h3>Replacing a particular char in a string</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo str_replace("World", "Universe", $str);
            </code>
        </pre>
        <p>Output: Hello Universe</p>
    </section>
    <section>
        <h3>Counting words in a string</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo str_word_count($str);
            </code>
        </pre>
        <p>Output: 2</p>
    </section>
    <section>
        <h3>Lowercase-Uppercase conversion</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo strtolower($str);
echo strtoupper($str);
            </code>
        </pre>
        <p>Output: hello world HELLO WORLD</p>
    </section>
    <section>
        <h3>Reversing a string</h3>
        <pre>
            <code>
<?php
$str = "Hello World";
?>$str = "Hello World";
echo strrev($str);
            </code>
        </pre>
        <p>Output: dlroW olleH</p>
    </section>
    <section>
        <h3>Concatenating two strings</h3>
        <pre>
            <code>
<?php
$str1 = "Hello";
$str2 = "World";
?>$str1 = "Hello";
$str2 = "World";
echo $str1 . " " . $str2;
            </code>
        </pre>
        <p>Output: Hello World</p>
    </section>
    <section>
        <h3>Rules to concatenate string in PHP</h3>
        <pre>
            <ul>
<li>String . String = OK!</li>
<li>String . Number = Not OK!</li>
<li>Number . String = Not OK!</li>
<li>Number . Number = Floating Point Numeral</li>
            </ul>
        </pre>
    </section>

</body>

</html>