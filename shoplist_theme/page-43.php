<?php get_header(); ?>


 <div id="area_name"></div>
 <div id="map"></div>

    <script>
       window.onload =function() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                  var options = {
                      zoom: 15,
                      center: latlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  var map = new google.maps.Map(document.getElementById('map'), options);
                  var marker = new google.maps.Marker({
                      position: latlng,
                      map: map,
                      title: '現在地'
                  });

get_area_name(latlng);
              }, function(e) {
                  document.getElementById('message').innerHTML = typeof e == 'string' ? e : e.message;
              });
          } else {
              document.getElementById('message').innerHTML = 'Location APIがサポートされていません。';
          }

    function get_area_name(latLng_now){
      // 座標から住所名を取得
      var geocoder = new google.maps.Geocoder();
        geocoder.geocode({latLng: latLng_now}, function(results, status){
        if(status == google.maps.GeocoderStatus.OK){
            document.getElementById("area_name").innerHTML
               = results[0].formatted_address+'付近にいます';
        } else {
          // エラーの場合
        }
      });
    }
      };
    </script>
<?php get_footer(); ?>
