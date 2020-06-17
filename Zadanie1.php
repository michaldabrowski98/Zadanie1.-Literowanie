<?php
/*
Zadanie 1
*/
function literuj($str) {
$tmp = preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);
for ($i = 0;$i < count($tmp); $i++) {
	echo $i, ' - ', $tmp[$i], PHP_EOL;
}
}
literuj('lorem ipsum dolor sit amet'); #wywołanie 1
literuj('zażółć gęślą jaźń'); # wywołanie 2

?>