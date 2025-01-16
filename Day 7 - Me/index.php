<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 7</title>
</head>
<body>
    <form action="php/submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="form[]" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="form[]" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password[]" id="password">
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="password[]" id="confirm_password">
        <br>
        <label for="phone">Phone Number</label>
        <input type="tel" name="form[]" id="phone" pattern="[0-9]{10}">
        <fieldset>
            <legend>Skills</legend>
            <label for="html">HTML</label>
            <input type="checkbox" name="skills[]" id="html" value="html">
            <br>
            <label for="css">CSS</label>
            <input type="checkbox" name="skills[]" id="css" value="css">
            <br>
            <label for="js">JavaScript</label>
            <input type="checkbox" name="skills[]" id="js" value="js">
            <br>
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" id="php" value="php">
            <br>
        </fieldset>
        <input type="submit" value="Submit">
    </form>
</body>
</html>