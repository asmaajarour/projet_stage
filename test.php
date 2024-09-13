<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vala bleu</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
      <!-- Font Awesome CDN-->
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
        <!-- Google Font -->
        <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
  
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0, 123, 255, 0.8);">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="img/vala.png" alt="Logo" width="190" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="test.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">À Propos</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="services.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ssl.html">SSL</a></li>
            <li><a class="dropdown-item" href="securiser.html">Sécurité web</a></li>
            <li><a class="dropdown-item" href="rg.html">Référencement Google</a></li>
          </ul>
        </li>
        
            <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="connexion.php">
        <i class="fa-solid fa-user"></i> Connexion
        </a>
    </li>
    </ul>


      </ul>
    </div>
  </div>
</nav>

    <!--Slider-->
 
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hébergement Web Maroc</h5>
        <p>Démarrez votre activité dès maintenant ! Lancez un site web en choisissant un hébergement web Maroc entièrement personnalisable aux prix pas chers. Choisissez un nom de domaine et obtenez un ssl gratuit.</p>
        <div class="slider-btn">
        <a href="heberweb.html" class="btn btn-1">Voir plus</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sécuriser son site WordPress</h5>
        <p>Vous êtes indécis ?
Meilleure offre d'hébergement WordPress autogéré au
Maroc, pour des performances inédites. C'est le meilleur choix pour lancer un site web en un clic</p>
        <div class="slider-btn">
        <a href="securiser.html" class="btn btn-1">Voir plus</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hébergement WordPress</h5>
        <p>Vous êtes indécis ?
Meilleure offre d'hébergement WordPress autogéré au
Maroc, pour des performances inédites. C'est le meilleur choix pour lancer un site web en un clic !</p>
        <div class="slider-btn">
        <a href="wordpress.html" class="btn btn-1">Voir plus</a>
          
        </div>
      </div>
    </div>

    


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--====================  pricing CARD  ====================-->
<h2>Trouvez le plan d'hébergement parfait pour votre site web au Maroc</h2>
<section class="card container grid">
            <div class="card__container grid">
                <!--==================== CARD 1 ====================-->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>9999
                        </div>
                        <span class="card__pricing-month">One Shot Pay</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/dahabiya.png" alt="" class="card__header-img">
                        </div>
                        
                        
                        <h1 class="card__header-title">Boutique E-Commerce</h1>
                    </header>
                    
                 <p>Développez vos chiffres d'affaires et augmentez vos ventes grâce à nos créations de sites e-commerce ultra optimisées et payez le pack en une seule fois.</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
    
                <!--==================== CARD 2 ====================-->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>399
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/fidiya.png" alt="" class="card__header-img">
                        </div>
    
                        
                        <h1 class="card__header-title">Hébergement Semi Dédié</h1>
                    </header>
                    
                  <p>Avec nos offres Semi-Dédié profitez d'un hébergement info-géré avec des performances et des ressources dédiées à un usage exclusif sans investir dans un serveur dédié</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
    
                <!--==================== CARD 3 ====================-->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>499
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/fidiya.png" alt="" class="card__header-img">
                        </div>
    
                        
                        <h1 class="card__header-title">Serveurs Dédiées</h1>
                    </header>
                    
                   <p>Découvrez nos serveurs dédiés haut de gamme et personnalisez les fonctions selon vos besoins en termes CPU, mémoire RAM, disques SSD et distributions.</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
                                <!--==================== CARD 4 ====================-->
                                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>4,17
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/nohasiya.png" alt="" class="card__header-img">
                        </div>
    
                        
                        <h1 class="card__header-title">Messagerie Professionnelle</h1>
                    </header>
                    
                   <p>Valorisez l'image de marque en optant pour un email professionnel ultra sécurisé. De meilleures options s'offrent à vous : Antivirus, antispam, rapidité, synchronisation.</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
                                <!--==================== CARD 5 ====================-->
                                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>25,95
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/nohasiya.png" alt="" class="card__header-img">
                        </div>
    
                        
                        <h1 class="card__header-title">Hébergement WordPress</h1>
                    </header>
                    
                 <p>Solution conçue pour WordPress riche en fonctionnalités: WordPress staging, stockage SSD, bande passante illimité, accélération WordPress, sauvegarde automatique, CDN…</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
                                <!--==================== CARD 6 ====================-->
                                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Dhs</span>21,24
                        </div>
                        <span class="card__pricing-month">/month</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="img/nohasiya.png" alt="" class="card__header-img">
                        </div>
    
                        
                        <h1 class="card__header-title">Hébergement Web</h1>
                    </header>
                    
                <p>Vous voulez améliorer considérablement les performances de votre site web et recevoir une tonne d'avantages supplémentaires ? Alors vous êtes au bon endroit !</p>
    
                    <button class="card__button">Choose this plan</button>
                </article>
            </div>
        </section>
            <!--==================== logos ====================-->
    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);
    </script>
    <div class="logos">
    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);
    </script>
        <h4 class="section-heading">Nos Références Clients</h4>
        <!-- <h5class="section-heading">Rejoignez notre communauté de clients et faites partie de nos success stories.</h5> -->

    <div class="logos-slide">
      <img src="img/logo1.png" alt="" srcset="">
      <img src="img/logo2.png" alt="" srcset="">
      <img src="img/logo3.png" alt="" srcset="">
      <img src="img/logo4.png" alt="" srcset="">
      <img src="img/logo5.png" alt="" srcset="">
      <img src="img/logo6.png" alt="" srcset="">
      <img src="img/logo7.png" alt="" srcset="">
      <img src="img/logo8.png" alt="" srcset="">
      <img src="img/logo9.png" alt="" srcset="">
      <img src="img/logo10.png" alt="" srcset="">

    </div>
      
        </div>

