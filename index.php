<?php session_start(); ?>
<!DOCTYPE html>
<head></head>
<html>
<body>

<form action="index2.php" method="post">
    <fieldset>
        <legend align="center"> Authorise </legend>
    <div align="center">
    <table>
        <tr>
            <td><label> Nickname: </label></td>
            <td><input type = "name" name = "name" ></td>
        </tr>
        <tr>
            <td><label> Password: </label></td>
            <td><input type = "password" name = "password" </td>
        </tr>
        <tr>
            <td ><input type = "submit" name="send" value="Sign in" </td>
        </tr>
    </table>
    </div>
    </fieldset>
</form>
</body>
</html>









