<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php if(!is_home()){ wp_title('|',true,'right'); } bloginfo('name'); ?></title>
<link rel="stylesheet"type="text/css" href="<?php echo get_stylesheet_uri(); ?>" >
<link rel="stylesheet"
href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js">
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div data-role="page" data-title="jQuery Mobile">
<div data-role="header">
 <h1><?php bloginfo('name'); ?></h1>
</div>
<div role="main" class="ui-content">
