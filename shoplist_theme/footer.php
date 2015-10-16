</div>
<div data-role="footer" <?php if(is_single()):?>data-position="fixed"<?php endif;?>>
<?php if(is_single()):?>
 <div data-role="navbar">
        <ul>
          <li><a href="tel:<?php echo post_custom("tel")?>" data-icon="phone">電話</a></li>
          <li><a href="http://maps.google.com/maps?q=<?php echo post_custom("Address")?>" data-icon="location">地図</a></li>
          <li><a href="#" data-icon="edit">tweet</a></li>
        </ul>
      </div>
<?php endif; ?>
</div>
 Copyright　2015 <?php if(date_i18n('Y')!=2015){
   echo '- ';
   echo date_i18n('Y');
 } ?><br>
 <?php bloginfo('name'); ?>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
