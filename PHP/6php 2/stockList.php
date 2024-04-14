<?php
/*
|--------------------------------------------------------------------------
| Help the bookseller !
|--------------------------------------------------------------------------
|
*/

function stockList($listOfArt, $listOfCat) {
	if (count($listOfArt) == 0) return '';
	return implode(" - ", array_map(function($val) use ($listOfArt) {
		return "($val : " . array_reduce($listOfArt, function($pre, $v) use ($val) {
			return $pre + (substr($v, 0, 1) === $val) * explode(' ', $v)[1];
		}, 0) . ")";
	}, $listOfCat));
}


function stockList($listOfArt, $listOfCat){
	if(empty($listOfArt) || empty($listOfCat)) return '';
	return implode(' - ', array_map(function ($list) use ($listOfArt) {
		return "($list : ".array_sum(preg_replace("/[^0-9]/", "", preg_grep("/^$list/", $listOfArt))).")"; 
	}, $listOfCat));
}


function stockList($stocklist, $categories) {
	if (!$stocklist || !$categories) {
		return "";
	}
	foreach ($stocklist as $s) {
		@$stocks[$s[0]] += preg_replace("/[^\d]/", "" , $s);
	}
	foreach ($categories as $c) {
		@$stocksForCat[$c] = "($c : " . ($stocks[$c] ?? 0) . ")";
	}
	return implode(" - ", $stocksForCat);
}


print_r(
   stockList(["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B", "C", "D"]) . " (A : 0) - (B : 1290) - (C : 515) - (D : 600)
");
print_r(
   stockList(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]) . " (A : 200) - (B : 1140)
");