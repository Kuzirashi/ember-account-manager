<?php

require('../../conf.sec.php');
require($conf['loc']['db']);

$db = new Database;
$db->connect($conf['db']['host'], $conf['db']['user'], $conf['db']['pass']);
$db->select_db($conf['db']['db']);

$arr = array();
$days = '- ' . ($conf['stats']['characters_days'] + 1) . ' days';

$chars = $db->fetch_real_assoc($db->query('SELECT `created` FROM `players` WHERE `created` > ' . strtotime($days) . ' ORDER BY `created` DESC;'));
foreach ($chars as $char) {
	$s = getdate($char['created']);
	$date = $s['month'] . '-' .  $s['mday'];
	if (array_key_exists($date, $arr)) {
		$arr[$date]++;
	} else {
		$arr[$date] = 1;
	}
}

$b = end($chars);
$a = getdate($b['created']);
$date = $a['month'] . '-' .  $a['mday'];
unset($arr[$date]);

echo json_encode($arr);
?>