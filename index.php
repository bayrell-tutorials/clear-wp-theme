<?php

/* Check if Wordpress */
if (!defined('ABSPATH')) exit;

?><!doctype html>
<html>
<head>
<title><?php the_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" media="screen"
    href="<?= get_template_directory_uri() . "/style.css?_" . F_INC ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php include "templates/include/header.php" ?>
<?php include "templates/pages/index.php" ?>
<?php include "templates/include/footer.php" ?>
<?php wp_footer(); ?>
</body>
</html>