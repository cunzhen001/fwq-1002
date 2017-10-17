<?php
	


$fqurlok="%69%6c%2e%79%6f%6e%2e%39%39%64";






 
function escape($str) {  
    $sublen = strlen ( $str );  
    $retrunString = "";  
    for($i = 0; $i < $sublen; $i ++) {  
        if (ord ( $str [$i] ) >= 127) {  
            $tmpString = bin2hex ( iconv ( "gb2312", "ucs-2", substr ( $str, $i, 2 ) ) );  
            $retrunString .= "%u" . $tmpString;  
            $i ++;  
        } else {  
            $retrunString .= "%" . dechex ( ord ( $str [$i] ) );  
        }  
    }  
    return $retrunString;  
}  



$codefqurlok=escape(strrev($fqurlok));





echo <<<EOT







<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="viewport" content="width=device-width, initial-scale=1">



<title>url fq</title>



<div class="n j-text" align="center">
  
 


<p>$codefqurlok</p>


</div>


EOT;






?>

