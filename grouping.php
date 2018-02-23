<?php
include("arrayset.php");

$result = [];
$afunc = function ($value, $key) use (&$result) {
	if($value['sttus'] != 0) {
		$result[$value['id']][] = $value;
	} else {
		$count = count($result[$value['id']]);
		$result[$value['id']] = $count > 0 ? $result[$value['id']] : [];
	}
};

array_walk($arraySet, $afunc);

print_r($result);