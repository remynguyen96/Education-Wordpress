<?php  
/*
	Template Name: Liên hệ
*/
get_header();
?>
<?php get_template_part("template-parts/slider");?>
<div class="shadow_title">
	<h2 class="text-center title_page"><?php the_title(); ?></h2>
</div>
<?php  
if(have_posts())
{
	while(have_posts())
	{
		the_post();
?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content_page">
				<?php the_content();?>
			</div>
		</div>
	</div>
<?php		
	}
}
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<section id="map-address"></section>
</div>
<div class="container">
	<div class="row contact_form">
		<?php echo do_shortcode('[contact-form-7 id="305" title="Form liên hệ"]'); ?>
		<!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<input type="text" class="form-control form_name">
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<input type="text" class="form-control form_email">
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<input type="text" class="form-control form_address">
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<input type="text" class="form-control form_phone">
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<input type="text" class="form-control form_title">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<textarea cols="30" rows="10" class="form-control form_content">
				
			</textarea>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-5 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-5">
			<input type="submit" class="btn btn_contact" Value="Gửi">
			<input type="submit" class="btn btn_contact" id="reset" Value="Làm lại">
		</div> -->
	</div>
</div>
<script>
	jQuery(document).ready(function($) {
	jQuery(window).on("load resize",function(e) {
  // Create an array of styles.
	  var styles = [
			{
			  stylers: [
				{ saturation: 0 }
			  ]
			},{
			  featureType: "road",
			  elementType: "geometry",
			  stylers: [
			  //  { lightness: 100 },
				{ visibility: "simplified" }
			  ]
			},{
			  featureType: "road",
			  elementType: "labels",
			  stylers: [
				{ visibility: "on" }
			  ]
			}
		  ];
	  // Create a new StyledMapType object, passing it the array of styles,
	  // as well as the name to be displayed on the map type control.
	  var styledMap = new google.maps.StyledMapType(styles,
	    {name: "Google Map"});
	  // Create a map object, and include the MapTypeId to add
	  // to the map type control.
	  //Main map ------------------------------------------------------------------
						  //Place
						  var place_Latlng = new google.maps.LatLng(10.810742, 106.714075);
						  //Seminar options
						  var place_mapOptions = {
							zoom: 17,
							scrollwheel: false,
							center: place_Latlng,
							mapTypeControlOptions: {
							  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
							}
						  };
						 //Get point to insert icon
						 var marker = new google.maps.Marker({
							  map: place_map,
							  position: place_Latlng,
							  animation: google.maps.Animation.BOUNCE,
							  icon: 'http://developerweb.pro/News/wp-content/themes/Entertainment/img/icon_map.png'
						  });
						  //Create map in seminar div
						  var place_map = new google.maps.Map(document.getElementById('map-address'),
							place_mapOptions);
						  //Associate the styled map with the MapTypeId and set it to display.
						  place_map.mapTypes.set('map_style', styledMap);
						  place_map.setMapTypeId('map_style');
						  marker.setMap(place_map);
						 //Info window
						  var infowindow_place = new google.maps.InfoWindow({
							content: '<p>Công ty TNHH Tư vấn và Đào tạo Môi trường Envi-school</p>'+
										'<p>628 Xô Viết Nghệ Tĩnh, Phường 25, Quận Bình Thạnh, TP. HCM</p>'+
										'<p>Hotline: 0913989898</p>'+
										'<p>Email: envischool.company@gmail.com</p>'
						  });
						  marker.addListener('click', function() {
							infowindow_place.open(place_map, marker);
						  });
	//--------------------------------------------------------------------------- End Main map
});
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjtppy-gG-EcwVl6rs9W53dQ8H1X5tXUs"></script>
<?php get_footer(); ?>