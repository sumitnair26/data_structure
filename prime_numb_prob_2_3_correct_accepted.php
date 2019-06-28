<?php

$primes = array(2);
$numprimes = 1;

for ($i = 3; $i <= 32000; $i+=2) {
    $isprime = true;
    $cap = sqrt($i)+1;

    for ($j = 0; $j < $numprimes; ++$j) {
        if ($j >= $cap) break;
        if (!($i % $primes[$j])) {
            $isprime = false;
            break;
        }
    }
    if ($isprime) $primes[$numprimes++] = $i;
}

fscanf(STDIN,"%d",$T);

$output = "";

for ($t = 0; $t < $T; $t++) {
    if ($t) $output .= "\n";

    fscanf(STDIN,"%d %d",$M,$N);
    if ($M < 2) $M = 2;

    $isprime = array();

    $cap = sqrt($N)+1;

    $i = 0;
    while($i < $numprimes) {
        $p = $primes[$i];

        if ($p >= $cap) break;

        if ($p >= $M) {
            $start = $p*2;
        } else {
            $start = $M + (($p - $M % $p) % $p);
        }

        for ($j = $start; $j <= $N; $j += $p) {
            $isprime[$j - $M] = false;
        }

        ++$i;
    }

    for ($i = $M; $i <= $N; ++$i) {
        if (!isset($isprime[$i-$M])) {
            $output .= "$i\n";
        }
    }
}

echo $output;

/*
Tested with inputs
STDIN
2
1 10
1000 2000
123123123 123173123
987654321 987653321
*/
?>
