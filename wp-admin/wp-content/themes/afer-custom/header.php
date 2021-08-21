<!DOCTYPE html>
<html>
    <head>

        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>

    <body <?php body_class();?>>

    <header>
        <div class="container">
            <?php wp_nav_menu (
                array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navigation',
                )
            );?>
        </div>
    </header>