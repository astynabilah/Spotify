<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?php echo $judul ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand"  style="color:white;" pxhref="<?= base_url(); ?>Home"><img src="assets/logo.PNG" style="width:30px; height:30px;"> Spotify</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>Home">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>Browse">Browse</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>YourCollection">Your Collection</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Genre & Moods</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Charts</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>Login">Login</a>
                </div>
            </div>
        </div>
    </nav> 