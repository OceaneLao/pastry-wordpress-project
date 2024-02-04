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
    <header>
        <div class="position-relative">
            <img src="wp-content\themes\my-pastry-theme\img\header.png" class="w-100" alt="">
            <div class="container">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <img src="wp-content\themes\my-pastry-theme\img\presentation.jpg" class="w-75 mt-2" alt="">
        <h1 class="text-center">
            Osez la gourmandise
        </h1>
        <button>
            Découvrez nos pâtisseries
        </button>

        <h2>
            Nos pâtisseries
        </h2>

        <h2>
            Nos ateliers de création
        </h2>

        <h2>
            Nous contacter
        </h2>

    </div>

    <footer>
        <div class="position-relative">
            <img src="wp-content\themes\my-pastry-theme\img\footer.png" class="w-100" alt="">
            <div class="container">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <p>
                        LAO Océane - 2024
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>