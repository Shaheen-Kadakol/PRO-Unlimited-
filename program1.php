<?php
function minRemoveToMakeValid($str){
	$str = str_split($str);
	$len = count($str);
	$stack = [];
	for($i = 0; $i < $len; $i++){
		if($str[$i] == ")"){
			if(count($stack)){
				array_pop($stack);
			}else{
				unset($str[$i]);
			}
		}else if($str[$i] == "("){
			array_push($stack, $i);
		}
	}
	for ($i = 0; $i < count($stack); $i++)
        unset($str[$stack[$i]]);
  	return join("",$str);
}
$input = "lee(t(c)o)de)";
echo minRemoveToMakeValid($input);

?>


