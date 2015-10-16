<?php get_header(); ?>


<ul>

  <li>経度：<span id="latitude"></span></li>

  <li>緯度：<span id="longitude"></span></li>

</ul>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>

$(function() {

  if (navigator.geolocation) {

    navigator.geolocation.getCurrentPosition(

      function(pos) {

        $('#latitude').html(pos.coords.latitude);

        $('#longitude').html(pos.coords.longitude);

      }

    );

  } else {

    window.alert('Geolocation API対応ブラウザでアクセスしてください。');

  }

});

</script>
<?php get_footer(); ?>
