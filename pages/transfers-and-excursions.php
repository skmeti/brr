		<div class="py-2 text-center flex-column bg-dark text-white">
			<h1 data-aos="zoom-in">Transfers & Excursions</h1>
			<p data-aos="fade-up">Passenger transfer service with the possibility of choosing a vessel from our fleet. The transfer price depends on the starting point or destination. In addition, we organize one-day or half-day excursions with one of the ships from our fleet.</p>
		</div>
<div data-aos="fade-up" id="mapid" style="width: 100%; height: 400px;"></div>
		
<script>
	
	var mymap = L.map('mapid').setView([44.2725,14.7643], 8);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic2hhcnBlZWVlIiwiYSI6ImNqd2J1bGUwajA1cGgzenExY2tvdnVvemIifQ.qem1VebgSfK3aiGco9oHvg', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
	
	var imgs = ["archipelago_100x70.jpg","Pasman_100x70.jpg","Kornati_100x70.jpg","Biograd_100x70.jpg","Murter_100x70.jpg","Molat_100x70.jpg"];
	var anchors =["archipelago","pasman","kornati","biograd","murter","molat"]
	
	var popup1 = "<div class='ppcont'><img src='/images/destinations/"
	//insert img
	var popup2 = "' /><br /><div class='d-flex justify-content-center'><a href='/destinations#"
	//insert anchor
	var popup3 = "' class='moretip' target='_blank' ><i data-toggle='tooltip' data-placement='top' title='Read More' class='far fa-play-circle'></i></a><a href='/contact' class='moretip pl-3' target='_blank' ><i data-toggle='tooltip' data-placement='top' title='Book Now' class='fas fa-envelope-open-text'></i></a></div></div>";
	
	//Pašman
	L.marker([43.9631676236856,15.3307342529297]).bindPopup(popup1+imgs[1]+popup2+anchors[1]+popup3).addTo(mymap);
	//Kornati
	L.marker([43.8082697407466,15.3173446655273]).bindPopup(popup1+imgs[2]+popup2+anchors[2]+popup3).addTo(mymap);
	//Biograd
	L.marker([43.9374616903166,15.4488372802734]).bindPopup(popup1+imgs[3]+popup2+anchors[3]+popup3).addTo(mymap);
	//Murter
	L.marker([43.819665724207,15.589599609375]).bindPopup(popup1+imgs[4]+popup2+anchors[4]+popup3).addTo(mymap);
	//Molat
	L.marker([44.2138329467955,14.8796081542969]).bindPopup(popup1+imgs[5]+popup2+anchors[5]+popup3).addTo(mymap);
	
	//Archipelago
	
	var polygon = L.polygon([
    [44.3493863438953, 14.4607543945313],
    [44.4994439344686, 14.8658752441406],
    [44.3547872452511, 15.0478363037109],
    
    [44.2884690272765, 15.1522064208984],
    [44.2284725255276, 15.0450897216797],
    [44.0209653222845, 15.3087615966797],
    
    [43.8766130202951, 15.5257415771484],
    [43.8270967157104, 15.5319213867188],
    [43.8211519965054, 15.4982757568359],
    
    [43.9621791395264, 15.2503967285156],
    [43.878592817348, 15.2442169189453],
    [43.8533454775848, 15.1714324951172],
    
    [44.1615190216424, 14.7580718994141],
    [44.3493863438953, 14.4607543945313]
]);

	polygon.setStyle({fillColor: '#0000FF'});

	polygon.bindPopup(popup1+imgs[0]+popup2+anchors[0]+popup3).addTo(mymap);

	var popup = L.popup();
	
$(document).ready(function(){
    $("#nav-4").addClass("active");
});
</script>
