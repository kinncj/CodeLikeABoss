<?php
if(!isset($argv[1]))
{
die("\nPlease, run codelikeaboss.php your/php/files/dir\n");
}
exec("clear");
$filetypes = array("php","rb","c","java","txt","asp","html","css","js","ini");
$dir = new DirectoryIterator($argv[1]);
foreach($dir as $d)
{
	$finfo = pathinfo($d->getFileName());
	if(!in_array($finfo['extension'],$filetypes))
	{
		continue;
	}
	$f = file($argv[1].$d->getFileName());
	
	if(!is_array($f))
	{
		continue;
	}
	
	foreach($f as $line)
	{
		for($i = 0; $i < strlen($line); $i++){
			echo "{$line[$i]}";
			usleep(99990);
		}
	}
}

