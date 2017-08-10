<?php
/*
    Template Name: Liên Hệ
*/
get_header() ?>
<div class="container-fluid">
    <div class="row">
        <div class="bg_home"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 infomation">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-offset-1 col-lg-10 col-lg-offset-1 introduce">
                <h2>Tranh thêu tay</h2>
                <p><em>
                    <strong>Tranh thêu tay Hải Yến</strong> tự hào đã góp phần tạo nên sắc màu mới cho dòng <strong>tranh thêu tay truyền thống Việt Nam</strong>. Là món quà độc đáo và đậm đà tình nghĩa quê hương dành cho những người thân yêu và bạn bè khi đến Việt Nam tham quan du lịch. Chúng tôi mong muốn mang những giá trị văn hóa nghệ thuật đặc biệt này giới thiệu tới khắp miền đất nước Việt Nam và bạn bè trên Thế Giới.
                </em></p>
                <img src="<?php echo get_template_directory_uri()." /img/slogan.png " ?> " alt="Giữ gìn văn hóa" />
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 bg_product">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                        <div class="contact_us">
                            <h3 class="text-center">Thông Tin Liên Hệ</h3>
                            <?php echo do_shortcode('[contact-form-7 id="102" title="Thông Tin Liên Hệ"]') ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 address_map">
                        <section id="map"></section>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
jQuery(document).ready(function($) {
jQuery(window).on("load resize",function(e) {
  var styles = [
    {
      featureType: 'water',
      elementType: 'labels.text.fill',
      stylers: [{color: '#0da3c9'}]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [{color: '#c7e9f2'}]
    },
  {
    featureType: 'poi.park',
    elementType: 'geometry.fill',
    stylers: [{color: '#b8ab40'}]
  },
    {
      featureType: 'road',
      elementType: 'geometry',
      stylers: [{color: '#fdffd5'}] // color row drive large
    },
    {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [{color: '#fcf191'}]
    },
    {
      featureType: 'road.arterial',
      elementType: 'geometry',
          stylers: [{color: '#f2f78c'}] // color row drive smalll
    },
    {
      featureType: 'road.highway',
      elementType: 'geometry',
      stylers: [{color: '#ffe81f'}]
    },
    {
      featureType: 'road.highway.controlled_access',
      elementType: 'geometry',
      stylers: [{color: '#D4BE00'}]
    },
];
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Google Map"});
                      //Place
                    //    var ip_address1="10.847458, 106.791174";
                       var ip_address1 = {lat: 10.847458, lng: 106.791174};
                    //    var ip_address2 = {lat: 10.847332, lng: 106.791732};
                      var place_Latlng = new google.maps.LatLng(ip_address1);
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
                          animation: google.maps.Animation.DROP,
                          icon: 'http://developerweb.pro//tranhtheu/wp-content/themes/tranh/img/map.png'
                      });
                      //Create map in seminar div
                      var place_map = new google.maps.Map(document.getElementById('map'),
                        place_mapOptions);
                      //Associate the styled map with the MapTypeId and set it to display.
                      place_map.mapTypes.set('map_style', styledMap);
                      place_map.setMapTypeId('map_style');
                      marker.setMap(place_map);
                      var infowindow_place = new google.maps.InfoWindow({
                        content: '<div class="info_window">'+
                                    '<h2 class="text-center text-capitalize">Cửa hàng tranh thêu tay Hải Yến</h2>'+
                                    '<p>Địa chỉ 1: 628 Xô Viết Nghệ Tĩnh, Phường 25, Quận Bình Thạnh, TP. HCM</p>'+
                                    '<p>Địa chỉ 2: 628 Xô Viết Nghệ Tĩnh, Phường 25, Quận Bình Thạnh, TP. HCM</p>'+
                                    '<p>Điện thoại: 0913 98 98 98 - 08.62589699</p>'+
                                    '<p>Facebook liên hệ: <a href="https://www.facebook.com/dothihongvan?fref=ts">Vân Hông Đô</a></p></div>'
                      });
                      marker.setAnimation(google.maps.Animation.BOUNCE);
                      marker.addListener('click', function() {
                        infowindow_place.open(place_map, marker);
                      });
     });
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjtppy-gG-EcwVl6rs9W53dQ8H1X5tXUs"></script>
<?php get_footer() ?>
