<?php
    /*session_start();
    $_SESSION['username'] = strip_tags($_POST['username']);
    $_SESSION['colour'] = strip_tags($_POST['colour']);
    header("Location: ../chatSys/index.php");*/
?>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
<form action="../" method="post">
    <h1>login</h1>
    <table cellpadding="5" cellspacing="0" border="0">
        <tr>
            <td align="left" valign="top">Nickname:</td>
            <td align="left" valign="top">
                <input type="text" name="username" maxlength="30" />
            </td>
        </tr>
        <tr>
            <td align = "left" valign = "top">Password:</td>
            <td align = "left" valign = "top">
                <input type = "password" name = "password" maxlength = "51" />
            </td>
        </tr>
        <tr>
            <td align="left" valign="top"></td>
            <td align="left" valign="top"><input type="submit" value="Sign Up" /></td>
        </tr>
    </table>
</form>
</body>
</html>
