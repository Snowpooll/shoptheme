<?php get_header(); ?>

<!-- １行目 -->
<div class="ui-grid-b">
  <div class="ui-block-a">

    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/wa.png" alt="" class="ic"><br>和食</a>
  </div>
  <div class="ui-block-b">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/chu.png" alt="" class="ic"><br>中華</a>
  </div>
  <div class="ui-block-c">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/yo.png" alt="" class="ic"><br>洋食</a>
  </div>
</div>

<!-- ２行目 -->
<div class="ui-grid-a">
  <div class="ui-block-a">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/cake.png" alt="" class="ic"><br>スイーツ</a>
  </div>

  <div class="ui-block-b">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ramen.png" alt="" class="ic"><br>ラーメン</a>
  </div>
</div>

<!-- ３行目 -->
<div class="ui-grid-b">
  <div class="ui-block-a">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(43);?>/current.php"><img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="" class="ic"><br>地図</a>
  </div>
  <div class="ui-block-b">
<label class="ui-btn ui-corner-all" >
    <img class="ic" src="<?php echo get_template_directory_uri(); ?>/img/camera.png" alt="" ><br>カメラ         
<input type="file"  class="ui-btn ui-corner-all"accept="image/*" ></label>
  </div>
  <div class="ui-block-c">
    <a class="ui-btn ui-corner-all" href="<?php echo get_page_link(35);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tweet.png" alt="" class="ic"><br>ツイート</a>
  </div>
</div>
<?php get_footer(); ?>
