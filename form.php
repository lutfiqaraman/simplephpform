<?php
    
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
    
    <input type="submit" value="Register">
</form>
