<?php

    $username  = '';
    $password  = '';
    $gender    = '';
    $color     = '';
    $languages = [];
    $comments  = '';
    $tc        = '';

    if (isset($_POST['submit'])) {

        if(isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if(isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        if(isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        }

        if(isset($_POST['color'])) {
            $color = $_POST['color'];
        }

        if(isset($_POST['languages'])) {
            $languages = $_POST['languages'];
        }

        if(isset($_POST['comments'])) {
            $comments = $_POST['comments'];
        }

        if(isset($_POST['tc'])) {
            $tc = $_POST['tc'];
        }

        printf('User name: %s<br>Password: %s<br>Gender: %s<br>Color: %s<br>Language(s): %s<br>Comments: %s<br>T&smp;C: %s',
            htmlspecialchars($username, ENT_QUOTES),
            htmlspecialchars($password, ENT_QUOTES),
            htmlspecialchars($gender, ENT_QUOTES),
            htmlspecialchars($color, ENT_QUOTES),
            htmlspecialchars(implode('', $languages), ENT_QUOTES),
            htmlspecialchars($comments, ENT_QUOTES),
            htmlspecialchars($tc, ENT_QUOTES)
        );
    }
?>

<form action="" method="post">
    User name: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f"> Female
        <input type="radio" name="gender" value="m"> Male
        <input type="radio" name="gender" value="o"> Other <br>

    Favorite Color:
    <select name="color" id="">
        <option value="-1">Please select</option>
        <option value="1">Red</option>
        <option value="2">Blue</option>
        <option value="3">Green</option>
    </select><br>

    Languages Spoken:
    <select name="languages[]" multiple size="3">
        <option value="1">English</option>
        <option value="2">French</option>
        <option value="3">Italian</option>
        <option value="4">Russian</option>
    </select><br>

    Comments:
    <textarea name="comments"></textarea> <br>

    <input type="checkbox" name="tc" value="ok">
    I accept the T&amp;C
    <br>

    <input type="submit" name="submit" value="Register">
</form>
