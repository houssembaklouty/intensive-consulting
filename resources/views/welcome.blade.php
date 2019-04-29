@extends('layouts/master')

@section('_slider_homepage')
    @include('layouts/_slider')
@endsection

@section('content')

<div class="main">
    <div class="container">
        <div id="masonry-grid" class="row">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <!-- Carousel area: START -->

                <div class="col-md-4 col-xs-6">
                    <div class="ms-item ms-blue carousel slide" id="ms-carousel" data-ride="carousel" data-interval="5000">

                        <ol class="carousel-indicators">

                            <li data-target="#ms-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#ms-carousel" data-slide-to="1"></li>
                            <li data-target="#ms-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="ezxmltext-field">
                                    <p>Préparez votre <strong>plan de formation 2019</strong> avec le nouveau catalogue formation ! </p>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="ezxmltext-field">
                                    <p>Intensive <strong>certifié ISO 9001</strong></p>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="ezxmltext-field">
                                    <p><em>+ de <strong>8000 clients</strong></em></p>
                                    <p><em>nous ont fait confiance</em></p>
                                    <p><em>en 2017</em></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <a data-target="#media-popin" data-modalmedia="https://www.youtube.com/watch?v=YkVAG_g7VE0" data-toggle="modal" title="Découvrez nos formations managériales en sûreté malveillance" class="ms-item ms-video">
                        <span class="bkg" style="background-image:url(https://www.cnpp.com/var/cnpp/storage/images/contenus/blocs-de-l-accueil/video-formations-manageriales-surete-malveillance/1899348-1-fre-FR/Video-formations-manageriales-surete-malveillance.jpg )">
                            <i class="ico-play"></i>
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </span>
                        <span class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                            Découvrez nos formations managériales en sûreté malveillance</span>
                    </a> 
                </div>


                <!-- Contact us area: START -->
                <div class="col-md-4 col-xs-6">
                    <a href="{{ route('contact') }}" class="ms-item ms-green">
                        <span title="Contactez-nous" class="btn btn-link">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 2em;"></i>
                            Nous <strong>contacter</strong></span>
                    </a>
                </div>
                <!-- Contact us area: START -->

                <div class="col-md-4 col-xs-6">

                    <div class="ms-item ms-carrefour">
                        <h3>
                            <div class="ezxmltext-field">
                                Qui sommes nous ?<br>
                            </div>
                        </h3>
                        <div class="ezxmltext-field">
                            <ul style="text-align: justify;">
                                <li>Depuis sa création, Intensive consulting est réputé pour sa compétence, sa pertinence et son sérieux.</li>
                                <li>Notre équipe nos experts et nos formateurs assurent l’encadrement pédagogique et contrôlent l’équilibre entre les aspects méthodologiques et pratiques des formations.</li>
                            </ul>
                            <div class="center">

                                <figure class="ezimage-field"><img src="images/logo/intensive-consulting.png" alt="" /></figure>
                            </div>
                        </div>

                      <a href="{{ route('societe.presentations') }}">
                          <span title="En Savoir Plus" class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                            En Savoir Plus</span>
                      </a>  
                    </div>
                </div>


                <div class="col-md-4 col-xs-6">

                    <div class="ms-item">
                        <h2>
                            <div class="ezxmltext-field">Intensive consulting<br>en chiffres<br>
                            </div>
                        </h2>
                        <table>
                            <tr>
                                <td>330</td>
                                <td>collaborateurs</td>
                            </tr>
                            <tr>
                                <td>8 </td>
                                <td>délégations régionales</td>
                            </tr>
                            <tr>
                                <td>60</td>
                                <td>ans d&#039;existence</td>
                            </tr>
                        </table>

                        <a href="{{ route('societe.presentations') }}">
                            <span title="Découvrez Intensive"
                            class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                            Découvrez Intensive</span>
                        </a>

                    </div>


                </div>

                <div class="col-md-4 col-xs-6">

                    <a href="{{ url('la-societe/offre-d-emplois-chez-intensive-consulting') }}" class="ms-item ">
                        <h3>

                            <div class="ezxmltext-field">
                                Intensive recrute...<br>

                            </div>
                        </h3>

                        <div class="ezxmltext-field">
                            Votre profil nous intéresse !<br> <br>
                            <div>

                                <figure class="ezimage-field"><img src="https://www.cnpp.com/var/cnpp/storage/images/media/images/cnpp-recrute/1156571-1-fre-FR/CNPP-recrute_large.jpg" width="" height="" alt="" /></figure>
                            </div>

                        </div>

                        <span title="Consultez les offres" class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                        Consultez les offres</span>

                    </a>


                </div>


                <div class="col-md-4 col-xs-6">
                    <a data-target="#media-popin" data-modalmedia="https://www.cnpp.com/site/content/getcontentmodalvideo/88859" data-toggle="modal" title="Découvrir toutes nos activités en 3&#039;45 min" class="ms-item ms-video">
                        <span class="bkg" style="background-image:url(https://www.cnpp.com/var/cnpp/storage/images/contenus/blocs-de-l-accueil/clip-de-presentation-cnpp/1017098-4-fre-FR/Clip-de-presentation-CNPP.jpg )">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </span>
                        <span class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                        Découvrir toutes nos activités en 3&#039;45 min</span>
                    </a>
                </div>


                <div class="col-md-4 col-xs-6">

                    <a href="#" class="ms-item ms-carrefour">
                        <h3>

                            <div class="ezxmltext-field">
                                La boutique<br>Éditions<br>
                            </div>
                        </h3>

                        <div class="ezxmltext-field">
                            Découvrez les dernières nouveautés<br>
                            <div>

                                <figure class="ezimage-field"><img src="https://www.cnpp.com/var/cnpp/storage/images/media/images/nouvelles-editions-sept-2018-home-site2/1766287-1-fre-FR/nouvelles-editions-sept-2018-home-site_large.jpg" width="" height="" alt="" /></figure>
                            </div>
                        </div>

                        <span title="Accédez à la boutique en ligne" class="btn btn-link btn-sm">
                            <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                        Accédez à la boutique en ligne</span>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6">

                    <div class="ms-item">
                        <h3>
                            <div class="ezxmltext-field">
                                Un acteur multi-<br>expertises<br>
                            </div>
                        </h3>

                        <div class="ezxmltext-field">
                            <ul style="text-align: justify;">
                                <li>Intensive consulting est <strong>reconnu pour la qualité</strong> et la <strong>complémentarité</strong> de son offre : formation, certification, audit, essais...</li>
                                <li>Votre demande est <strong>étudiée par nos experts</strong> pour trouver
                            avec vous une <strong>solution personnalisée</strong>, adaptée à votre besoin..</li>
                            </ul>
                        </div>

                        <a href="#">
                            <span title="Découvrez nos expertises" class="btn btn-link btn-sm">
                                <i class="fa fa-angle-right" aria-hidden="true" style="font-size: 1.5em;"></i>
                            Découvrez nos expertises</span>
                        </a> 
                    </div>
                </div>


                <div class="col-md-4 col-xs-6">

                    <a data-target="#media-popin" data-modalmedia="/site/content/getcontentmodalvirtualvisit" data-toggle="modal" title="#" class="ms-item ms-image">
                        <span class="bkg" style="background-image:url(images/contenus/blocs-de-l-accueil/visite_virtuelle/512662-5-fre-FR/visite_virtuelle.jpg);">
                            
                        </span>
                        <h2>
                            <div class="ezxmltext-field">
                                <em>Text ...</em><br>
                            </div>
                        </h2>
                    </a>

                </div>

                <!-- Carousel area: END -->
            </div>
        </div>

    </div>
</div>

@endsection