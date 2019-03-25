<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(' | ',true,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

    <div class = "container">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3cc47c;">
            <a class="navbar-brand" href="http://localhost:8080/?" style="font-family: impact;">Wordpress Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8080/?">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Links
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://github.com/stval98/wordpress2">Github</a>
                            <a class="dropdown-item" href="#">YouTube</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<div class = "container">

<?php wp_head(); ?>
