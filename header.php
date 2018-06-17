<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- moved to functions.php -->
    <!--<title>Test Wordpress Theme</title>-->
    <!--<link rel="stylesheet" href="<?php /*echo get_bloginfo('template_directory'); */?>/css/main.css">-->

    <?php wp_head();?>

</head>
<body>
<h1><a href="<?php echo(get_bloginfo('wpurl')); ?>">header.php - <?php echo(get_bloginfo('name')); ?></a></h1>
<p><?php echo(get_bloginfo('description')); ?></p>

<div class="navbar">
    <?php wp_list_pages('title_li="XYZ A"&depth=0'); ?>
</div>

<?php echo($post->post_parent); ?>