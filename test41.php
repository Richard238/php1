
//// TRY to extract just the author or from the file response.json

<?php
$json = json_decode(file_get_contents('response.json'), true);
 foreach ($json-> data as $elem){
     echo $elem;
 }

 // echo the whole thing to show it works, and what it looks like.

// var_dump - confirms file is an array
var_dump($json);

// preformatted print_r shows file is an array, and is easier to read than the var_dump
echo'<pre>';
print_r($json);
echo'</pre>'

?>
