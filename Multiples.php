<?php

$result = 0;

for ($i = 0; $i < 999; $i++) {

    if ($i % 3) {
        $result = $result + $i;
    }

    if ($i % 5) {
        $result = $result + $i;
    }
}

echo $i;
