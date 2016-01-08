<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/elastislide.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/custom.css" />
<script src="<?php bloginfo('template_url');?>/js/modernizr.custom.17475.js"></script>

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php wp_head();?>
</head>
<body>
<div class="karkas">
	<div class="header">
		<a href="/"><img src="<?php bloginfo('template_url');?>/images/logo.png" class="logo" alt="Fashion photographer"/></a>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu',
            'container' => '',
        )); ?>
	</div>