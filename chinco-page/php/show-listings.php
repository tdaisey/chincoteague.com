<?php

function showListings($listings,$category,$hr)
{	
	// Display all listings 	
	if( $category == "all" )
	{
		$count = 0;
		$number_of_listings = 0;
		
		// Get the number of listings 
		$number_of_listings = count($listings);
		
		// Loop through all listings 
		foreach($listings->children() as $listing) 
		{
			showListing($listing);
			$count++;
			
			if($hr=="true")
			{
				// Display a horizontal rule after 
				// each listing, except the last listing 
				if($count<$number_of_listings)
				{
					echo "			<hr>\n\n";
				}
			}
		}	
	} 
	else // Display listings that match a category
	{
		$count = 0;
		$number_of_listings = 0;
		
		// If $hr==true, then we need to first get the  
		// number of listings that will be displayed 
		if($hr=="true")
		{	
			// Loop through all listings 		
			foreach($listings->children() as $listing) 
			{
				// Get the categories associated the listing 
				$categoriesArray = explode(",",$listing->name['categories']);
				$numCategories = sizeof($categoriesArray);
				
				// Loop through the categories 
				// looking for matches   
				for ($x = 0; $x <= $numCategories; $x++) 
				{				
					if($categoriesArray[$x]==$category)
					{
						$number_of_listings++;
					}
				}			
			}
		}
		
		// Next display the listings  
		
		// Loop through all listings 		
		foreach($listings->children() as $listing) 
		{
			// Get the categories associated the listing 
			$categoriesArray = explode(",",$listing->name['categories']);
			$numCategories = sizeof($categoriesArray);
			
			// Loop through the categories 
			// looking for a match   
			for ($x = 0; $x <= $numCategories; $x++) 
			{				
				if($categoriesArray[$x]==$category)
				{
					showListing($listing);
					
					if($hr=="true")
					{
						$count++;
						
						// Display a horizontal rule after 
						// each listing, except the last listing 
						if($count<$number_of_listings)
						{
							echo "			<hr>\n\n";
						}
					}
				}
			}			
		}
	}
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