<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>PHP</title>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <?if(!isset($_SESSION['login'])) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="/?page=login">Kirish</a>
                        </li>
                    </ul>
                <?else:?>
                    <ul class="navbar-nav">
                        <li class="nav-item mr-5">
                            <a class="nav-link btn btn-outline-success" href="/?page=add_products">Mahsulot qo'shish</a>
                        </li>

                        <li class="navbar-nav text-primary mr-3"><? echo $_SESSION['login'] ?></li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger btn-sm text-white" href="../database/Exit.php">Chiqish</a>
                        </li>
                    </ul>
                <?endif;?>
            </div>
        </nav>
    </header>
</head>
<body>

