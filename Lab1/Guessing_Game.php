<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    if (isset($_POST['target']) && isset($_POST['guess']))
    {
        $numberTarget = $_POST['target']; //Here both values got set to the same number so the guessed number would
        $numberGuessed = $_POST['guess'];//always just switch to the value of the number target.

        if ($numberGuessed < $numberTarget) //For this it was <= so if the numbers always switched to become the same
        {                                   //number it will always be = to thats why you remove the =
            $message = "Guess Higher";
        } elseif ($numberGuessed > $numberTarget)//same as above the = had to be removed
        {
            $message = "Guess Lower";
        } elseif ($numberGuessed == $numberTarget)
        {
            $message = "You got it!";
        }
    }
    else
    {
        $message = "Welcome to my guessing game!";
        $numberTarget = rand(1,100);
    }
?>
<html>
    <head>
        <title>A PHP number guessing script</title>
    </head>
    <body>
        <h1>
            <?php print $message ?>
        </h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="guessinggame">
            <p>Number:
                <input name="guess" type="text">
            </p>
            <p>
                <input type="hidden" name="target" value="<?php echo $numberTarget ?>">
            </p>
            <p>
                <input name="" type="submit">
            </p>
        </form>
    </body>
</html>

