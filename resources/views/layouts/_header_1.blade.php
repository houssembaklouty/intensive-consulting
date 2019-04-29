<!-- Header area: START -->
<header>
    <!-- Cookies bar area: START -->
    <!-- 
    <div class="cookie-bar" data-cookie style="display:none">
        <div class="container">
            <a href="#" class="cookie-btn btn btn-primary btn-xs" data-cookieaccept>Accepter</a>
            <p>En poursuivant votre navigation sur le site, vous acceptez l&#039;utilisation de cookies pour votre confort et pour réaliser des statistiques de visite. <a href="/Informations-legales#cookies">En savoir plus</a></p>
        </div>
    </div>
     -->

    <!-- Cookies bar area: END -->

    <div class="container">
        <div class="topbar hidden-xs">

            <!-- Account and language area: START -->
            <div class="topbar-right">

                <div class="switch">

                    <a href="#" title="Changer de langue" class="language">
                    <span><em>FR&nbsp;&nbsp;</em><img src="{{ url('images/svg/flag_fr.svg?v20') }}" alt="FLAG_FR" width="18" height="12"></span><i></i>
                </a>

                    <ul>
                        <li>
                            <a href="#" title="Anglais"><em>EN&nbsp;&nbsp;</em><img src="{{ url('images/svg/flag_uk.svg?v20') }}" alt="FLAG_UK" width="18" height="12"></a>
                        </li>
                    </ul>
                </div>

                <a href="#" title="Recherchez sur le site" class="find"><i></i>Rechercher</a>
            </div>
            <!-- Account and language area: END -->

            <!-- List and magazine area: START -->
            <div class="topbar-left">
                <a target="_blank" href="#" 
                    title="" 
                    class="magazine">
                    Magazine<span>"Face au risque"</span>
                </a>
                <a href="#" 
                    title="" 
                    class="a2p">Listes
                    <img src="{{ url('images/logo/a2p.png?v20') }}" alt="A2P">
                </a>
                <a href="#" 
                    title="Listes APSAD" 
                    class="apsad">Listes
                    <img src="{{ url('images/logo/apsad.png?v20') }}" alt="APSAD">
                </a>
            </div>
            <!-- List and magazine area: END -->

        </div>

        <!-- Navigation bar area: START -->
        <div class="navbar">
            <div class="logo">
                <h1 class="hidden">Intensive consulting</h1>

                <a href="/" title="Revenir à la page d'accueil">
                <img src="{{ url('images/logo/intensive-consulting.png') }}" alt="Intensive consulting logo" class="hidden-xs" style="margin-top: 10px;">
                <span class="hide">Intensive consulting</span>

                <img src="{{ url('images/logo/intensive-consulting.png') }}" alt="Intensive consulting logo" class="visible-xs">
                <span class="hide">Intensive consulting</span>
            </a>
            </div>

            <div class="claim">
                <div class="ezxmltext-field">
                    <p class="h1">Prévention et maîtrise des risques</p>
                </div>
            </div>

            <div class="menu-btn visible-xs">
                Menu <img src="{{ url('images/icon/menu.png') }}">
            </div>
            <a href="#" title="Recherchez sur le site" class="find visible-xs">
                Rechercher <img src="{{ url('images/icon/search.png') }}">
            </a>

        </div>
        <!-- Navigation bar area: END -->

    </div>

    <!-- Big menu area: START -->
    <div class="menu hidden-xs">
        <nav class="container" role="navigation">
            <ul>
                <li style="margin-left: 10em;">
                    <a href="{{ route('societe.presentations') }}" title="LA SOCIÉTE">
                        LA SOCIÉTE
                        <span class="caret"></span></a>
                    <div class="sousmenu">
                        <div class="container">
                            <div class="row">
                                <div class="clearfix col-md-7">
                                    <div class="h3">Intensive consulting</div>

                                    <ul class="col-xs-6">
                                        <li>
                                            <a href="{{ route('societe.presentations') }}" title="Présentations">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i> 
                                            Présentations
                                        </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('la-societe/reflexion-strategique') }}" title="Reflexion Strategique">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i> 
                                            Reflexion Strategique
                                        </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('la-societe/offre-d-emplois-chez-intensive-consulting') }}" title="Offres D'emplois">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i> 
                                            Offres D'emplois
                                        </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('la-societe/implantation') }}" title="Implantation">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i> 
                                            Implantation
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 autopromo">
                                    <a href="/Etude-et-experimentation/Comportement-au-feu" title="">
                                            <img src="https://www.cnpp.com/var/cnpp/storage/images/etude-et-experimentation/438949-6-fre-FR/Etude-et-experimentation_image_menu_nav.jpg"
                                            alt=""/>
                                    </a>

                                    <a href="/Etude-et-experimentation/Modelisation" title="">
                                            <img src="https://www.cnpp.com/var/cnpp/storage/images/etude-et-experimentation/438951-6-fre-FR/Etude-et-experimentation_image_menu_nav.jpg"
                                            alt=""/>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#" title="Boutique Éditions">
                        INDUSTRIEL
                        <span class="caret"></span></a>
                    <div class="sousmenu">
                        <div class="container">
                            <div class="row">
                                <div class="clearfix col-md-7">
                                    <div class="h3">Conseil et assistance technique</div>

                                    <ul class="col-xs-5">
                                        <li>
                                            <a href="{{ url('industriel/etablissement-classe') }}" title="Etablissement Classé">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Etablissement Classé
                                        </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('industriel/systeme-de-managment') }}" title="Système De Managment">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Système De Managment
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Conseil En Sûretè">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Conseil En Sûretè
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#" title="ATEX">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            ATEX
                                        </a>
                                        </li>
                                    </ul>
                                    <ul class="col-xs-7">
                                        
                                        <li>
                                            <a href="#" title="Accompagnement API">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Accompagnement API
                                        </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ url('industriel/evaluation-et-gestion-des-risques-professionnels') }}" title="Évaluation Et Gestion Des Risques Professionnels">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Évaluation Et Gestion Des Risques Professionnels
                                        </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#" title="Accompagnement Marquage CE">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Accompagnement Marquage CE
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Veille Et Audit De Conformité Réglementaire">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Veille Et Audit De Conformité Réglementaire
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Mesures D’ambiance Et De Pénibilité">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Mesures D’ambiance Et De Pénibilité
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 autopromo">
                                    <img src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg" alt="catalogue CNPP éditions 2018" />

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#" title="Boutique Éditions">
                        OIL AND GAS
                        <span class="caret"></span></a>
                    <div class="sousmenu">
                        <div class="container">
                            <div class="row">
                                <div class="clearfix col-md-7">
                                    <div class="h3">L'expertise au service de la performance</div>

                                    <ul class="col-xs-5">
                                        <li>
                                            <a href="#" title="ATEX">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            ATEX
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Conseil En Sûretè">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Conseil En Sûretè
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Accompagnement API">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Accompagnement API
                                        </a>
                                        </li>
                                    </ul>
                                    <ul class="col-xs-7">

                                        <li>
                                            <a href="#" title="Veille Et Audit De Conformité Réglementaire">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Veille Et Audit De Conformité Réglementaire
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Mesures D’ambiance Et De Pénibilité">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Mesures D’ambiance Et De Pénibilité
                                        </a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="col-md-5 autopromo">
                                    <img src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg" alt="catalogue CNPP éditions 2018" />

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#" title="Boutique Éditions">
                        SANTÉ
                        <span class="caret"></span></a>
                    <div class="sousmenu">
                        <div class="container">
                            <div class="row">
                                <div class="clearfix col-md-7">
                                    <div class="h3">L'expertise au service de la performance</div>

                                    <ul class="col-xs-5">
                                        <li>
                                            <a href="#" title="Démarches Et Mesure Qualité">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Démarches Et Mesure Qualité
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Gestion Des Risques">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Gestion Des Risques
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Les Vigilances">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Les Vigilances
                                        </a>
                                        </li>
                                    </ul>

                                    <ul class="col-xs-7">

                                        <li>
                                            <a href="#" title="Développement Professionnel Continu">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Développement Professionnel Continu
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="Accompagnement À L’accreditation">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Accompagnement À L’accreditation
                                        </a>
                                        </li>

                                        <li>
                                            <a href="#" title="L'infectiologie Et L'hygiene Hospitaliere">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            L'infectiologie Et L'hygiene Hospitaliere
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 autopromo">
                                    <img src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg" alt="catalogue CNPP éditions 2018" />

                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#" title="Boutique Formations">Boutique Formations<span class="caret"></span></a>
                    <div class="sousmenu">
                        <div class="container">
                            <div class="row">
                                <div class="clearfix col-md-7">
                                    <div class="h3">Nos formations à la une</div>

                                    <ul class="col-xs-6">
                                        <li>
                                            <a href="#" title="Promotions">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Promotions
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Nos atouts pour vous former">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Nos atouts pour vous former
                                        </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Catalogue Formations">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            Catalogue Formations
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-5 autopromo">
                                    <a href="#" title="">
                                        <img src="https://www.cnpp.com/var/cnpp/storage/images/boutique-formations/439154-97-fre-FR/Boutique-Formations_image_menu_nav.jpg"
                                                             alt=""/>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </div>
    <!-- Big menu area: END -->

</header>
<!-- Header area: END -->