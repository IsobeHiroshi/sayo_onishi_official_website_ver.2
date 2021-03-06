<?php get_header(); ?>

<div class="title-wrapper">
    <h1><span class="main-title">SAYO ONISHI</span><br><span class="sub-title">OFFICIAL WEBSITE</span></h1>
</div>
<div class="main-pic-menu-wrapper">
    <div class="main-pic-wrapper">
        <img class="main-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/top.jpg" alt="main image">
    </div>
    <?php
        wp_nav_menu( array(
            'theme_location'    =>  'menu-main',
            'container'         =>  'nav',
            'container_class'   =>  'menu-container',
            'menu_class'        =>  'main-menu'
        ) );
        ?>
</div>
<?php get_footer(); ?>