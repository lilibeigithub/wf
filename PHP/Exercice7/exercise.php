<?php
#You must create a function called "divide" that take in first parameter an integer to divide, and in second parameter, the divisor. If the divisor is zero, you must throw a RuntimeException.

#You must create a second function called "arrayDivide" that take in first parameter an array of value to divide, and in second parameter, the divisor. If the disor is zero, you must catch the exception and return the array of value, as it.

function divide(int $divident, int $divisor) : float{
         if($divisor == 0)
        {
            throw new RunTimeException('Division by 0 is not allowed');
        }
        else
        {
            return $divident/$divisor;
        }
    }


function arrayDivide(array $values, int $divisor): array{
    
    $quotient = [];
   # int $i;
    
    try{
        #for($i=0; $i<$values.length(); $i++)
            foreach($values as $val)
        {
            $quotient[] = divide($val, $divisor);
        }
        return $quotient;
    }catch(RunTimeException $e){
        return $values;
    }
    
}
    
   /* if($divisor!=0){
        for($i=0; $i<$values.length(); $i++)
        {
            $quotient[i] = divide($values[i]), $divisor);
        }
        return $quotient;
        
    }else{
    try{
        if($divisor == 0)
      
    }catch{
            return $values[];
        }
    }*/
        
