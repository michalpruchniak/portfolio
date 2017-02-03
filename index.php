<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jestem początkującym front end developerem. Zapraszam do współpracy">
        <meta name="keywords" content="front end, developer, webmaster, web designer. html, js, css, php, git, gulp">
        <title>Michał Pruchniak | Front end developer | portfolio</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

          <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

          <script src="js/vendor/bootstrap.min.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script src="js/jquery.scrollTo.min.js"></script>
    </head>
    <body>
      <div id="background">
        <p id="closeMenu"><a href="javascript:void(0)">&times;</a></p>
        <ul>
          <li><a href="javascript:void(0)">O mnie</a></li>
          <li><a href="javascript:void(0)">Portfolio</a></li>
          <li><a href="javascript:void(0)">Kontakt</a></li>
        </ul>
      </div>
      <div id="main-container">
        <div class="slide container-fluid" id="first-slide">
            <nav><a href="javascript:void(0)" id="barMenu"><i class="fa fa-bars" aria-hidden="true"></i></a></span><ul><li><a href="javascript:void(0)" id="l-about">O mnie</a></li><li><a href="javascript:void(0)">Portfolio</a></li><li><a href="javascript:void(0)">Kontakt</a></li></ul></nav>
            <div id="me"><span>Michal Pruchniak</span>
            <p>Front end developer</p></div>
            <div id="arrow-bottom"><a href="javascript:void(0)"></a><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></div>
        </div>
        <div class="slide container-fluid" id="about">
          <div class="col-lg-4 hidden-md hidden-sm hidden-xs" id="about-left-side">
            <img src="img/portrait.jpg" class="img-circle">
            <div>
              <p><span>Michał Pruchniak</span></p>
              <p><span>Zainteresowania z dziedziny IT:</span> Dawniej PHP z frameworkiem Code Igniter, obecnie technologie front endowe</p>
              <p><span>Zainteresowania:</span> Street Workout, Armwrestling, piwo kraftowe, polityka i historia</p>
            </div>
          </div>
          <div class="col-lg-8 col-sm-8 col-xs-12" id="about-right-side">
            <h2 class="header">O mnie</h2>
            <p>Witajcie! Nazywam się Michał Pruchniak i jestem początkującym front end developerem. Co prawda swoją przygodę z tworzeniem stron internetowych zaczynałem od PHP, jednak obecnie staram się rozwijać w technologiach font endowych. Chętnie uczę się nowych technologii, nie z przymusu, ale dlatego, zew jest to dla mnie po prostu interesujące. Poza programowaniem lubię sport (kiedyś uprawiałem armwrestling i street workout), chociaż obecnie nie mam na to za dużo czasu oraz, o ironio, piwo kraftowe.</p>
            <h2 class="header">Umiejętności</h2>
            <div class="row" id="skills">
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/html.png" alet="HTML"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/css.png" alet="CSS3"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/js.png" alet="JS"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/jquery.png" alet="jQuery"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/bootstrap.png" alet="Bootstrap"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/sass.png" alet="SASS"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/gulp.png" alet="Gulp"></div>
              <div class="col-lg-3 col-sm-3 col-xs-3"><img src="img/tech/linux.png" alet="Linux"></div>
            </div>
          </div>
        </div>
        <div class="slide container-fluid" id="portfolio">
          <div class="container-fluid" id="portfolio-top">
          </div>
          <div class="container-fluid" id="portfolio-bottom">
              <div class="col-lg-6 col-md-6 col-xs-12 main-container">
                <div class="portfolio-container">
                  <div class="all-elements">
                    <div class="portfolio-cover" id="cover-first"></div>
                    <div class="portfolio-links"><a href="https://github.com/michalpruchniak/portfolio" target="_blanc"><i class="fa fa-github" aria-hidden="true"></i></a> <a href="#" target="_blanc"><i class="fa fa-television" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12 main-container">
                <div class="portfolio-container">
                  <div class="all-elements">
                    <div class="portfolio-cover" id="cover-second"></div>
                    <div class="portfolio-links">W przygotowaniu</div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <footer>
          <div id="kontakt" class="col-lg-5 col-sm-5 col-xs-12">
            <h2>Kontakt</h2>
            <div class="row"><i class="fa fa-phone" aria-hidden="true"></i> 666862258</div>
            <div class="row"><i class="fa fa-envelope" aria-hidden="true"></i> mpruchniak@gmail.com</div>
            <h2>Social media</h2><a href="https://www.facebook.com/profile.php?id=100003012677855" target="_blanc"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="http://www.github.com/michalpruchniak/" target="_blanc"><i class="fa fa-github" aria-hidden="true"></i></a></div>
            <div class="col-lg-7 col-sm-7 hidden-xs">
              <form method="POST" action="index.php#kontakt">
                <input type="text" name="name" placeholder="imie" id="name" class="active">
                <input type="text" name="pn" placeholder="numer telefonu" id="pn" class="active">
                <input type="text" name="mail" placeholder="mail" id="mail" class="active">
                <textarea name="message" id="message" cols="64" rows="7" placeholder="Wiadomość" class="active"></textarea>
                <p><input type="submit" value="Wyślij wiadomość"></input></p>
              </form>
            </div>
        </footer>
        <div id="footer">Michał Pruchniak &copy 2017</div>
      </div>

      <script src="js/main.js"></script>
      <script src="js/formValidator.js"></script>
      <?php
      	include("mail.php");
      ?>
    </body>
</html>
