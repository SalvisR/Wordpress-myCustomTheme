<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php the_title(); ?></title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <div class="logo"><a href="<?php echo home_url(''); ?>"></a></div>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
                <li>
                    <div class="search-icon" id="search-btn"></div>
                </li>
            </ul>
        </nav>
        <div class="search-container" id="search-container">
            <button class="exit-btn" id="search-exit-btn">Exit search</button>
            <?php get_search_form(); ?>
        </div>
    </header>
