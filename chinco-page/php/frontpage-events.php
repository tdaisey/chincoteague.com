<?php

//Open the file for reading
$filename = "events.php";
$file = fopen($filename, "r") or exit("Unable to open file for reading!");

$numevents = 0; 
$month = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

//step through the events
do
{
	//read the next line from the file.
	$newline = fgets($file); 
		
	//Is this the start of an event?
	if($newline == "<!-- event start -->\r\n")
	{
		$numevents = $numevents + 1;
		
		//Read the event start date, end date, and title
		$eventStartDateLine = fgets($file);
		$eventEndDateLine = fgets($file);
		$eventTitleLine = fgets($file);
				
		//Parse the event start month, day, and year
		$eventStartDateArray = explode(" ",$eventStartDateLine);
		$eventStartMonth = $eventStartDateArray[1];
		$eventStartDay = $eventStartDateArray[2];
		$eventStartYear = $eventStartDateArray[3];
		
		//Parse the event end month, day, and year
		$eventEndDateArray = explode(" ",$eventEndDateLine);
		$eventEndMonth = $eventEndDateArray[1];
		$eventEndDay = $eventEndDateArray[2];
		$eventEndYear = $eventEndDateArray[3];	
		
		//Parse the title 
		$eventTitleArray = explode("/",$eventTitleLine);
		$eventTitle = $eventTitleArray[1];
		
		//Check to see if the event start matches the event end
		if( ($eventStartMonth == $eventEndMonth) && ($eventStartDay == $eventEndDay) && ($eventStartYear == $eventEndYear) )
		{
			//event start and event end match
			echo "<p style='text-align:center;'><u>" . $month[$eventStartMonth] . " " . $eventStartDay . "</u>" . ": " . $eventTitle . "</p>\n";
			
		}
		else //event start and event end do not match 
		{
			echo "<p style='text-align:center;'><u>" . $month[$eventStartMonth] . " " . $eventStartDay . " - " . $month[$eventEndMonth] . " " . $eventEndDay . "</u>" . ": " . $eventTitle . "</p>\n";
		}
		
	}
	
}
while( ($newline != "<!-- Events end here -->\r\n") && ($numevents<5) );
	
fclose($file);

?>