<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title><?php bloginfo( 'title' ); ?></title>
    <?php wp_head( ) ?>
</head>

<body <?php body_class( )?>>
<?php wp_body_open( ); ?>
    <header class="v-aligne">
        <div class="conteneur flex space-between">
            <section>
                <h1 class="titre-principal"> <a href="<?php echo esc_url(home_url('/'))?>"><?php bloginfo( 'title');?></a></h1>
                <div class="slogan"><?php bloginfo( 'description')?></div>
            </section>
            <nav class="flex v-aligne">
           <?php $args = array(
               'theme_location' => 'main-menu'
           );
           
           wp_nav_menu($args);
           
           ?>
            </nav>
        </div>
    </header>

    <main class="conteneur">