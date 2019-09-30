<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="navbar fixed-top">

    <?php wp_nav_menu(
        array(
            'theme-location' => 'top-menu',
            'menu-class' => 'navigation',
        )
    );?>

</header>
