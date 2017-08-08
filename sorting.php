<?php

$quest = array(itemBag, levels, hunts, clues, keys, chests); 
$itemBag = array(map, compass,);
$levels = array(lv1, lv2, lv3, lv4, lv5);
$hunts = array(hunt1, hunt2, hunt3, hunt4, hunt5);
$clues = array(clue1, clue2, clue3, clue4, clue5); 
$keys = array(key1, key2, key3, key4, key5);
$chests = array(chest1, chest2, chest3, chest4, chest5);
	
$chests[0];

if(($levels != lv1) && (key1 ! $itemBag)) {
	 alert("You can not open this chest yet");
}
elseif(($levels == lv1) && (in_array(key1, $itemBag))) {
	prompt("Are you sure you want to use this key?");
	echo $openTreasureFunction;
}
else {
	alert("This is currently unavailable. Come back later!");
}
if($.length) {
	array_push($itemBag, $key);
}
?>

