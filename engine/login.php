<?phprequire('../conf.sec.php');require($conf['loc']['db']);require($conf['loc']['login']);try {	sec_session_start();	$end = array('logged' => 0, 'success' => 0, 'error' => '');		if(!$_SESSION['acc_id']) {		if ($_POST['submit'] && strlen($_POST['name']) < 100 && strlen($_POST['name']) > 2 && strlen($_POST['pass']) > 0) {			$db = new Database;			$db->connect($conf['db']['host'], $conf['db']['user'], $conf['db']['pass']);			$db->select_db($conf['db']['db']);			$db->query('SET CHARACTER SET utf8');			if (login($_POST['name'], $_POST['pass'], $db->db)) {				$end['logged']		= true;				$end['success'] 	= true; 			} else {				echo 'NIEPOPRAWNY';			}		}	} else {		$end['logged'] = true;	}	echo json_encode($end);} catch (Exception $e) {	echo $e->getMessage();}?>