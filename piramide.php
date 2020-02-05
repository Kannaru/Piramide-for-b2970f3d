<?php
echo("hoeveel extra lagen wil je dat het krijgt? ");
$nummer = readline();
$blok = "*";

if (!is_numeric($nummer)){
    exit($nummer." is geen getal");
}

for($i = 1; $i <= $nummer; $i++){
    for ($x = 1; $x <= $i; $x++) {
        echo ($blok);
    }
        echo(PHP_EOL);
}
?>