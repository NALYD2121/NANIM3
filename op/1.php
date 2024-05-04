<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>NALYD</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="https://nalyd2121.github.io/NANIM3/"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://nalyd2121.github.io/NANIM3/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://nalyd2121.github.io/NANIM3/Films.html">Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://nalyd2121.github.io/NANIM3/Anim%C3%A9.html">Animé</a>
                    </li>
                    <li class="darkmode">
                        <a class="darkmode3">
                            <!DOCTYPE html>
                            <html>

                            <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                body {
                                    padding: 0px;
                                    background-color: rgb(255, 255, 255);
                                    color: rgb(0, 0, 0);
                                    font-size: 25px;
                                }

                                .dark-mode {
                                    background-color: black;
                                    color: white;
                                }
                                </style>
                            </head>

                            <body>
                                <span class="dark-mode_bt" button onclick="myFunction()"><img
                                        src="images/mode dark 3.png"></button>
                        </a></span>
                        <script>
                        function myFunction() {
                            var element = document.body;
                            element.classList.toggle("dark-mode");
                        }
                        </script>
</body>

</html>
</li>
</ul>
</div>
</nav>
</div>
<!-- header section end -->
<!-- banner section end -->
<div class="banner_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner_taital"><br>One Piece 1</div>
            </div>
            <div class="col-md-6">
                <div class=""><a href="One peice/1090.html"><img src=""></a></div>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="//bembed.net/e/vQBYEbNe6z6En1m" allowfullscreen></iframe>
        </div>
        <nav aria-label="navigation">
            <ul class="pager">
                </style>
                </head>
                <meta charset="utf-8">
                <title>HTML</title>
                <style>
                a {
                    text-decoration: none;
                    display: inline-block;
                    padding: 10px 30px;
                    font-size: 30px;
                }

                .previous {
                    background-color: cyan;
                    color: #8116d8;
                }

                .next {
                    background-color: cyan;
                    color: #8116d8;
                }

                .round {
                    border-radius: 60%;
                }
                </style>
                </head>
                <span class="Précédent_bt"><a href="#" title="Précédent">Précédent</a></span>
                <span class="Suivant_bt"><a href="2.html" title="Suivant">Suivant</a></span>
                <div class="dropdown">
                    <button class="btn btn-secondarys dropdown-toggles" type="button" id="dropdownMenuButton"
                        style=position:absolute;top:50%;margin-top:50px;height;20px; data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Episode 1
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="scroller">*
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Liste des épisodes</title>
                            </head>

                            <body>

                                <!-- Contenu de la page -->
                                <h1>Liste des épisodes</h1>

                                <!-- Génération de la liste des épisodes -->
                                <div class="scroller">
                                    <?php
    // Boucle pour générer les liens des épisodes
    $baseURL = "https://nalyd2121.github.io/NANIM3/op/";

    for ($i = 1; $i <= 1000; $i++) {
        // Génération du lien avec le numéro d'épisode
        $episodeURL = $baseURL . $i . ".html";
        echo '<a class="dropdowns-item" href="' . $episodeURL . '">Episode ' . $i . '</a>';
    }
    ?>
                                </div>

                            </body>

                            </html>
            </ul>
        </nav>
    </div>
    </section>
</div>
<!-- cooming  section end -->
<!-- footer  section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_menu">
            <ul>
                <li><a href="https://nalyd2121.github.io/NANIM3/index.html">Accueil</a></li>
                <li><a href="https://nalyd2121.github.io/NANIM3/Films.html">Films</a></li>
                <li><a href="https://nalyd2121.github.io/NANIM3/Anim%C3%A9.html">Animé</a></li>
            </ul>
        </div>
        <div class="social_icon">
            <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- footer  section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <div class="copyright_text"> <a href=""></a></div>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>
</body>

</html>