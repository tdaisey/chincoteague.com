<?php

$url='https://sites.wff.nasa.gov/wmsc/Configuration/missions.json';

$ch=curl_init();
$timeout=5;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

// Get URL content
$mission_data=curl_exec($ch);

// close handle to release resources
curl_close($ch);

//echo "<p>mission_data</p>";
//echo $mission_data;

$missions = json_decode($mission_data,true);

//echo "<p>Error</p>";
//echo json_last_error();

//echo "<p>missions</p>";
//echo $missions;

//if($missions == NULL)
//{
	//echo "No missions were parsed<br>\n";
//}

$upcoming_launch = false; 

if($missions != NULL)
{
	foreach($missions as $mission)
	{
		if($mission['launched']==false)
		{			
			$upcoming_launch = true;
			echo "<p style='text-align:center;'>\n";
			echo "<u>Mission</u>: " . $mission['name'] . "<br>\n";
			echo "<u>Date</u>: " . $mission['date'] . "<br>\n";
			echo "<u>Time</u>: " . $mission['time'] . "<br>\n";
			echo "<u>Vehicle</u>: " . $mission['vehicle'] . "<br>\n";
			echo "</p>\n\n";
		}
	}
}

if($upcoming_launch==false)
{
	echo "<p style='text-align:center;'>No launches from Wallops Flight Facility currently scheduled.</p>\n\n";
}

?>

