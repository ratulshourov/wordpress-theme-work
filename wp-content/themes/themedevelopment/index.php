<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php wp_nav_menu(array('theme_location'=>'nav-menu','menu_id'=>'nav'))?>
                    <img id="logo" src="<?php echo get_theme_mod('ratul_theme_logo'); ?>" />
                </div>
            </div>
        </div>
    </div>


    <?php wp_footer(); ?>
</body>

</html>