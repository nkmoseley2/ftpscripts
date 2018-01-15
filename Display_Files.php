<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

#edit here to change folder name
$foldername = "Company File";

print "<h3>Click below for Reports</h3>";
	$handle = opendir("./pdfs/".$foldername);
	//print "<blockquote>";
	$i=0;
	while($thefile = readdir($handle))
	{
			if(preg_match("/\.pdf|\.PDF/",$thefile))
			{
			 $filelist[$i] = $thefile;			 
				$i++;
			}
			
	}
	$sval = sort($filelist);
	
	$k=0;
	print "<p>";
	print "<h3>Daily Reports</h3>";

	for($j=0;$j<count($filelist);$j++)
	{
		if(preg_match("/Daily/",$filelist[$j]))
		{
		
	
			print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
		}
	}
	print "</p>";
	
	if(date("m") == 1)
	{
		$currentminus1num = 12;
	}
	else
	{
		$currentminus1num = date("m") - 1;
	}
	$current = date("M");
	$tempnum = $currentminus1num;
	for($k=0;$k<12;$k++)
	{
	if($tempnum == 1) 
	{
		$cur = date('m');
		if ($cur <= 1) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		$currentminus1 = "Jan";
		print "<p>";
		print "<h3>January Monthly Reports $datehold</h3>";		
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Jan/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
		print "</p>";
	}
	if($tempnum == 2)
	{
		$cur = date('m');
		if ($cur <= 2) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>February Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Feb/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 3)
	{
		$cur = date('m');
		if ($cur <= 3) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>March Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Mar/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 4)
	{
		$cur = date('m');
		if ($cur <= 4) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>April Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Apr/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 5)
	{
		$cur = date('m');
		if ($cur <= 5) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>May Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/May/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 6)
	{
		$cur = date('m');
		if ($cur <= 6) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>June Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Jun/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 7)
	{
		$cur = date('m');
		if ($cur <= 7) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>July Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Jul/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 8)
	{
		$cur = date('m');
		if ($cur <= 8) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>August Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Aug/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 9)
	{
		$cur = date('m');
		if ($cur <= 9) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>September Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Sep/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 10)
	{
		$cur = date('m');
		if ($cur <= 10) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>October Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Oct/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 11)
	{
		$cur = date('m');
		if ($cur <= 11) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>November Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Nov/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 12)
	{
		$cur = date('m');
		if ($cur < 12) {
  			$datehold = date('Y')-1;
		} else {
  			$datehold = date('Y');
		}
		print "<p>";
		print "<h3>December Monthly Reports $datehold</h3>";
		for($j=0;$j<count($filelist);$j++)
		{
			if(preg_match("/Dec/",$filelist[$j]) && preg_match("/Month/",$filelist[$j]))
			{
				print "<a href='http://www.company.com/pdfs/".$foldername."/".$filelist[$j]."'>".$filelist[$j]."</a>\n";
				print "<br>";
			}
		}
	}
	if($tempnum == 1)
	{
		$tempnum = 12;
	}
	else
	{
		$tempnum--;
	}
	
	}	
	
	print "</blockquote>\n";
	closedir($handle);
	
?>
