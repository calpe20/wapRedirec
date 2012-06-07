<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DIJISA-PUCALLPA</title>
</head>
<link rel="stylesheet" type="text/css" href="vista.css">
<body><div style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold">
<?  $fp = file("ip-s.txt");
	$num = count($fp);
	$a='';
	for($i=0; $i<$num;$i++){
		$a=$fp[$i];
	}
	$ip=$_SERVER['REMOTE_ADDR'];
	if ($ip==$a){
		echo "<div id='ejemplo' class='ejemplo' align='center'> IP : ".$ip."</div>";
		include('vista.php');
	}else{
		$fp = fopen("ip-s.txt","a+");
		$out = $lp."\n".$ip;
		echo 'su IP '.$ip;
		fwrite($fp,$out);
		fclose($fp);
		echo "<script languaje='JavaScript'>";       
		echo "parent.location.href='index.php'";
		echo "</script>";
	}
?></div>
</body>
</html>
