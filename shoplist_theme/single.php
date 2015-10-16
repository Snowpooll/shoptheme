<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php if ( get_post_meta($post->ID,'ShopName',TRUE) ): ?>
  <h3><?php echo post_custom("Impression")?></h3>
  <?php endif;?>
<?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail('medium'); ?>
<?php else : ?>
        <img src="<?php echo get_template_directory_uri();?>/img/noimage.png" width="300" height="300"/>
<?php endif;?>
  <?php the_content(); ?>

  <h3>メニュー</h3>
  <div data-role="collapsible">
    <h3>私のおすすめメニュー</h3>
    <p>イカスミパスタ</p>
  </div>
<?php if ( get_post_meta($post->ID,'ShopName',TRUE) ): ?>
<h3>店舗情報</h3>
  <table data-role="table" data-mode="reflow" class="ui-responsive">
    <thead>
      <tr>
        <th>店名</th>
        <th>定休日</th>
        <th>営業時間</th>
        <th>ランチ価格</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>HP</th>
        <th>アクセス</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo post_custom("ShopName")?></td>
        <td><?php echo post_custom("Holiday")?></td>
        <td><?php echo post_custom("Time")?></td>
        <td><?php echo post_custom("lunch")?></td>
        <td><?php echo post_custom("Address")?></td>
        <td><?php echo post_custom("tel")?></td>
        <td><?php echo post_custom("Hp")?></td>
        <td><?php echo post_custom("Access")?></td>
      </tr>
    </tbody>
  </table>
<h3>周辺地図</h3>
<?php
    $map = esc_html(get_post_meta($post->ID,"Address",true));

    echo do_shortcode('[map addr="'.$map.'" height="400px" zoom="16"]');
 ?>
  <?php endif;?>

  <?php endwhile;   else: ?>
    <p>記事はありません</p>
  <?php endif; ?>


<?php get_footer(); ?>
