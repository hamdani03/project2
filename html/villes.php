<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index des villes</title>
    <link rel="stylesheet" href="../css/shared.css">
    <link rel="stylesheet" href="../css/villes.css">
    <script defer src="../javaScript/villes.js"></script>
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
            <li><i class="fas fa-city icon"  style="color: #fff;"></i><a href="#">   Index des villes</a></li>
            <li><i class="fas fa-map-marked-alt icon" style="color: #fff;"></i><a href="map.php">   Google Map</a></li>
            <li><i class="fas fa-link icon"  style="color: #fff;"></i><a href="links.php">   Liens utiles</a></li>
        </ul>
    </div>
    <main class="main">
        <table border="2">
            <tr>
                <th width="100">Ville</th>
                <th width="120">Superficie</th>
                <th width="160">Population</th>
                <th width="400">Gallerie</th>
            </tr>
            <tr>
                <td>Roma</td>
                <td>100,05 km²</td>
                <td>544,851 inhabitants</td>
                <td>
                    <img class="img" data-number="1" src="../images/roma1.jpeg" alt="-1">
                    <img class="img" data-number="2" src="../images/roma2.jpeg" alt="-2">
                    <img class="img" data-number="3" src="../images/roma3.jpeg" alt="-3">
                    <img class="img" data-number="4" src="../images/roma4.jpeg" alt="-4">
                </td>`
            </tr>
            <tr>
                <td>Milano</td>
                <td>41,42 km²</td>
                <td>2,4 million inhabitants</td>
                <td>
                    <img class="img" data-number="5" src="../images/milan1.jpeg" alt="-1">
                    <img class="img" data-number="6" src="../images/milan2.jpeg" alt="-2">
                    <img class="img" data-number="7" src="../images/milan3.jpeg" alt="-3">
                    <img class="img" data-number="8" src="../images/milan4.jpeg" alt="-4">
                </td>
            </tr>
            <tr>
                <td>Napoli</td>
                <td>1307,08 km²</td>
                <td>53,591 inhabitants</td>
                <td>
                    <img class="img" data-number="9" src="../images/napoli1.jpeg" alt="-1">
                    <img class="img" data-number="10" src="../images/napoli2.jpeg" alt="-2">
                    <img class="img" data-number="11" src="../images/napoli3.jpeg" alt="-3">
                    <img class="img" data-number="12" src="../images/napoli4.jpeg" alt="-4">
                </td>
            </tr>
        </table>
    </main>

    <div class="img1 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/roma1.jpeg" alt="-1">
    </div>

    <div class="img2 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/roma2.jpeg" alt="-2">
    </div>

    <div class="img3 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/roma3.jpeg" alt="-2">
    </div>

    <div class="img4 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/roma4.jpeg" alt="-3">
    </div>

    <div class="img5 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/milan1.jpeg" alt="-3">
    </div>

    <div class="img6 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/milan2.jpeg" alt="-3">
    </div>

    <div class="img7 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/milan3.jpeg" alt="-3">
    </div>

    <div class="img8 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/milan4.jpeg" alt="-3">
    </div>

    <div class="img9 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/napoli1.jpeg" alt="-3">
    </div>

    <div class="img10 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/napoli2.jpeg" alt="-3">
    </div>

    <div class="img11 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/napoli3.jpeg" alt="-3">
    </div>

    <div class="img12 modal hidden">
        <button class="close-button">&times;</button>
        <img class="modal__img" src="../images/napoli4.jpeg" alt="-3">
    </div>

    <div class="overlay hidden"></div>

    <footer class="footer">
        <ul>
            <li class="btn"><i class="fas fa-lightbulb icon"></i>  Suggestions</li>
            <li class="btn"><i class="fas fa-file-alt icon"></i>  Conditions d'<span style="font-family: Arial; font-size: 1.2em;">'</span>utilisation</li>
        <li>  Copyright  2023 <span style="font-family: Arial;">-</span> 2024 <i class="fas fa-copyright icon"></i></li>
        </ul>
    </footer>
</body>

</html>