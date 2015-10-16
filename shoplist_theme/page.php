<?php get_header();?>
<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=10&paged=$paged"); ?>
<form action="" class="ui-filterable">
  <input type="text" id="keywd" data-type="search" placeholder="お店の名前を入力">
</form>
<br>
<?php if (have_posts()): while(have_posts()): the_post(); ?>
  <ul data-role="listview" data-filter="true" data-input="#keywd">
    <li class="ui-li-has-thumbnail"><a href="<?php the_permalink(); ?>">
<?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail(); ?>
<?php else : ?>
	<img src="<?php echo get_template_directory_uri();?>/img/noimage.png"/>
<?php endif;?>
<?php the_title(); ?></a></li>
  </ul>
<?php endwhile; else: ?>
<p>該当するお店がありません</p>
<?php endif; ?>
<?php get_footer(); ?>
