<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italia</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/shared.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script defer src="../javaScript/index.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="welcome">
        <div class="italia">
            <h1>Italia</h1>
        </div>
        <div>
            <iframe style="margin-top: 80px;" width="400" height="225" src="https://www.youtube.com/embed/vCg0mocBdCY?si=rhtSJGRHTaIe0dSq" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; "
            allowfullscreen>
            </iframe>
            <div width="400" class="newsletter">
                <table border="2" width="380" class="news_table">
                    <?php

                        $connection = mysqli_connect('localhost', 'root', 'root', 'newsletter');

                        if($connection) {

                            $query = "SELECT news_id, titre, date_publication
                                      FROM news
                                      ORDER BY date_publication DESC
                                      LIMIT 3";
            
                            $result = mysqli_query($connection, $query);
            
                            while([$id, $titre, $date]= mysqli_fetch_row($result)) {
                                $date = substr($date, 0, -3);
                                echo "<tr>
                                        <td>
                                            <p class='date'>$date</p>
                                            <p class='title'>$titre</p>
                                            <a class='link details' data-number='$id' href='#'>Cliquez ici pour plus de details</a>
                                        </td>
                                    </tr>";
                            }
            
                        } else 
                            die("Database connection failed!" . mysqli_error());

                    ?>
                    <tr>
                        <td>
                            <a class="link-2" href="#">&#x226B; Tous les news</a>
                        </td>
                    </tr>
                </table>
                <a class="link-3" style="font-family: arial;" href="">S'inscrire à la newsletter</a><br>
                <a class="link-3" style="font-family: arial;" href="login_page.php">Se connecter</a>
            </div>
        </div>
    </div>

    <div class="register-modal modal hidden">
        <button class="close-button">&times;</button>
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

    <div class="overlay hidden"></div>

    <header class="header">
        <div>
            <a href="index.php"><img class="logo" src="../images/logo.jpg" alt="Italia flag"></a>
        </div>
        <div>
            <ul>
                <li><i class="fas fa-home icon" style="color: #fff;"></i><a href="index.php">   Accueil</a></li>
                <li><i class="fas fa-sitemap icon" style="color: #fff;"></i><a href="#plan">   Plan de site</a></li>
                <li><i class="fas fa-info-circle icon" style="color: #fff;"></i><a href="#whoami">   Qui sommes-nous ?</a></li>
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
    <section id="plan">
        <div class="plandiv">
            <h1>Plan de site:</h1>
            <div class="links">
                <a href="monuments.php">
                    <div class="image">
                        <img class="image__img" src="../images/atar1.webp" alt="monuments">
                        <div class="image__overlay">
                            <h1>Sites et monuments</h1>
                        </div>
                    </div>
                </a>
                <a href="villes.php">
                    <div class="image">
                        <img class="image__img" src="../images/milan4.jpeg" alt="index des villes">
                        <div class="image__overlay">
                            <h1>Index des villes</h1>
                        </div>
                    </div>
                </a>
                <a href="map.php">
                    <div class="image">
                        <img class="image__img" src="../images/map.jpg" alt="map Italy">
                        <div class="image__overlay">
                            <h1>Map Italy</h1>
                        </div>
                    </div>
                </a>
                <a href="links.html">
                    <div class="image">
                        <img class="image__img" src="../images/link.jpg" alt="liens utiles">
                        <div class="image__overlay">
                            <h1>Liens utiles</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="whoami">
        <div class="whoamidiv">
            <h1>Qui somme nous:</h1>
            <div class="whoami__desc">
                <img class="whoami__img" src="../images/DSC_0425.jpg" alt="handsome man">
                <div class="MontBlanc-font">
                    <p><i class="fas fa-user"></i> Nom et prenom: Ayyoub Hamdani</p>
                    <p><i class="fas fa-id-card"></i> CNE: N139195260</p>
                    <p><i class="far fa-envelope"></i> Adresse email: Ayoubhamdani<span style="font-family: sans-serif;">@</span>gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contactdiv">
            <h1>Contact:</h1>
            <div class="contactdiv__form">
                <form>
                    <div>
                    <label for="nom"><i class="fas fa-user"></i>  Nom: </label> <br>
                    <input type="text" name="nom" id="nom" required>
                    </div>
                    <div>
                    <label for="prenom"><i class="fas fa-user"></i>  Prenom : </label> <br>
                    <input type="text" name="prenom" id="prenom" required>
                    </div>
                    <div>
                    <label for="telephone"><i class="fas fa-phone"></i>  Telephone : </label> <br>
                    <input type="tel" name="telephone" id="telephone" required>
                    </div>
                    <div>
                    <label for="sujet"><i class="fas fa-heading"></i>  Sujet : </label><br>
                    <input type="text" name="sujet" id="sujet" required>
                    </div>
                    <div>
                    <label for="message"><i class="fas fa-comment"></i>  Message  : </label> <br>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea> <br>
                    </div>
                    <div class="inpu">
                    <input type="submit" value="Valider" name="submit">
                    <input type="reset" value="reset">
                    </div>
                </form>
            </div>
        </div>
    </section>

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

<?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'newsletter');

    if($connection) {

        $query = "SELECT news_id, titre, contenu, date_publication
                    FROM news
                    ORDER BY date_publication DESC
                    LIMIT 3";
            
        $result = mysqli_query($connection, $query);
            
        while([$id, $titre, $contenu, $date]= mysqli_fetch_row($result)) {
            $date = substr($date, 0, -3);
            echo "<div class='news-$id modal hidden'>
                    <button class='close-button'>&times;</button>
                    <div>
                        <button class='close-button'>&times;</button>
                        <div class='news'>
                            <p><b style='font-family: inherit;'>date de publication:</b> $date</p>
                            <h2>$titre</h2>
                            <p>$contenu</p>
                        </div>       
                    </div>
                </div>";
        }

        $query = "SELECT news_id, titre, contenu, date_publication
                  FROM news
                  ORDER BY date_publication DESC";

        $result = mysqli_query($connection, $query); 
        
        if(mysqli_num_rows($result) <= 10) {

            echo "<div class='allnews modal hidden'>
                    <button class='close-button'>&times;</button>
                    <div class='news-container'>";

            while([$id, $titre, $contenu, $date] = mysqli_fetch_row($result)) {
                $date = substr($date, 0, -3);

                echo "<div class='news'>
                        <p><b style='font-family: inherit;'>date de publication:</b> $date</p>
                        <h2>$titre</h2>
                        <p>$contenu</p>
                    </div>";
            }

            echo "</div>
                </div>
                </div>";            

        } else {
            
            echo "<div class='allnews modal hidden'>
                    <button class='close-button'>&times;</button>
                    <div class='newsletter-2'>
                        <table border='2' width='430' class='news-table'>";

            while([$id, $titre, $contenu, $date]= mysqli_fetch_row($result)) {
                $date = substr($date, 0, -3);
                echo "<tr>
                        <td>
                            <p class='date-2'>$date</p>
                            <p class='title-2'>$titre</p>
                            <a class='link-4 details-2' data-number='$id' href='#'>Cliquez ici pour plus de details</a>
                        </td>
                    </tr>";
            }

            echo "</table>";

        }
            
    } else 
        die("Database connection failed!" . mysqli_error());

?>