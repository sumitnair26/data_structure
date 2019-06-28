<?php
      $data=array();
      $lines = file("php://stdin");
      foreach ($lines as $line_num => $line) {
            $data[$line_num] =  $line;
          }


        	foreach($data as $element=>$inputs){
        		$x[$element] = explode(' ',$inputs);
        		//print_r($x[$element]);
        		convert_to_prime($x[$element]);
        	}

		function convert_to_prime($data){
				      if(isset($data[0]) and isset($data[1]) and $data[0] <= $data[1] and $data[1] <= 1000000000){
				      	$x = $data[1] - $data[0];
				      	if( ($data[0] <= $data[1]) and ($x<=100000)){
				      	  $first_input = 	$data[0];
	    				  $second_input = $data[1];
				      	}else{
				      		return false;
				      	}
	      }else{
	        return false;
	      }
        while (true){
        $div_count=0;
        for ( $i=1;$i<=$first_input;$i++)
        {
        if (($first_input%$i)==0)
        {
        $div_count++;
        }
        }
        if ($div_count<3)
        {
          echo $first_input."\n";
        }
        $first_input=$first_input+1;
          if($second_input+1==$i){
          	echo "\n";
            break;
            }
        }
    }

    /*
Input:
2
1 10
3 5

*/