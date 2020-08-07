<?php

    print_r($_GET);

?>


<html>
    <head>
        <title>URL Params...</title>
    </head>
    <body>

        <!-- Static passing and fetching URL Parameter -->
            <!-- <a href="urlparam.php?name=kartik&age=19">click here!!</a> -->


        <!-- Dynamic passing and fetching URL Parameter -->
        <?php

            $n = "kartik";
            $ag = 20;

        ?>

        <a href="urlparam.php?name=<?php echo $n; ?>&age=<?php echo $ag ?>">Click</a>;

    </body>
<html>