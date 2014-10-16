<?php

echo "hello";

function subtract( $s1,  $s2) {
    $val=0;
    if($s1 <=0 && $s2 <=0)
      {
        echo $val;
    }
    elseif(strlen($s1)!=strlen($s2))
       {
        echo $val;
    }
    else
       {
        $length=strlen($s1);
        $val= $s1-$s2;
        if(strlen($val) < $length)
        {
            $length_diff= ($length-strlen($val));
            if($length_diff >0)
               {
                for($icnt=1;$icnt <= $length_diff;$icnt++)     
                   {
                    $val="0".$val;
                }
            }
           
        }
        if($val >0)
            {
            $val="+".$val;
        }
        else
           {
            $val=$val;
        }
        echo $val;
    }


}

$s1='';
$s2=''
subtract($s1,$s2);
?>