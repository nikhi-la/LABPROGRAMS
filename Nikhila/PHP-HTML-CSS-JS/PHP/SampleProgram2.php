
<html>
    <body>
    <center>
        <h2><?php echo "Number Loop"; ?></h2><?php
        for ($i = 1; $i <= 10; ++$i) {

            echo $i, " ";
        }
        echo '<br>';
        echo '<br>';
        ?><h2><?php echo "Number Pyramid"; ?></h2><?php
        for ($i = 1; $i <= 10; ++$i) {
            for ($j = 1; $j <= $i; ++$j) {

                echo $j, " ";
            }
            echo '<br>';
        }
        ?>
    </center>
</body>
</html>