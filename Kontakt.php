<?php 
if(isset($_POST['submit'])){
    $to = "trail.contact.us@gmail.com";
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "Serwis TRAIL formularz kontaktowy";
    $message =  "Imię:   $name\n".
                "Email:   $from\n\n".
                "Tresc wiadomosci: \n\n".
                $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    $popup = "Wiadomość została wysłana!";
    echo "<script type='text/javascript'>alert('$popup');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRAIL</title>

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/Style.css">

    <script src="./js/Jquery3.4.1.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/main.js"></script>

</head>

<body>

    <!-- ----------------------------  PASEK NAWIGACJI ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="Index.php" class="text-gray">TRAIL</a>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">Rowery</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Odzież kolarska</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Wycieczki</a>
                    </li>
                    <li class="nav-link">
                        <a href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/maciek.kuczynski.3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/kuczyn_07/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.strava.com/athletes/39388761"><i class="fab fa-strava"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  PASEK NAWIGACJI --------------------------x------------------- -->

    <!----------------------------- SEKCJA GŁÓWNA ------------------------------>
        <main>

        <!------------------------ MAIL ---------------------->

        <section class="site-title-contact">
            <div>
                <br><br><br><br><br><br><br>
                <form id="contact—form" method="post" action="">
                    <input name="name" type="text" class="form-control" placeholder="Twoje imię" required>
                    <br>
                    <input name="email" type="email" class="form-control" placeholder="Twój Email" required>
                    <br>
                    <textarea name="message" class="form-control-message" placeholder="Wiadomość" row="5" required></textarea>
                    <br>
                    <input type="submit" name="submit" class="form-control submit" value="Wyślij">
                </form>
            </div>
        </section>

        <!------------x----------- MAIL ----------x----------->

        <!-- --------------------- KARUZELA ----------------- -->

    <!-- --------------------------- STOPKA ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-down">
                <h2>O mnie</h2>
                <p>Maciej Kuczyński, zaocznie student informatyki, codziennie fan kolarstwa oraz wyścigów XC.</p>
            </div>
            <div class="follow" data-aos="fade-down">
                <h2>Obserwuj mnie</h2>
                <div>
                <a href="https://www.facebook.com/maciek.kuczynski.3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/kuczyn_07/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.strava.com/athletes/39388761"><i class="fab fa-strava"></i></a>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Maciej Kuczyński 6754
            </h4>
        </div>
    </footer>

    <!-- -------------x------------- STOPKA --------------------x------------------- -->
</body>

</html>