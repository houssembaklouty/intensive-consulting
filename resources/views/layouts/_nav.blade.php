    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('root_path') }}">
                <img class="logo logo-light" src="{{ asset('assets/images/logo/intensive-consulting-logo.png') }}" alt="Consultivo Logo" style="border-radius: .3em;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                <!-- Home Menu-->
    <li class="has-dropdown active">
        <a href="{{ route('root_path') }}" class="dropdown-toggle menu-item">ACCUEIL</a>
    </li>
    <!-- li end -->

    <!-- Pages Menu -->
    <li class="has-dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="pages">LA SOCIÉTE</a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('societe.presentations') }}">Présentations</a>
            </li>
            <li>
                <a href="#">Reflexion Strategique</a>
            </li>
            <li>
                <a href="#">Offres D'emplois</a>
            </li>        
            <li>
                <a href="#">Implantation</a>
            </li>
        </ul>
    </li>
    <!-- li end -->

    <!-- Elements Menu -->
    <li class="has-dropdown mega-dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">INDUSTRIEL</a>
        <ul class="dropdown-menu mega-dropdown-menu">
            <li>
                <div class="container">
                    <div class="row">
                        <!-- Column #1 -->
                        <div class="col-md-5">
                            <ul>
                                <li>
                                    <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>Etablissement Classé</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Système De Managment</a>
                                </li>                                
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->
                        
                        <!-- Column #2 -->
                        <div class="col-md-7">
                            <ul>
                                <li>
                                    <a href="elements-accordion.html"><i class="fa fa-server"></i>Évaluation Et Gestion Des Risques Professionnels</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Accompagnement Marquage CE</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->
                        
                    </div>
                    <!-- .row end -->
                </div>
                <!-- container end -->
            </li>
        </ul>
        <!-- .mega-dropdown-menu end -->
    </li>


    <!-- Elements Menu -->
    <li class="has-dropdown mega-dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">OIL AND GAS</a>
        <ul class="dropdown-menu mega-dropdown-menu">
            <li>
                <div class="container">
                    <div class="row">
                        <!-- Column #1 -->
                        <div class="col-md-5">
                            <ul>
                                <li>
                                    <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>ATEX</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Conseil En Sûretè</a>
                                </li>                                 
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Accompagnement API</a>
                                </li>                                
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->

                        <!-- Column #2 -->
                        <div class="col-md-7">
                            <ul>
                                <li>
                                    <a href="elements-accordion.html"><i class="fa fa-server"></i>Veille Et Audit De Conformité Réglementaire</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Mesures D’ambiance Et De Pénibilité</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->
                        
                    </div>
                    <!-- .row end -->
                </div>
                <!-- container end -->
            </li>
        </ul>
        <!-- .mega-dropdown-menu end -->
    </li>

    <!-- Elements Menu -->
    <li class="has-dropdown mega-dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">SANTÉ</a>
        <ul class="dropdown-menu mega-dropdown-menu">
            <li>
                <div class="container">
                    <div class="row">
                        <!-- Column #1 -->
                        <div class="col-md-5">
                            <ul>
                                <li>
                                    <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>Démarches Et Mesure Qualité</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Gestion Des Risques</a>
                                </li>                                 
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Les Vigilances</a>
                                </li>                                
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->

                        <!-- Column #2 -->
                        <div class="col-md-7">
                            <ul>
                                <li>
                                    <a href="elements-accordion.html"><i class="fa fa-server"></i>Développement Professionnel Continu</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Accompagnement À  L’accreditation</a>
                                </li>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>L'infectiologie Et L'hygiene Hospitaliere</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->
                        
                    </div>
                    <!-- .row end -->
                </div>
                <!-- container end -->
            </li>
        </ul>
        <!-- .mega-dropdown-menu end -->
    </li>

    <!-- Elements Menu -->
    <li class="has-dropdown mega-dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">BOUTIQUE FORMATIONS</a>
        <ul class="dropdown-menu mega-dropdown-menu">
            <li>
                <div class="container">
                    <div class="row">
                        <!-- Column #1 -->
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="elements-testimonials.html"><i class="fa fa-quote-right"></i>Recevez Le Catalogue Formation</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->

                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="elements-clients.html"><i class="fa fa-user"></i>Nous Atous Pour Vous Former</a>
                                </li>                                                                 
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->

                        <!-- Column #2 -->
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="elements-accordion.html"><i class="fa fa-server"></i>Catalogue Formations</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-3 end -->
                        
                    </div>
                    <!-- .row end -->
                </div>
                <!-- container end -->
            </li>
        </ul>
        <!-- .mega-dropdown-menu end -->
    </li>





</ul>
                <div class="module-container">
                <!-- Module Consultation  -->
<div class="module module-consultation pull-left">
    <a class="btn" href="{{ route('contact') }}">NOUS CONTACTER</a>
</div>              
                    

</div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>