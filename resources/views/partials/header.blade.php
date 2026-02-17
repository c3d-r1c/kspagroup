<header id="slider-area">
  <nav id="navbar" class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
    <div class="container">
      <a href="#" class="navbar-brand"><img src="{{asset('images/domotiklux/LOGO KSPA-01.png')}}" alt=""></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="lni-menu"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#slider-area">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#produits">Nos produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#apropos">Qui sommes-nous?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#nos-services">Nos services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#equipe">Notre équipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#partenaires">Nos partenaires</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-common btn-nav page-scroll" href="#contact">Nous contacter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carousel-area">
    <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="{{asset('images/bg/bg.png')}}" alt="">
          <div class="carousel-caption text-left">
            <h3 class="wow fadeInRight" data-wow-delay="0.2s">KSPA GROUP</h1>
              <h2 class="wow fadeInRight" data-wow-delay="0.4s">Le rêve de votre maison intelligente est désormais une
                réalité!</h2>
              <h4 class="wow fadeInRight" data-wow-delay="0.6s">Maison Connectée - Informatique - Énergie</h4>
              <a href="#services" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Voir
                plus</a>
              <a href="#cta" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Contactez-nous !</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/bg/bg.png')}}" alt="">
          <div class="carousel-caption text-center">
            <h3 class="wow fadeInDown" data-wow-delay="0.3s"> Nos produits innovants pour</h3>
            <h2 class="wow bounceIn" data-wow-delay="0.6s">Une expérience domotique unique</h2>
            <h4 class="wow fadeInUp" data-wow-delay="0.9s">Contrôler, Sécuriser à distance et Réduiser les charges de
              votre maison !</h4>
            <a href="#produits" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">Voir
              plus</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/bg/bg.png')}}" alt="">
          <div class="carousel-caption text-center">
            <h3 class="wow fadeInDown" data-wow-delay="0.3s">Êtes-vous prêts pour</h3>
            <h2 class="wow fadeInRight" data-wow-delay="0.6s">Votre aventure domotique ?</h2>
            <h4 class="wow fadeInUp" data-wow-delay="0.6s">Sécurité, Économie, Eficacité et Gain de temps</h4>
            <a href="#cta" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Commencer</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</header>