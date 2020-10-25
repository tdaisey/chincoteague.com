function chincoMap() 
{

	// Set map properties 
	var chincoMapLatLng = new google.maps.LatLng(37.937292, -75.371109);
	var chincoMapZoom = 12;
	var mapProp= {
		center:chincoMapLatLng,
		zoom:chincoMapZoom,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
	};
	
	// Create a map object that displays in the 'gooleMap' div
	var chincoMap=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	//var chincoMap=new google.maps.Map(document.getElementById("googleMap"));
	
	// Check if the browser supports the XMLHttpRequest object
	if (window.XMLHttpRequest) 
	{
		// Create an XMLHttpRequest object 
		xmlhttp = new XMLHttpRequest();
	} 
	else 
	{
		// Create an ActiveXObject (for older browsers)
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	// Specify the function to be executed when the the XMLHttpRequest 
	// response is ready (when readyState is 4 and the status is 200) 
	xmlhttp.onreadystatechange = function() 
	{
		var xmlData, i, j, x, y, z, name, lat, lng, html, website, categoriesString, categoriesArray, numCategories;
		
		if (this.readyState == 4 && this.status == 200) 
		{
			
			// Action to be performed when the document is ready
			var bounds  = new google.maps.LatLngBounds();
			
			// Read the response as XML data 
			xmlData = this.responseXML;
		
			// Get xml elements (returned as arrays of elements)
			w = xmlData.getElementsByTagName("website");
			x = xmlData.getElementsByTagName("name");
			y = xmlData.getElementsByTagName("lat");
			z = xmlData.getElementsByTagName("long");
		
			//Iterate through the xml element arrays
			for (i = 0; i < x.length; i++) 
			{
				website = w[i].childNodes[0].nodeValue;
				name = x[i].childNodes[0].nodeValue;
				categoriesString = x[i].getAttribute('categories');
				categoriesArray = categoriesString.split(",");
				numCategories = categoriesArray.length;
				lat = y[i].childNodes[0].nodeValue;
				lng = z[i].childNodes[0].nodeValue;
								
				for (j = 0; j < numCategories; j++)
				{
					if(categoriesArray[j] == "Map View")
					{
						//html += '<br>' + categoriesArray[j];
						var point = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
						
						// Add a marker to the map 						
						var marker = new google.maps.Marker({ position:point, map:chincoMap, title:name, icon: 'chinco-page/images/markers/blue.png' });
						bounds.extend(marker.getPosition()); 
						
						html = '<span style="font-size:0.81em; color:#333333;"><a target="_blank" href="' + website + '">' + name + '</span>';
						
						// Add a infoWindow to the map 
						var infoWindow = new google.maps.InfoWindow();
						infoWindow.setContent(html);
						infoWindow.open(chincoMap, marker);						
					}						
				}
			}
			
			google.maps.event.addListenerOnce(chincoMap, 'tilesloaded', function() 
			{
				chincoMap.fitBounds(bounds); 
			});
			
			google.maps.event.addDomListener(window, 'resize', function() {
				chincoMap.fitBounds(bounds);
			});

		}
		
	};
	
	// Configure the request and send it
	if(listingType == 'hotels')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/hotels.xml", true);
	}
	else if(listingType == 'vacation-rental-homes')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/vacation-rental-homes.xml", true);
	}
	else if(listingType == 'bandbs')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/bandbs.xml", true);
	}
	else if(listingType == 'vacation-rental-companies')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/vacation-rental-companies.xml", true);
	}
	else if(listingType == 'campgrounds')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/campgrounds.xml", true);
	}
		else if(listingType == 'long-term-rentals')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/long-term-rentals.xml", true);
	}
	else if(listingType == 'restaurants')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/restaurants.xml", true);
	}
	else if(listingType == 'carryout')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/carryout.xml", true);
	}
	else if(listingType == 'ice-cream-parlors')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/ice-cream-parlors.xml", true);
	}
	else if(listingType == 'activities')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/activities.xml", true);
	}
	else if(listingType == 'boat-rentals')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/boat-rentals.xml", true);
	}
	else if(listingType == 'bait-and-tackle-shops')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/bait-and-tackle-shops.xml", true);
	}
	else if(listingType == 'boat-tours')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/boat-tours.xml", true);
	}
	else if(listingType == 'charter-boats')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/charter-boats.xml", true);
	}
	else if(listingType == 'real-estate-companies')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/real-estate-companies.xml", true);
	}
	else if(listingType == 'services')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/services.xml", true);
	}
	else if(listingType == 'shops')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/shops.xml", true);
	}
	else if(listingType == 'waterfowl-hunting')
	{
		xmlhttp.open("GET", "chinco-page/listings/xml/waterfowl-hunting.xml", true);
	}
	xmlhttp.send();
	
}
