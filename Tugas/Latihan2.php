<html>
    <head>
        <title>Latihan 2</title>
    </head>
    <body>
        <h1>Latihan 2</h1>
        <?php
        $num = 0;
        $i = 0;

        while ($i <= 6) {
            $num += $i;
            $i += 2;
        }
        echo("Akumulasi bilangan genap dari 0 s.d 6 adalah $num");
        ?>

    </body>
</html>