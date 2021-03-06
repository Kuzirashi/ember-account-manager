<?php
require('/var/www/config.php');
#region Database
$conf['db']['host'] 	= 'localhost';
$conf['db']['user'] 	= 'root';
$conf['db']['pass'] 	= '';
$conf['db']['db'] 		= 'database';
#endregion

#region Location of Files
$conf['loc']['main']	= '/var/www/'; // remember the slash
$conf['loc']['libs']	= 'engine/libs/';
$conf['loc']['db']		= $conf['loc']['main'] . $conf['loc']['libs'] . 'db.php';
$conf['loc']['login']	= $conf['loc']['main'] . $conf['loc']['libs'] . 'login.php';
#endregion

#region Game Configuration
$conf['game']['start_vocations'] 	= array(1 => 'Sorcerer', 2 => 'Druid', 3 => 'Paladin', 4 => 'Knight');
$conf['game']['vocations'] 			= array(0 => 'None', 1 => 'Sorcerer', 2 => 'Druid', 3 => 'Paladin', 4 => 'Knight', 5 => 'Master Sorcerer', 6 => 'Elder Druid', 7 => 'Royal Paladin', 8 => 'Elite Knight', 9 => 'Witcher', 10 => 'Priest', 11 => 'Archer', 12 => 'Gladiator');
#endregion

#region Statistics
$conf['stats']['characters_days']	= 30;
$conf['stats']['accounts_days']		= 30; // not implemented yet
#endregion

?>
