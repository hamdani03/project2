<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map italia</title>
    <link rel="stylesheet" href="../css/shared.css">
    <link rel="stylesheet" href="../css/map.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script defer src="../javaScript/map.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header class="header">
        <div>
            <a href="index.php"><img class="logo" src="../images/logo.jpg" alt="Italia flag"></a>
        </div>
        <div>
            <ul>
                <li><i class="fas fa-home icon" style="color: #fff;"></i><a href="index.php">   Accueil</a></li>
                <li><i class="fas fa-sitemap icon" style="color: #fff;"></i><a href="#">   Plan de site</a></li>
                <li><i class="fas fa-info-circle icon" style="color: #fff;"></i><a href="#">   Qui sommes-nous ?</a></li>
                <li><i class="fas fa-envelope icon" style="color: #fff;"></i><a href="#">   Contact</a></li>
            </ul>
        </div>
    </header>
    <div class="sidenav">
        <ul>
            <li><i class="fas fa-landmark icon" style="color: #fff;"></i><a href="monuments.php">   Sites et Monuments</a></li>
            <li><i class="fas fa-city icon"  style="color: #fff;"></i><a href="villes.php">   Index des villes</a></li>
            <li><i class="fas fa-map-marked-alt icon" style="color: #fff;"></i><a href="#">   Google Map</a></li>
            <li><i class="fas fa-link icon"  style="color: #fff;"></i><a href="links.php">   Liens utiles</a></li>
        </ul>
    </div>
    <div class="square">
        <div id="map"></div>
    </div>
    <footer class="footer">
        <ul>
            <li class="btn"><i class="fas fa-lightbulb icon"></i>  Suggestions</li>
            <li class="btn"><i class="fas fa-file-alt icon"></i>  Conditions d'<span style="font-family: Arial; font-size: 1.2em;">'</span>utilisation</li>
        <li>  Copyright  2023 <span style="font-family: Arial;">-</span> 2024 <i class="fas fa-copyright icon"></i></li>
        </ul>
    </footer>
</body>

</html>