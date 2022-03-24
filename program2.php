<?php
$newItem = [];
	$itemsPrice = [-21, -10];


	for ($i = 0; $i < count($itemsPrice); $i++) {
	  if ($itemsPrice[$i] < 0) {

	    array_push($newItem, $itemsPrice[$i]);

	  } else {
	    echo "0";
	    break;
	  }
	  
	}

	if(count($newItem)) {
		$maxNumber = max($newItem);
		echo " $10";
	}

?>
