<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <meta charset="UTF-8" />
    </head>
    <body>
        <header>
        </header>
        <section>
            <?php
            require_once('recaptchalib.php');
            $privatekey = "6LdgRukSAAAAALRpNeav3t26O_M8l2HHKFqN-IIR";
            $resp = recaptcha_check_answer ($privatekey,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);

            if (!$resp->is_valid)
            {
                // What happens when the CAPTCHA was entered incorrectly
                echo "<h1>Incorrect Captcha entry.Try again?</h1>";
                echo "<a href='newUser.html'>Back to New User Form</a>";
            }
            else
            {
                // Should probably be checking password complexity and match server side as well!!!!

                $db = @mysqli_connect("localhost","root", "inet2005","sakila");
                if (!$db)
                {
                    die('Could not connect to the Sakila Database: ' . mysqli_error($db));
                }

                $loginUser = mysqli_real_escape_string($db,$_POST['loginUser']);
                $loginPwd = mysqli_real_escape_string($db,$_POST['loginPwd']);

                // create a salt based on the number of seconds since
                // the Unix Epoch (January 1 1970 00:00:00 GMT).
                $secondsSinceUnixEpoch = time();
                $truncatedUserName = substr($loginUser, 0, 16 - strlen($secondsSinceUnixEpoch));
                //create a 16 character long salt by truncating the username and appending the timestamp to equal
                // 16 in length
                $userSalt = $truncatedUserName . $secondsSinceUnixEpoch;

                // now create the hash using the PHP crypt function
                // example: crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$')
                // the "6" indicates SHA512, the "5000" indicates the rounds of hashing to do
                $cryptPrefix = '$6$rounds=5000$' . $userSalt .'$';
                $passwordHashRaw = crypt($loginPwd, $cryptPrefix);

                //Necessary because I cannot abide storing the HASH type
                //and rounds of hashing in the hash string
                $cryptPrefixEscaped = '\$6\$rounds=5000\$' . $userSalt . '\$';
                $passwordHash = preg_replace('/^' . $cryptPrefixEscaped . '/','',$passwordHashRaw);

                // insert the new user with hash & salt
                $sqlStatement = "INSERT INTO `WebUsers`(user_name,user_pwd,salt) VALUES ('";
                $sqlStatement .= $loginUser;
                $sqlStatement .= "','";
                $sqlStatement .= $passwordHash;
                $sqlStatement .= "','";
                $sqlStatement .= $userSalt;
                $sqlStatement .= "');";

                $result = mysqli_query($db,$sqlStatement);

                if(!$result)
                {
                    die("Unable to create user: " . mysqli_error($db));
                }

                $count= mysqli_affected_rows($db);

                if($count==1)
                {
                    echo "<h1>The user was added.</h1>";
                    echo "<a href='mainLogin.html'>Go to Login?</a>";
                }
                else
                {
                    echo "<h1>Sorry the user could not be added.</h1>";
                    echo "<a href='newUser.html'>Back to New User Form</a>";
                }
            }
            ?>
        </section>
        <footer>
        </footer>
    </body>
</html>