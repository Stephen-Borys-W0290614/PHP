<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>
<body>
<h1> User Create</h1>
<form name = "form1" method="post" action="checkUser.php">
    <table>
    <tr>
        <td>
        <label for="loginUser">User: </label>
        </td>
    </tr>
    <tr>
        <td>
        <input name="loginUser" type="text" id="loginUser"/>
        </td>
    </tr>
    <tr>
        <td>
        <label for="loginPwd">Password: </label>
        </td>
    </tr>
    <tr>
        <td>
        <input name="loginPwd" type="password" id="loginPwd"/>
        </td>
    </tr>
        <tr>
            <td colspan="2">
                <script type="text/javascript"
                        src="http://www.google.com/recaptcha/api/challenge?k=6LdgRukSAAAAAFMD8RmKFi-EmRehaBKmTrLci8D1">
                </script>
                <noscript>
                    <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdgRukSAAAAAFMD8RmKFi-EmRehaBKmTrLci8D1"
                            height="300" width="500" frameborder="0"></iframe><br>
                    <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                            </textarea>
                    <input type="hidden" name="recaptcha_response_field"
                           value="manual_challenge">
                </noscript>
            </td>
        </tr>
    <tr>
        <td>
        <input type="submit" name="Submit" value="Create" />
        </td>
    </tr>

    </table>
</form>

<a href="http://localhost:8000/Lab5/mainLogin.html">         Go Back</a>

</body>
</html>

