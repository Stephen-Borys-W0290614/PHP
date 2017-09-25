<!DOCTYPE html>
<html>
<head>
    <title>Page 6</title>
</head>
<body>
    <div>
    <?php
    echo '<h1>' . 'The PHP Version Is: ' . phpversion() . '</h1>';
    echo '<h1>' . 'The Zend Version Is: ' . zend_version() . '</h1>';
    echo '<h1>' . 'The default_mimetype is text/html' . '</h1>';
    ?>
    </div>
    <div>
        <form action="FahrenheitConversion.php" method="post">
            <p><input type="submit" name="Submit" value="Continue" /></p>
        </form>
    </div>
</body>
</html>
