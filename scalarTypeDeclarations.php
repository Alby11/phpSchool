<?php

// Strict mode switch
declare(strict_types = 1);

function sum(int ...$ints) {
    return array_sum($ints);
}

print(sum(2, 3, 4)) . "\n\n";
print(sum(2, '3', 4));

?>