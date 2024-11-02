<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../css/login_page.css">
    <link rel="stylesheet" href="../css/shared.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script defer src="../javaScript/login_page.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Se connecter</h1>
            </div>
            <div class="form-content">
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Se connecter</button>
                        <?php

                            if(isset($_POST['submit'])) {

                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                if($username === 'admin' && $password === 'admin') {

                                    header("Location: dashboard.php");
 
                                    exit;

                                } else 
                                    echo "<p>L'identifiant ou le mot de passe est incorrect</p>";
                            }

                        ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-panel two">
            <div class="form-header">
                <h1>S'inscrice à la newsletter</h1>
            </div>
            <div class="form-content">
                <form method="POST" action="registration.php">
                    <div class="form-group">
                        <label for="firstname">Prenom</label>
                        <input type="text" id="firstname" name="firstname" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email" required="required" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">S'incrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <header class="header">
        <div>
            <a href="index.php"><img class="logo" src="../images/logo.jpg" alt="italia flag"></a>
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