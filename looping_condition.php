<?php
// $a = 1;
for ($a = 1; $a <= 50; $a++) {
    // var_dump($a);

    if ($a % 3 == 0 && $a % 5 == 0) {
        echo "FooBar";
    } else if ($a % 3 == 0) {
        echo "Foo";
    } else if ($a % 5 == 0) {
        echo "Bar";
    } else {
        echo $a;
    }
    echo "<br>";
}
