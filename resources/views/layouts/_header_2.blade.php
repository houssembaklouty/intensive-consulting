<header id="navbar-spy" class="header header-topbar header-light">
	<div id="top-bar" class="topbar">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12">
                    <div class=" pull-left">
                        <p class="contact-info"><i class="icon-map-pin"></i> Rte Manzel Cheker Klm 1, Sfax - Tunisia</p>
                    </div>
                    <div class="pull-right">
                        <p class="contact-info"><i class="icon-phone"></i> (+216) 20 776 380</p>
                        <p class="contact-info"><i class="icon-envelope"></i> contact@intensive-consulting.com</p>
                        <!-- Module Social -->
                        <p class="contact-social">
                            <span style="color: #fff">Suivez Nous:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </p><!-- .module-social end -->
                    </div>
                   
				</div>
				<!-- .col-lg-12 -->
			</div>
		</div>
	</div>
	
	<nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container-fluid">	
            <a class="navbar-brand" href="{{ route('root_path') }}">
                <img class="logo logo-dark" src="{{ asset('assets/images/logo/intensive-consulting-logo_2.png') }}" alt="Consultivo Logo">
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

	                <!-- Pages Menu -->
	                <li class="has-dropdown">
	                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="pages">LA SOCIÉTE</a>
	                    <ul class="dropdown-menu" style="margin-top: 10px;">
	                        <li>
	                            <a href="{{ route('societe.presentations') }}"><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Présentations</a>
	                        </li>
	                        <li>
	                            <a href="{{ url('la-societe/reflexion-strategique') }} "><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Reflexion Strategique</a>
	                        </li>
	                        <li>
	                            <a href="{{ url('la-societe/offre-d-emplois-chez-consultivo-consulting') }}"><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Offres D'emplois</a>
	                        </li>        
	                        <li>
	                            <a href="{{ url('la-societe/implantation') }}"><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Implantation</a>
	                        </li>
	                    </ul>
	                </li>
	                <!-- li end -->

	                <!-- Elements Menu -->
	                <li class="has-dropdown mega-dropdown">
	                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">INDUSTRIEL</a>
	                    <ul class="dropdown-menu mega-dropdown-menu" style="margin-top: 10px;">
	                        <li>
	                            <div class="container-fluid">
	                            	<div class="row">
	                                	<div class="col-md-1"></div>
	                                    <div class="col-md-5">
	                            			<h6 style="color: #0098d9;">Conseil et assistance technique</h6>
	                            		</div>
	                            	</div>
	                                <div class="row">
	                                	<div class="col-md-1"></div>
	                                    <!-- Column #1 -->
	                                    <div class="col-md-3">
	                                        <ul style="list-style-type: none;">
	                                            <li>
	                                                <a href="{{ url('industriel/etablissement-classe') }}"><i class="fa fa-chevron-right"></i>&nbsp;Etablissement Classé</a>
	                                            </li>
	                                            <li>
	                                                <a href="{{ url('industriel/systeme-de-managment') }}"><i class="fa fa-chevron-right"></i>&nbsp;Système De Managment</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Conseil En Sûretè</a>
	                                            </li>                                 
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;ATEX</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Accompagnement API</a>
	                                            </li>                                
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->
	                                    
	                                    <!-- Column #2 -->
	                                    <div class="col-md-4">
	                                        <ul style="list-style-type: none;">
	                                            <li>
	                                                <a href="{{ url('industriel/evaluation-et-gestion-des-risques-professionnels') }}"><i class="fa fa-chevron-right" aria-hidden="true"></i>&nbsp;Évaluation Et Gestion Des Risques Professionnels</a>
	                                            </li>
	                                            <li>
	                                                <a href="{{ url('industriel/accompagnement-marquage-ce') }}"><i class="fa fa-chevron-right"></i>&nbsp;Accompagnement Marquage CE</a>
	                                            </li>

	                                            <li>
	                                                <a href="{{ url('industriel/veille-et-audit-de-conformite-reglementaire') }}"><i class="fa fa-chevron-right"></i>&nbsp;Veille Et Audit De Conformité Réglementaire</a>
	                                            </li>
	                                            <li>
	                                                <a href="{{ url('industriel/mesures-d-ambiance-et-de-penibilite') }}"><i class="fa fa-chevron-right"></i>&nbsp;Mesures D’ambiance Et De Pénibilité</a>
	                                            </li>

	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->
	                                    <div class="col-md-4">
	                                    	<center>
	                                    		<img style="margin-top: 1em" class="img-responsive" src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg">
	                                    	</center>
	                                    </div>

	                                    
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
	                    <ul class="dropdown-menu mega-dropdown-menu" style="margin-top: 10px;">
	                        <li>
	                            <div class="container-fluid">
	                            	<div class="row">
	                            	    <div class="col-md-1"></div>
	                            	       <div class="col-md-5">
	                            			<h6 style="color: #0098d9;">L'expertise au service de la performance</h6>
	                            		</div>
	                            	</div>
	                                <div class="row">

	                                	<div class="col-md-1"></div>
	                                    <!-- Column #1 -->
	                                    <div class="col-md-3">
	                                        <ul>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;ATEX</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Conseil En Sûretè</a>
	                                            </li>                                 
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Accompagnement API</a>
	                                            </li>                                
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <!-- Column #2 -->
	                                    <div class="col-md-4">
	                                        <ul>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Veille Et Audit De Conformité Réglementaire</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Mesures D’ambiance Et De Pénibilité</a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <div class="col-md-4">
	                                    	<center>
	                                    		<img style="margin-top: 1em" class="img-responsive" src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg">
	                                    	</center>
	                                    </div>
	                                    
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
	                    <ul class="dropdown-menu mega-dropdown-menu" style="margin-top: 10px;">
	                        <li>
	                            <div class="container-fluid">
	                            	<div class="row">
	                            	    <div class="col-md-1"></div>
	                            	       <div class="col-md-5">
	                            			<h6 style="color: #0098d9;">L'expertise au service de la performance</h6>
	                            		</div>
	                            	</div>

	                                <div class="row">
	                                    <!-- Column #1 -->
	                                    <div class="col-md-3">
	                                        <ul>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Démarches Et Mesure Qualité</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Gestion Des Risques</a>
	                                            </li>                                 
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Les Vigilances</a>
	                                            </li>                                
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <!-- Column #2 -->
	                                    <div class="col-md-4">
	                                        <ul>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Développement Professionnel Continu</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Accompagnement À  L’accreditation</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;L'infectiologie Et L'hygiene Hospitaliere</a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <div class="col-md-4">
	                                    	<center>
	                                    		<img style="margin-top: 1em" class="img-responsive" src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg">
	                                    	</center>
	                                    </div>
	                                    
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
	                    <ul class="dropdown-menu mega-dropdown-menu" style="margin-top: 10px;">
	                        <li>
	                            <div class="container-fluid">
	                            	<div class="row">
	                            	    <div class="col-md-1"></div>
	                            	       <div class="col-md-5">
	                            			<h6 style="color: #0098d9;">Nos formations à la une</h6>
	                            		</div>
	                            	</div>

	                                <div class="row">
	                            	    <div class="col-md-1"></div>
	                                    <!-- Column #1 -->
	                                    <div class="col-md-4">
	                                        <ul>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Recevez Le Catalogue Formation</a>
	                                            </li>
	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Nous Atous Pour Vous Former</a>
	                                            </li>

	                                            <li>
	                                                <a href="#"><i class="fa fa-chevron-right"></i>&nbsp;Catalogue Formations</a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <div class="col-md-3">
	                                    	<center>
	                                    		<img style="margin-top: 1em" class="img-responsive" src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg">
	                                    	</center>
	                                    </div>
	                                    <!-- .col-md-3 end -->

	                                    <!-- Column #2 -->
	                                    <div class="col-md-4">
	                                        <center>
	                                        	<img style="margin-top: 1em" class="img-responsive" src="https://www.cnpp.com/var/cnpp/storage/images/boutique-editions/439090-182-fre-FR/Boutique-Editions_image_menu_nav.jpg">
	                                        </center>
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


	                <div class="module module-consultation pull-left" style="margin-top: 2.5em;">
	                    <a class="btn btn--gradient btn--rounded mr-150" href="{{ route('contact') }}">NOUS CONTACTER</a>
	                </div>  
            	</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
		<!-- /.container -->	
	</nav>
</header>