<?php
function groupnumber($number){
	$group=str_split(str_replace(array(' ','-'),'',$number),3);
	$last=$group[sizeof($group)-1];
	if (strlen($last)==1) {
		array_pop($group);
		$group[sizeof($group)-1].=$last;
		$last=$group[sizeof($group)-1];
		$group[sizeof($group)-1]=str_split($last,2);
		$group[sizeof($group)-1]=implode('-',$group[sizeof($group)-1]);

	}

	$group=implode('-', $group);

	 return $group;

}
echo groupnumber('993141 -1 1323 14-232');
?>
