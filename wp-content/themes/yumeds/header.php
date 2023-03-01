<?php
/**
 * Header
 */
$current_home = is_front_page() ?: '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@700;800&family=Roboto:wght@400;500&display=swap"
          rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header <?php echo $current_home ? '' : 'blue'; ?>">
    <?php
    if ($current_home) {
        get_template_part('parts/header', 'home');
    } else {
        get_template_part('parts/header', 'pages');
    }
    ?>
</header>