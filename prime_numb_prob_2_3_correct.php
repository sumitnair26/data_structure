<?
$inputs = (int) trim(fgets(STDIN));
for ($l = 0; $l < $inputs; $l++) {
    $input = explode(" ", trim(fgets(STDIN))); //explode and get both inputs
    $m = $input[0];
    $n = $input[1];


    // check if input 2nd is greater and
    while ($m <= $n) {
        $flag = true;
        $i = 5;

        if ($m == 2 || $m == 3) {
        } else if ($m % 2 == 0 || $m % 3 == 0) {
            $flag = false;
        } else {
            while ($i * $i <= $m) {
                if ($m % $i == 0 || $m % ($i + 2) == 0) {
                    $flag = false;
                    break;
                }
                $i += 6;
            }
        }

        if ($flag && $m != 1) {
            echo $m . "\n";
        }
        $m++;
    }
    echo "\n";
}
/*
Input:
2
1 10
3 5

*/