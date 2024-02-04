<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Pastry Wordpress Project</title>
</head>

<body>
    <?php wp_head() ?>
    <header>
        <div class="position-relative">
            <img src="wp-content\themes\my-pastry-theme\img\header.png" class="w-100" alt="">
            <div class="container">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <?php wp_nav_menu(
                        [
                            'theme_location' => 'primary'
                        ]
                    )
                    ?>
                </div>
            </div>
        </div>
    </header>