<?php
$Provinces = array ("Nova Scotia",
                    "New Brunswick",
                    "PEI");?>
<!DOCTYPE html>
<html>
<head>
    <title> Fun With Arrays!!!</title>
</head>
<body>
    <section>
        <article>
            <?php print_r($Provinces) ?>
        </article>
    </section>
    <section>
        <article>
            <ul>
            <?php
                $Provinces[] = "Quebec";
                for($x = 0; $x < count($Provinces);$x++){
                    echo"<li>$Provinces[$x]</li>";
                }
            ?>
            </ul>
        </article>
        <article>
            <ul>
                <?php
                $Provinces[] = "Newfoundland";
                foreach ($Provinces as $index => $item) {
                    echo "<li>".(index + 1).":$item</li>";
                }
                ?>
            </ul>
        </article>
    </section>
    <h1>
    <?php echo phpversion(); ?>
    </h1>
</body>
</html>
