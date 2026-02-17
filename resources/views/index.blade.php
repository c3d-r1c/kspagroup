@extends('layouts.master')
@section('content')
    <section id="produits" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nos Domaines d'Expertise</h2>
                <span>Expertise</span>
            </div>
            <div class="row">
                <!-- Informatique (IT) -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lni-laptop-phone"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Informatique (IT)</a></h3>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-home"></i> Résidentiel</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Assistance informatique à domicile</li>
                                    <li>Installation et sécurisation Wi-Fi</li>
                                    <li>Protection des ordinateurs et smartphones</li>
                                    <li>Formations de base</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-domain"></i> Entreprises</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Audit du système informatique existant</li>
                                    <li>Mise en place de réseaux LAN / Wi-Fi</li>
                                    <li>Solutions cloud & Cybersécurité</li>
                                    <li>Support et maintenance IT externalisés</li>
                                    <li>Formations du personnel</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-factory"></i> Industries</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Gestion de projets IT</li>
                                    <li>Sécurisation des infrastructures critiques</li>
                                    <li>Supervision des serveurs et réseaux</li>
                                    <li>Plans de continuité (PCA/PRA)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Énergie -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon">
                            <i class="mdi mdi-lightning-bolt"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Énergie</a></h3>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-home"></i> Résidentiel</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Kits solaires domestiques</li>
                                    <li>Onduleurs et batteries de secours</li>
                                    <li>Optimisation de la consommation</li>
                                    <li>Maintenance installations solaires</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-domain"></i> Entreprises</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Études énergétiques</li>
                                    <li>Systèmes solaires hybrides</li>
                                    <li>Groupes électrogènes automatisés</li>
                                    <li>Monitoring de consommation</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-factory"></i> Industries</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Centrales solaires industrielles</li>
                                    <li>Systèmes de stockage grande capacité</li>
                                    <li>Sécurisation énergétique critique</li>
                                    <li>Maintenance préventive</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maison Connectée / Smart Building -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon">
                            <i class="mdi mdi-home-automation"></i>
                        </div>
                        <div class="services-content">
                            <h3><a href="#">Maison Connectée / Smart Building</a></h3>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-home"></i> Résidentiel</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Automatisation éclairage et climatisation</li>
                                    <li>Gestion intelligente de l’énergie</li>
                                    <li>Vidéosurveillance et alarmes connectées</li>
                                    <li>Pilotage à distance via smartphone</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-domain"></i> Entreprises</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Contrôle d’accès & Vidéosurveillance</li>
                                    <li>Gestion éclairage et climatisation</li>
                                    <li>Automatisation des bâtiments</li>
                                </ul>
                            </div>

                            <div class="sub-service-box text-left">
                                <h5 class="mt-3 text-violet"><i class="mdi mdi-factory"></i> Industries</h5>
                                <ul style="list-style-type: disc; padding-left: 20px;">
                                    <li>Sécurité avancée (IP, périmétrique)</li>
                                    <li>Supervision centralisée équipements</li>
                                    <li>Automatisation énergétique</li>
                                    <li>Intégration IT + énergie + sécurité</li>
                                </ul>
                            </div>
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
                        <img src="{{ asset('images/icones/LOGO KSPA-01.png') }}" alt="">
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
                                <h2 class="section-title">KSPA GROUP</h2>
                            </div>
                            <div class="content">
                                <p>
                                    KSPA GROUP est une entreprise burkinabè créée en 2024, spécialisée dans les solutions de
                                    maison connectée, les services informatiques et la gestion intelligente de l’énergie.
                                    Basée à Ouagadougou, KSPA GROUP accompagne les particuliers, les entreprises et les
                                    promoteurs dans la conception, l’installation et la maintenance de systèmes
                                    technologiques fiables, évolutifs et performants.
                                </p>
                                <p>
                                    Nous intervenons au cœur de la transformation numérique des habitats et des
                                    infrastructures, en proposant des solutions innovantes qui améliorent le confort, la
                                    sécurité, la performance énergétique et la connectivité.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('images/icones/g2.gif') }}" alt="">
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
                                Nous sommes là pour vous aider à choisir les produits et services qui vous conviendront le
                                mieux.
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
                                Résoudre des problèmes techniques, repondre à toutes vos questions ; nos experts sont là
                                pour vous !
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
                                Vous désirez en apprendre plus sur la domotique ? Nous proposons aussi des formations
                                certifiantes.
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
                            <img class="img-fluid" src="{{ asset('images/icones/man.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">KASSOGA P. Justin</a></h3>
                                <p>CEO KSPA GROUP</p>
                            </div>
                            <p>Home Automation Expert (Smart Home), Certified ISO/IEC 27001 LI, Certified in Digital Money,
                                Strategy, Digital Transformation & Data Governance Consultant | Cybersecurity & Banking
                                Innovation Expert</p>
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
                                <h3><a href="#">OUEDRAOGO Franck</a></h3>
                                <p>Directeur Technique</p>
                            </div>
                            <p>
                                Expert en Réseaux Informatiques et Cybersécurité, Responsable de la conception, du
                                développement de nos produits et services, et de la supervision de l'équipe technique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="{{ asset('images/icones/woman.png') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="info-text">
                                <h3><a href="#">KASSOGA N. T Sandrine</a></h3>
                                <p>Ingénieur de Conception en Electromécanique</p>
                            </div>
                            <p>
                                Experte chargée du volet Installation, Configuration, test et Mise en services de nos
                                solutions de Domotique (Smart Home, Maison Connectée et Intelligente)
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
                                <h3><a href="#">TAPSOBA Cedric</a></h3>
                                <p>Ingénieur Informaticien</p>
                            </div>
                            <p>
                                Consultant Expert en développement web et Internet des Objets (IoT).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partenaires" class="testimonial section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nos partenaires</h2>
                <span>Partenaires</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="partnercarousel" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/SONOFF-logo.png') }}" alt="SONOFF">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/MOES-logo-3.jpg') }}" alt="MOES">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/Xiaomi-logo-1536x864.png') }}" alt="XIAOMI">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/AQARA.png') }}" alt="AQARA">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/Somfy_logo.svg.png') }}" alt="SOMFY">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/Fibaro-Logo.png') }}" alt="FIBARO">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/Broadlink-Logo.png') }}" alt="BROADLINK">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/KOOGEEK.png') }}" alt="KOOGEEK">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('images/company-logos/Orvibo.webp') }}" alt="ORVIBO">
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
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom"
                                            required data-error="Veuillez saisir votre nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                            required data-error="Veuillez saisir votre email">
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
                    <img class="img-fluid pt-5" src="{{ asset('images/icones/loader.gif') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection