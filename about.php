<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">

    
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
          <a class="nav-link"  href="test.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">À Propos</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/about1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>A propos de vala bleu</h5>
       
      </div>
    </div>
<!--why choose us -->
    <div class="container">
    <div class="text-center mb-2-8 mb-lg-6">
        <h2 class="display-18 display-md-16 display-lg-14 font-weight-700">Pourquoi   <strong class="text-primary font-weight-700">vala bleu ?</strong></h2>
        <span>VALA BLEU : Un fournisseur de référence</span>
    </div>
    <div class="row align-items-center">
        <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
            <div class="pr-md-3">
                <div class="text-center text-sm-right mb-2-9">
                    <div class="mb-4">
                        <img src="img/about2.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Une assistance réactive</h4>
                    <p class="display-30 mb-0">Le support client de Vala est particulièrement réactif et dispose d'une équipe dédiée exclusivement pour répondre à toutes vos questions générales et techniques.</p>
                </div>
                <div class="text-center text-sm-right">
                    <div class="mb-4">
                        <img src="img/about5.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">La qualité du service</h4>
                    <p class="display-30 mb-0">Faites confiance à notre expertise pour choisir l'hébergement web idéal pour votre projet. Nos équipes sont disponibles pour vous guider dans le choix du plan le plus adapté à vos besoins et vous assister dans vos premiers pas sur le web. </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="why-choose-center-image">
                <img src="img/about3.png" alt="..." class="rounded-circle">
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="pl-md-3">
                <div class="text-center text-sm-left mb-2-9">
                    <div class="mb-4">
                        <img src="img/about6.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Sécurité et performance</h4>
                    <p class="display-30 mb-0">La société Vala Bleu dispose uniquement de serveurs fiables, rapide de dernière génération. Bénéficiez de plus de sécurité et de plusieurs backup effectuées automatiquement.</p>
                </div>

                <div class="text-center text-sm-left">
                    <div class="mb-4">
                        <img src="img/about4.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Innovation permanente</h4>
                    <p class="display-30 mb-0">Dans le but de toujours proposer ce qu'il y a de meilleur à nos clients, nous mettons à jour nos serveurs et ajoutons des fonctionnalités et des options sur tous nos produits.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
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
</body>
</html>