<!--==================== slider ====================-->

<section>
      <div class="row">
        
        
      </div>
      <div class="row">
        <h2 class="section-heading">Les fonctionnalitées Incluses dans le pack d’hébergeur web</h2>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-lock"></i>
              
            </div>
            <h3>Solutions Performantes</h3>
            <p>
            Nous proposons des certificats de Comodo, Geotrust et beaucoup plus, afin de vous garantir la protection ultime de votre site web et ses sous-domaines.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-sync-alt"></i>
            </div>
            <h3>Sauvegarde automatique</h3>
            <p>
              Bénéficiez d'une solution de sauvegarde automatique et quotidienne de votre site web, et faites une copie instantanée en un seul clic.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-clock"></i>
            </div>
            <h3>Temps de disponibilité</h3>
            <p>Nous garantissons à 99,9 % le temps de disponibilité de nos serveurs web et tous les composants réseau de nos datacenters.</p>
            
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-cloud"></i>
            </div>
            <h3>SCloud & Load Balancing</h3>
            <p>
            Prévoyez un trafic élevé sans contraintes d'arrêt ou de lenteur grâce à la solution du Cloud & Load Balancing.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-database"></i>
            </div>
            <h3>Serveurs Puissants</h3>
            <p>
            Doté d'une technologie nouvelle génération Xeon E5 v4 (Broadwell) et 128GB RAM DDR4. Nos serveurs sont 3X plus rapides.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
            <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Multi-Localisation</h3>
            <p>
            Des serveurs dédiés performants et plusieurs adresses IP s'offrent à vous dans plusieurs localisations : New York, Londres ...
            </p>
          </div>
        </div>
      </div>
    </section>
<!---------- footer---------->

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://web.facebook.com/valableu.ma/?_rdc=1&_rdr">
      <i class="fa-brands fa-facebook"></i>
        </a></li>
      
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.youtube.com/user/valableuagadir">
      <i class="fa-brands fa-youtube"></i>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/vala_bleu/">
      <i class="fa-brands fa-instagram"></i>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="test.php">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="apropos.html">À Propos</a></li>

    </ul>
    <p>Copyright © 2021 Vala United Solutions Ltd. All Rights Reserved.</p>
  </footer>

    
    <script src="index.js"></script>
</body>
</html>
