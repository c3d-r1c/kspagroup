@extends('layouts.master')
@section('content')
    <section id="produits" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nos produits</h2>
                <span>Produits</span>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight " data-wow-delay="0.3s">
                        <div class="icon ">
                            <i class="mdi mdi-home-automation"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/audiovisuel.png")}}">Domotique multimédia </a></h3>
                            <p>Créez une ambiance sonore unique, regardez un film d'un simple geste et ce depuis n'importe quelle pièce </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="bx bxs-door-open"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/ouvrant.png")}}" >Pilotage des Ouvrants</a></h3>
                            <p>Grâce à nos solutions, vous ouvrirez la porte de votre garage sans descendre de voiture !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon">
                            <i class="mdi mdi-ceiling-light-multiple"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/eclairage.png")}}" >Pilotages des Éclairages</a></h3>
                            <p>Allumez la lumière d'une pièce à distance ou lorsqu'une présence est détectée !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon">
                            <i class="mdi mdi-air-conditioner"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/ac.png")}}" >Climatisation et Chauffage</a></h3>
                            <p>Vous avez ouliez d'éteindre la climatisation en sortant ? Pas de problème éteingnez la depuis votre smatphone !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                        <div class="icon">
                            <i class="bx bxs-cctv"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/securite.png")}}" >Sécurité</a></h3>
                            <p>Grâce aux Alarmes, Caméras et Contrôle d’accès vous pourrez contrôler et sécuriser votre maison de n'importe oû. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
                        <div class="icon">
                            <i class="mdi mdi-home-lightning-bolt"></i>
                        </div>
                        <div class="services-content">
                            <h3><a class="lightbox" href="{{asset("images/produits/energie.png")}}">Consommations d’énergie</a></h3>
                            <p>Avoir un résumé de votre consommation d'énergie vous permettra de mieux gérer votre consommation ! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Valeurs ajoutées</h2>
                <span>Valeurs</span>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-left">
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="icon">
                                <i class="mdi mdi-security"></i>
                            </span>
                            <div class="text">
                                <h4>Sécurité accrue</h4>
                                <p>Vous, votre famille et vos biens seront protégés des voleurs et des agresseurs.</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                            <span class="icon">
                                <i class="ri-plant-line"></i>
                            </span>
                            <div class="text">
                                <h4> Économies d'énergie</h4>
                                <p>L'énergie sera utilisée uniquement au besoin. Votre maison sera moins énergivore.</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                            <span class="icon">
                                <i class="lni-laptop-phone fw-bold"></i>
                            </span>
                            <div class="text">
                                <h4>Contrôle à distance</h4>
                                <p>Vous pourrez voir tout ce qui se passe chez vous quand vous n'y êtes pas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('images/icones/mobile-phone.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-right">
                        <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                            <span class="icon">
                                <i class="mdi mdi-cog-clockwise"></i>
                            </span>
                            <div class="text">
                                <h4>Gain d’efficacité</h4>
                                <p>Certaines tâches pourront être optimisés. Vous gagnerez en efficacité</p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                            <span class="icon">
                                <i class="mdi mdi-timer-cog-outline"></i>
                            </span>
                            <div class="text">
                                <h4>Gain de temps</h4>
                                <p>L'automatisation de certaines tâches vous permettra de gagner du temps chaque jours </p>
                            </div>
                        </div>
                        <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                            <span class="icon">
                                <i class="la la-coins"></i>
                            </span>
                            <div class="text">
                                <h4>Économies d'argent</h4>
                                <p>Vous économiserez sur vos factures et prolongerez la durée de vie de vos équipements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="apropos" class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 info">
                    <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div>
                            <div class="site-heading">
                                <p class="mb-3">Qui sommes nous ?</p>
                                <h2 class="section-title">DOMOTIKLUX</h2>
                            </div>
                            <div class="content">
                                <p>
                                    Domotiklux est une entreprise de domotique filiale du groupe KISWENDSIDA SPA, qui propose
                                    des solutions innovantes pour les maisons intelligentes. Notre mission 
                                    de simplifier la vie de nos clients en leur offrant des solutions de
                                    domotique abordables et faciles à utiliser, tout en améliorant leur qualité de vie.
                                    Nous sommes convaincus que nos produits et services innovants aideront nos
                                    clients à économiser de l'énergie, à renforcer leur sécurité et à profiter d'un confort
                                    et d'un divertissement supérieurs dans leur maison.
                                    Nos produits comprennent des systèmes de contrôle intelligent pour les lumières, le
                                    chauffage, la climatisation et les appareils ménagers, ainsi que des solutions de
                                    sécurité telles que des caméras de surveillance et des détecteurs de fumée intélligents.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('images/icones/5.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <section id="nos-services" class="services section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nos services</h2>
                <span>Services</span>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInLeft" data-wow-delay="1.2s">
                        <div class="pb-2">
                            <img src="{{ asset('images/icones/operateur.png') }}" alt="" height="80" width="80">
                        </div>
                        <div class="services-header">
                            <p class="price-value">Conseils</p>
                        </div>
                        <div class="description">
                            <p class="text">
                               Nous sommes là pour vous aider à choisir les produits et services qui vous conviendront le mieux.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 active">
                    <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
                        <div class="pb-2">
                            <img src="{{ asset('images/icones/soutien-technique (2).png') }}" alt="" height="80" width="80">
                        </div>
                        <div class="services-header">
                            <p class="price-value">Assistance</p>
                        </div>
                        <div class="description">
                            <p class="text">
                                Résoudre des problèmes techniques, repondre à toutes vos questions ; nos experts sont là pour vous !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInRight" data-wow-delay="1.2s">
                        <div class="pb-2">
                            <img src="{{ asset('images/icones/presentation.png') }}" alt="" height="80" width="80">
                        </div>
                        <div class="services-header">
                            <p class="price-value">Formations</p>
                        </div>
                        <div class="description">
                            <p class="text">
                                Vous désirez en apprendre plus sur la domotique ? Nous proposons aussi des formations certifiantes.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="equipe" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Notre équipe</h2>
                <span>equipe</span>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/woman.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">ZOUNGRANA T. Edwige </a></h3>
                                <p>Fondateur et PDG</p>
                            </div>
                            <p>Responsable de la stratégie globale de l'entreprise, de la gestion des opérations, de la recherche et du développement de l'entreprise.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/man.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">KASSOGA P. Justin</a></h3>
                                <p>Directeur Général </p>
                            </div>
                            <p>
                                Ingénieur en Securité Informatique, expert en Gestion de projet et Cybersécurité.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/man.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">YILI Yives</a></h3>
                                <p>Directeur technique</p>
                            </div>
                            <p>Responsable de la conception, du développement de nos produits et services, et de la supervision de l'équipe technique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/woman.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">KASSOGA N. T Sandrine</a></h3>
                                <p>Ingénieur en Électrotechnique</p>
                            </div>
                            <p>
                            Chargée du volet Installation, Configuration, test et Mise en services de nos solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/woman.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">Olga KALONGA</a></h3>
                                <p>Ingénieure Informaticienne</p>
                            </div>
                            <p>
                                Consultante en développement web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/man.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">WANGRE W. Jean-Pierre</a></h3>
                                <p>Ingénieur Informaticien</p>
                            </div>
                            <p>
                                Expert en cablage et configuration des systemes IoT.
                            </p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section id="partnaires" class="testimonial section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nos partenaires</h2>
                <span>Partenaires</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="partnercarousel" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/1.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/2.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/3.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/4.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/5.jpg') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/6.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/7.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/8.png') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/9.jpg') }}" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src=" {{ asset('images/company-logos/10.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="cta-text">
                        <h5>Pour connaître toute la puissance de la domotique, contactez-nous dès aujourd'hui.</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 text-right">
                    <a href="#" class="btn btn-border">Appelez-nous !</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nous contacter</h2>
                <span>Contact</span>
            </div>
            <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Nom" required data-error="Veuillez saisir votre nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                            name="email" required data-error="Veuillez saisir votre email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Votre Message" rows="7"
                                            data-error="Veuillez saisir votre message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-left">
                                        <button class="btn btn-common" id="form-submit" type="submit">Envoyer</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <img class="img-fluid pt-5" src="{{ asset('images/icones/14.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
