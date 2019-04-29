<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="" />
    <title>Intensive consulting | bureau d’études – Audits – Conseils | en Sfax, Tunisie</title>
    <meta name="description" content="">

    <meta name="keywords" content="">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="cnpp.com" />
    <meta property="og:url" content="https://www.cnpp.com" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:image" content="" />
    <meta property="og:image:height" content="310" />
    <meta property="og:image:width" content="310" />
    <meta property="og:image:type" content="image/png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://www.cnpp.com/" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/3669e85.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/0c6643d.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/0afbf97.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/9757d73.css') }}" media="print" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="fb-root"></div>
    <div class="site-overlay">
        <span class="ico-cross-white"></span>
    </div>

    <div id="wrapper">

        <!-- Search box area: START -->
        <div class="recherche">
            <div class="container">
                <form class="form-inline" role="search" data-global-search action="#">
                    <div class="form-group">
                        <label for="search" class="sr-only">Que cherchez vous ?</label>
                        <input type="text" class="form-control" id="search" data-global-search-text autocomplete="off" placeholder="Que cherchez vous ?">
                        <button type="submit" class="btn btn-search pull-right" data-global-search-button>
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span class="sr-only">Rechercher</span>
                        </button>
                    </div>

                    <input type="hidden" value="/content/search" data-redirect-search/>
                    <input type="hidden" value="/content/location/2" data-target-url/>

                </form>
                <a href="#" title="Fermer" class="close-search">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <!-- Search box area: END -->

        @include('layouts/_header_1')

        @yield('_slider_homepage')

        @yield('content')

        <!-- Footer area: START -->
        <footer>
            <!-- Footer Accompagny area: START -->
            <div class="accompagne">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 center">
                            <h4>Intensive consulting <strong>accompagne</strong></h4>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                            <i class="fa fa-fire" aria-hidden="true" style="font-size: 2.5em; margin-right: .5em; background-color: #fff; color: #0098d9; padding: .2em .3em; border-radius: .6em; text-align: center;"></i>
                            <span>Incendie <br>Explosion</span>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                            <i class="fa fa-unlock-alt" aria-hidden="true" style="font-size: 2.5em; margin-right: .5em; background-color: #fff; color: #0098d9; padding: .2em .3em; border-radius: .6em;"></i>
                            <span>Sûreté <br>Malveillance</span>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="ico-environnement"></div>
                            <center>
                            <i class="fa fa-recycle" aria-hidden="true" style="font-size: 2.2em; margin-right: .5em; background-color: #fff; color: #0098d9; padding: .3em .2em; border-radius: .6em;"></i>
                            <span>Atteintes <br>à l'environnement</span>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="ico-risques"></div>
                            <center>
                            <i class="fa fa-exclamation-triangle" aria-hidden="true" style="font-size: 2.2em; margin-right: .5em; background-color: #fff; color: #0098d9; padding: .3em .2em; border-radius: .6em;"></i>
                            <span>Risques <br>professionnels</span>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Accompagny area: END -->

            <!-- Footer Networks area: START -->
            <div class="reseaux">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 newsletter-form">
                            <h5>Accès à la Newsletter</h5>
                            <p>Recevez mensuellement notre newsletter Risques et News</p>

                            <form class="form-inline" action="" method="POST" role="form" id="newsletter">
                                <div class="form-group">
                                    <label class="sr-only" for="email">Votre E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre@Email.com" data-newsletter-input autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-submit" data-newsletter-submit>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </button>
                                <div class="help-block" data-newsletter-success style="display: none">Votre inscription a bien été enregistrée</div>
                                <div class="help-block" data-newsletter-alreadyRegistered style="display: none">Vous êtes déjà inscrit.</div>
                            </form>
                        </div>

                        <div class="col-sm-6">
                            <h5>Suivez Intensive Consulting</h5>
                            <ul>
                                <li style="padding-right: 30px;">
                                    <a target="_blank" href="https://fr.linkedin.com/company/#" title="LinkedIn"
                                        style="font-size: 2rem; line-height: 2.8; padding:.1em 1em; background-color: #1c6fb0; border-radius:1.7em;">
                                        <i class="fa fa-linkedin" aria-hidden="true" style="font-size: 1.3em;margin-top: 15px;"></i>
                                    </a>
                                </li>
                                <li style="padding-right: 30px;">
                                    <a target="_blank" href="https://twitter.com/#" title="Twitter"
                                        style="font-size: 2rem; line-height: 2.8; padding:.1em .9em; background-color: #50b9e6; border-radius:1.7em;">
                                        <i class="fa fa-twitter" aria-hidden="true" style="font-size: 1.3em;margin-top: 15px;"></i>
                                    </a>
                                </li>
                                <li style="padding-right: 30px;">
                                    <a target="_blank" href="https://www.facebook.com/company/#" title="Facebook"
                                        style="font-size: 2rem; line-height: 2.8; padding:.1em 1.1em; background-color: #1c6fb0; border-radius:1.7em;">
                                        <i class="fa fa-facebook" aria-hidden="true" style="font-size: 1.3em;margin-top: 15px;"></i>
                                    </a>
                                </li>
                                <li>
                                <li style="padding-right: 30px;">
                                    <a target="_blank" href="https://www.youtube.com/channel/#" title="Youtube"
                                        style="font-size: 2rem; line-height: 2.8; padding:.1em .9em; background-color: #da0000; border-radius:1.7em;">
                                        <i class="fa fa-youtube" aria-hidden="true" style="font-size: 1.3em;margin-top: 15px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Networks area: END -->

            <!-- Footer Links area: START -->
            <div class="links">
                <div class="container">
                    <div class="row list">

                        <div class="col-md-3">
                            <div itemscope itemtype="https://schema.org/LocalBusiness">

                                <span itemprop="name">INTENSIVE CONSULTING</span>
                                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <span itemprop="streetAddress">Route Manzel Cheker Klm 1<br> Sfax - Tunisia</span><br>
                                    <span itemprop="postalCode">Code postal: </span>&nbsp;<span itemprop="addressLocality">*****</span><br>
                                    <span itemprop="addressRegion"></span>
                                </div>
                                Tél&nbsp;: <span itemprop="telephone">(+216) 20 776 380 </span><br>
                            </div>
                            <ul class="info">
                                <li><a href="/Informations-legales" title="Informations légales">Informations légales</a></li>
                                <li><a href="/Foire-aux-questions" title="Foire aux questions">Foire aux questions</a></li>
                                <li><a href="/Liens-utiles" title="Liens utiles">Liens utiles</a></li>
                                <li><a href="/Documentations" title="Documentations">Documentations</a></li>
                                <li><a href="/Reclamation" title="Réclamation">Réclamation</a></li>
                                <li><a href="/Glossaire" title="Glossaire">Glossaire</a></li>
                                <li><a href="/Telechargements-gratuits" title="Téléchargements gratuits">Téléchargements gratuits</a></li>
                                <li><a href="/content/view/sitemap/2" title="Plan du site">Plan du site</a></li>
                            </ul>
                            <div class="mentions">
                                Intensive-consulting.tn ©&nbsp;2019&nbsp;Tous droits réservés.
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5><a href="#" title="LA SOCIÉTE">LA SOCIÉTE</a></h5>
                                    <ul>
                                        <li><a href="#" title="Présentations">Présentations</a></li>
                                        <li><a href="#" title="Reflexion Strategique">Reflexion Strategique</a></li>
                                        <li><a href="#" title="Offres D'emplois">Offres D'emplois</a></li>
                                        <li><a href="#" title="Implantation">Implantation</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5><a href="#" title="INDUSTRIEL">INDUSTRIEL</a></h5>
                                    <ul>
                                        <li><a href="#" title="Veille et audit de conformité réglementaire">Veille et audit de conformité réglementaire</a></li>
                                        <li><a href="#" title="Etablissement Classé">Etablissement Classé</a></li>
                                        <li><a href="#" title="Système De Managment">Système De Managment</a></li>
                                        <li><a href="#" title="ATEX">ATEX</a></li>
                                        <li><a href="#" title="Conseil En Sûretè">Conseil En Sûretè</a></li>
                                        <li><a href="#" title="Accompagnement API">Accompagnement API</a></li>
                                        <li><a href="#" title="Évaluation Et Gestion Des Risques Professionnels">Évaluation Et Gestion Des Risques Professionnels</a></li>
                                        <li><a href="#" title="Accompagnement Marquage CE">Accompagnement Marquage CE</a></li>
                                        <li><a href="#" title="Veille Et Audit De Conformité Réglementaire">Veille Et Audit De Conformité Réglementaire</a></li>
                                        <li><a href="#" title="Mesures D’ambiance Et De Pénibilité">Mesures D’ambiance Et De Pénibilité</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5><a href="#" title="OIL AND GAS">OIL AND GAS</a></h5>
                                    <ul>
                                        <li><a href="#" title="ATEX">ATEX</a></li>
                                        <li><a href="#" title="Conseil En Sûretè">Conseil En Sûretè</a></li>
                                        <li><a href="#" title="Accompagnement API">Accompagnement API</a></li>
                                        <li><a href="#" title="Veille Et Audit De Conformité Réglementaire">Veille Et Audit De Conformité Réglementaire</a></li>
                                        <li><a href="#" title="Mesures D’ambiance Et De Pénibilité">Mesures D’ambiance Et De Pénibilité</a></li>
                                    </ul>
                                </div>


                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <h5><a href="#" title="SANTÉ">SANTÉ</a></h5>
                                    <ul>
                                        <li><a href="#" title="Démarches Et Mesure Qualité">Démarches Et Mesure Qualité</a></li>
                                        <li><a href="#" title="Gestion Des Risques">Gestion Des Risques</a></li>
                                        <li><a href="#" title="Les Vigilances">Les Vigilances</a></li>
                                        <li><a href="#" title="Développement Professionnel Continu">Développement Professionnel Continu</a></li>
                                        <li><a href="#" title="Accompagnement À L’accreditation">Accompagnement À L’accreditation</a></li>
                                        <li><a href="#" title="L'infectiologie Et L'hygiene Hospitaliere">L'infectiologie Et L'hygiene Hospitaliere</a></li>
                                    </ul>
                                </div>
                                 
                                <div class="col-md-4">
                                    <h5><a href="#" title="BOUTIQUE FORMATIONS">BOUTIQUE FORMATIONS</a></h5>
                                    <ul>
                                        <li><a href="#" title="Recevez Le Catalogue Formation">Recevez Le Catalogue Formation</a></li>
                                        <li><a href="#" title="Nous Atous Pour Vous Former">Nous Atous Pour Vous Former</a></li>
                                        <li><a href="#" title="Catalogue Formations">Catalogue Formations</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Links area: END -->

            <!-- Baseline SEO area: START -->
            <p></p>
            <!-- Baseline SEO area: END -->

        </footer>
        <!-- Footer area: END -->

    </div>

    <!-- Top menu area: START -->
        @include('layouts/_nav_mobile')
    <!-- Top menu area: END -->

    <script type="text/javascript" src="{{ asset('assets/js/e8b4d59.js?v20') }}"></script>

    <!-- Page script area: START -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script>
        window.jQuery || document.write('<script type="text/javascript" src="{{ asset("assets/js/jquery-1.11.2.min.js") }}"><\/script>')
    </script>

    <script type="text/javascript" src="{{ asset('assets/js/bfeb7d9.js') }}" charset="utf-8"></script>

    <!-- Page script area: END -->

    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KXVNT9"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-KXVNT9');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript" src="{{ asset('assets/js/6bfffc5.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/e78c830.js') }}"></script>

    <script type="text/javascript">
        // Default reihenfolge der Buttons festlegen:
        $.fn.socialSharePrivacy.settings.order = ['facebook', 'gplus', 'twitter', 'linkedin', 'viadeo'];
        $.fn.socialSharePrivacy.settings.path_prefix = 'socialshareprivacy/';
    
        $(document).ready(function () {
            $('.share').socialSharePrivacy();
        });
    </script>
    <div class="modal fade" id="media-popin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div id="media-popin-content">
                </div>
                <a href="#media-popin" title="Fermer" class="close-search" data-dismiss="modal" data-modalmediaclose></a>
            </div>
        </div>
    </div>
    <div class="modal fade confirm-basket" id="confirm-basket" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog container">
            <div class="modal-content" id="confirm-basket-content"></div>
        </div>
    </div>
    <a href="#" title="Haut de page" class="btn btn-up">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>

</body>

</html>