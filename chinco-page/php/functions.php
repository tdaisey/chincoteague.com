<?php

function showListings($listings,$category,$hr)
{
	
	$number_of_listings = count($listings);
	$count = 0;
	
	if( $category == "all" )
	{
		foreach($listings->children() as $listing) 
		{
			showListing($listing);
			$count++;
			
			if($count<$number_of_listings)
			{
				echo "			<hr>\n\n";
			}
		}
		
	} // end $category == "all"?
	
	/*
	foreach($listings->children() as $listing) 
	{
		
		if( $category == "all" )
		{
			if($hr=="before")
			{
				echo "<hr>\n";
			}
		
			showListing($listing,$left_column_width,$right_column_width);
			
			if($hr=="after")
			{
				echo "<hr>\n";
			}			
		}
		else
		{
			$categoriesArray = explode(",",$listing->name['categories']);
			$numCategories = sizeof($categoriesArray);
			
			for ($x = 0; $x <= $numCategories; $x++) 
			{				
				if($categoriesArray[$x]==$category)
				{
					if($hr=="before")
					{
						echo "<hr>\n";
					}
				
					showListing($listing,$left_column_width,$right_column_width);
					
					if($hr=="after")
					{
						echo "<hr>\n";
					}
				}
			} 	
		}
		
	}
	*/
}

function showListing($listing)
{	
	echo "			<!-- Listing Begin -->\n";
	echo "			<div class='row'>\n";
	echo "			<div id='column' class='col-sm-4'>\n";
	echo "			<a target='_blank' href='" . $listing->website . "'>\n";
	echo "			<img style='margin-top:5px;width:100%;height:auto;border:0;' width='" . $listing->image['width'] ."' height='" . $listing->image['height'] . "' alt='" . $listing->image['alt'] . "' src='chinco-page/listings/images/" . $listing->image . "'>\n";
	echo "			</a>\n";
	echo "			</div>\n";
	echo "			<div id='column' class='col-sm-8' style='text-align:left;'>\n";
	echo "			<p>\n";
	echo "			<a target='_blank' href='" . $listing->website . "'><b>" . $listing->name . "</b></a><br>";
	echo $listing->description;
	echo "			<br>\n";
	if($listing->location != "")
	{
		echo "			<b>Location:</b> " . $listing->location . "<br>\n";
	}
	if($listing->phone != "")
	{
		echo "			<b>Phone:</b> <a href='tel:" . $listing->phone . "'>" . $listing->phone . "</a><br>\n"; 
	}
	if($listing->email != "")
	{	
		echo "			<b>Email:</b> <a href='mailto:" . $listing->email . "'>Click Here</a><br>\n";
	}
	if($listing->website != "")
	{	
		echo "			<b>Website:</b> <a target='_blank' href='" . $listing->website . "'>Click Here</a><br>\n";
	}
	if($listing->gm_link != "")
	{		
		echo "			<b>Map It:</b> <a target='_blank' href='" . $listing->gm_link . "'>Click Here</a>\n";
	}
	echo "			</p>\n";	
	echo "			</div>\n";
	echo "			</div>\n";
	echo "			<!-- Listing End -->\n\n";
}

?>