<?php
      $data=array();
      $lines = file("php://stdin");
      foreach ($lines as $line_num => $line) {
            $data[$line_num] =  $line;
            explode_data($data[$line_num]);
          }

          function explode_data($inputs)
          {
          	$input_array = explode(' ',$inputs);
          	convert_to_prime($input_array);
          }

		function convert_to_prime($data){
				      if(isset($data[0]) and isset($data[1]) and $data[0] <= $data[1] and $data[1] <= 1000000000){
				      	$x = $data[1] - $data[0];
				      	if( ($data[0] <= $data[1]) and ($x<=100000)){
				      	  $first_input = 	$data[0];
	    				  $second_input = $data[1];
	    				  get_primes($first_input, $second_input);
				      	}else{
				      		return false;
				      	}
	      }else{
	        return false;
	      }
		}

		function get_primes($min,$max) {

    $primes = array();

    for ( $x=$min; $x<=$max; $x++ ) {

        //$x is every number between$ min and $max. Main loop

        if ( $x == 2 ) { $primes[] = $x; } //2 is a prime

        for ( $i=2; $i<$x; $i++ ) {

            //$i is every integer such that 2<$i<$x

            $remainder = ($x % $i);

            if ( $remainder == 0 ) {

                $i = $x;   //Set $i=$x so that the loop reaches the end and goes on to next value of $x

                continue;  //Break current loop

            } else if ( $i == ($x-1) ) {

                $primes[] = $x;  //Means this is the largest value of $i. So if we reached this far the number is prime

            }

        }

    }
    echo implode("\n",$primes);
    echo "\n";
    echo "\n";

}

/*
Input:
2
1 10
5
3 5

*/