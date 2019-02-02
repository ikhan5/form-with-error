<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lab 4 - Imzan Khan</title>
        <link rel="stylesheet" href="Styles/styles.css">
    </head>
    
<body>
<header>
    <nav class="nav page-wrapper">
        <a href="#"><img alt="Logo for Imzan Khan's Lab 2 Newsletter Sign-Up" src="images/Logo.png" id="site-logo"></a>
        <?php 
            $navigation_links = ["Home" => "index.php", "About" => "index.php", "Projects" => "index.php", "Contact" => "index.php", "Donate" => "index.php"];
            display_navigation($navigation_links);
        ?>
    </nav>
</header>