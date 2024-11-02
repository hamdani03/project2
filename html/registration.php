<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/shared.css">
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

<?php

    if(isset($_POST['submit'])) {

        $prenom = $_POST['firstname'];
        $nom = $_POST['lastname'];
        $email = $_POST['email'];
    
        $connection = mysqli_connect('localhost', 'root', 'root', 'newsletter');

        if($connection) {

            $query = "SELECT email
                      FROM Internaute
                      WHERE email LIKE '$email'";

            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) == 0) {

                $query = "INSERT INTO Internaute VALUES
                          ('$nom', '$prenom', '$email')";

                $result = mysqli_query($connection, $query);
                
                echo "<h1 class='h1'>vous avez bien signé la newsletter.</h1>";

            } else {
                echo "<h1 class='h1'>$email est déjà inscrit à la newsletter.</h1>";
            }
    
        } else 
            die("Database connection failed!" . mysqli_error());

    }

?>

    <header class="header">
        <div>
            <a href="index.php"><img class="logo" src="../images/logo.jpg" alt="Italia flag"></a>
        </div>
        <div>
            <ul>
                <li><i class="fas fa-home icon" style="color: #fff;"></i><a href="index.php">   Accueil</a></li>
                <li><i class="fas fa-sitemap icon" style="color: #fff;"></i><a href="#plan">   Plan de site</a></li>
                <li><i class="fas fa-info-circle icon" style="color: #fff;"></i><a href="#whomi">   Qui sommes-nous ?</a></li>
                <li><i class="fas fa-envelope icon" style="color: #fff;"></i><a href="#contact">   Contact</a></li>
            </ul>
        </div>
    </header>
    <div class="sidenav">
        <ul>
            <li><i class="fas fa-landmark icon" style="color: #fff;"></i><a href="monuments.php">   Sites et Monuments</a></li>
            <li><i class="fas fa-city icon"  style="color: #fff;"></i><a href="villes.php">   Index des villes</a></li>
            <li><i class="fas fa-map-marked-alt icon" style="color: #fff;"></i><a href="map.php">   Google Map</a></li>
            <li><i class="fas fa-link icon"  style="color: #fff;"></i><a href="links.php">   Liens utiles</a></li>
        </ul>
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