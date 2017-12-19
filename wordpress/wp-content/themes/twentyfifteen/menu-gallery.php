<?php
/*
 Template Name: Menu Gallery
 */
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/7054.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/7011.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/7025.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/7043.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/7000.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modul-0-splash.js" ></script>
</head>
<body>
	<?php include 'menu/7000/7000-content.php'; ?>
    <div id="menu-gallery" class="menu-gallery" style="display: none;">
        <?php include 'menu/7025/7025-content.php'; ?>
		<?php include 'menu/7054/7054-content.php'; ?>
		<?php include 'menu/7043/7043-content.php'; ?>
		<?php include 'menu/7054/7054-content.php'; ?>
		<?php include 'menu/7043/7043-content.php'; ?>
		<?php include 'menu/7054/7054-content.php'; ?>
		<?php include 'menu/7011/7011-content.php'; ?>
    </div>
    
</body>
</html>

