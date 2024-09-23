<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php page_title(); ?> | <?php site_name(); ?> | <?php site_sub_name(); ?> </title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" />
</head>
<header>
    <h1><?php site_name(); ?></h1>
    <nav class="menu">
        <?php nav_menu(); ?>
    </nav>
</header>

<body>
    <div class="wrap">

        <article class="light-text">
            <h2 class="bold-text" ><?php page_title(); ?></h2>
            <?php page_content(); ?>
        </article>

       


    </div>
</body>
 <footer class="footer">
            <nav class="footer a:hover">
                <?php nav_menu(); ?>

            </nav>
            <small>
                &copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>.<br>
                Version: <?php echo site_version(); ?>
            </small>
        </footer>
</html>