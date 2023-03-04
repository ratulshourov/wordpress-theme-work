<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body class="<?php body_class();?>">
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/logo.png"/>
                </div>
                <div class="col-md-9"></div>
            </div>
        </div>
    </div>

    
<?php wp_footer();?>
</body>
</html>

