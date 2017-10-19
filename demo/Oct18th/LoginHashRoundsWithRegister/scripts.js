/**
 * Created with JetBrains PhpStorm.
 * User: inet2005
 * Date: 10/24/13
 * Time: 3:37 PM
 * To change this template use File | Settings | File Templates.
 */
function checkPassword()
{
    var passwordOne = document.getElementById("loginPwd").value;
    var passwordTwo = document.getElementById("loginPwdConfirm").value;
    var errorSpanElement = document.getElementById("errorMsg");

    if(passwordOne != passwordTwo)
    {
        errorSpanElement.innerHTML = "Passwords do not match!";
        return false;
    }
    else if(passwordOne.length <  8) // should probably have some complexity checking!!
    {
        errorSpanElement.innerHTML = "Password does not meet complexity requirements!";
        return false;
    }
    else
    {
        return true;
    }
}











//Public Key:	6LdgRukSAAAAAFMD8RmKFi-EmRehaBKmTrLci8D1
//Use this in the JavaScript code that is served to your users

//Private Key:	6LdgRukSAAAAALRpNeav3t26O_M8l2HHKFqN-IIR
//Use this when communicating between your server and our server. Be sure to keep it a secret.
