@extends('layouts/master')

@section('content')

<div class="masthead slide">
    <div class="item active" style="background-image: url( {{ config('app.url') }}/images/groupe/438374-3-fre-FR/Groupe.jpg );">
        <div class="container">
            <div class="h1">Intensive consulting</div>
            <div class="h3">répond à vos problématiques</div>
        </div>
    </div>
</div>


<div class="main">
    <div class="container">

        <nav class="hidden-xs hidden-sm large-nav">
            <ul>
                <li class="maison"><a href="/" title="Accueil La societe">
                    <i class="fa fa-home" style="font-size: 1.5em;"></i>
                    <span>Accueil</span></a>
                </li>
            </ul>
        </nav>

        <nav class="visible-xs visible-sm small-nav">
            <ul>
                <li>
                    <a href="#" title="Menu Groupe" class="maison"><i></i>Menu Groupe</a>
                    <ul>

                        <li><a href="/" title="Accueil societe">Accueil societe</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>

        <!-- contact page: START -->
        <div class="row content">
            <article>
                <div class="row details">
                    <p>
                        <center>
                            <div class="ezxmltext-field">
                                <a name="eztoc1_1" id="eztoc1_1"></a>
                                <h1 class=""> Pour toutes questions ou informations ? N'hésitez pas à nous contacter.</h1>
                            </div>
                            L’équipe de <strong>Intensive consulting</strong> est en mesure de vous conseiller et vous offrira une réponse complète dans les plus brefs délais.
                        </center> <br> <br>
                    </p>

                    <form method="post" action="" novalidate="novalidate">

                        <div class="col-md-12">
                            <section>
                                <div class="h4">Vos détails</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <section>
                                            <div class="form-group " data-field="last_name">
                                                <label for="formContact_last_name" class="sr-only">Nom et Prénom*</label>
                                                <input type="text" id="formContact_last_name" name="formContact[last_name]" required="required" placeholder="Nom et Prénom*" class="form-control input-lg" />
                                            </div>                                            
                                        </section>
                                    </div>
                                    <div class="col-md-6">
                                        <section>
                                            <div class="form-group " data-field="phone">
                                                <label for="formContact_phone" class="sr-only">Téléphone*</label>
                                                <input type="text" id="formContact_phone" name="formContact[phone]" placeholder="Téléphone*" class="form-control input-lg" />

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <section>

                                            <div class="form-group " data-field="email">
                                                <label for="email" class="sr-only">Email*</label>
                                                <input type="email" id="email" name="email" required="required" placeholder="Email*" class="form-control input-lg" />
                                        </section>
                                    </div>
                                </div>
                            </section>

                        </div>

                        <div class="col-md-12">
                            <section>
                                <div class="h4">Votre message</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <section>

                                            <div class="form-group" data-field="objet">
                                                <label for="objet" class="sr-only">Objet*</label>
                                                <select id="objet" name="objet" placeholder="Objet*" class="form-control input-lg" data-id="objet">
                                                    <option selected="selected" disabled="disabled">Objet*</option>
                                                    <option disabled="disabled">-------------------</option>
                                                    <option value="Recevez le catalogue de formation">Recevez le catalogue de formation</option>
                                                    <option value="Documents">Documents</option>
                                                    <option value="Réclamation">Réclamation</option>
                                                    <option value="Offre d'emploi">Offre d'emploi</option>
                                                    <option value="Autre">Autre</option>
                                                </select>
                                            </div>

                                            <div class="form-group " data-field="message">
                                                <label for="message" class="sr-only">Message*</label>
                                                <textarea id="message" name="message" required="required" placeholder="Message*" class="form-control input-lg" rows="9"></textarea>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-12">
                            <section>
                                <div class="form-group" data-field="send">
                                    <button id="submit" name="submit" class="btn btn-primary btn-lg">
                                        ENVOYER
                                    </button>
                                </div>
                            </section>
                        </div>
                    </form>

                </div>
            </article>
        </div>
        <!-- contact page: END -->

    </div>
</div>

<!-- #contact1 end -->
<!-- Google maps
============================================= -->
<section class="google-maps pb-0 pt-0" style="margin-top: 7em;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
				@include('maps/map')
            </div>
        </div>
    </div>
</section>

<!-- Contact Info
============================================= -->
<section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
    <div class="container">
        <div class="row">
        <center>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 2em;"></i> Notre Adresse</h3>
                    <p>Rte Manzel Cheker Klm 1,</p>
                    <p>Sfax - Tunisia.</p>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 2em;"></i> Notre Email(s)</h3>
                    <p>contact@intensive-consulting.tn</p>
                    <p>info@intensive-consulting.tn</p>
                    <a class="link--styled" href="mailto:contact@intensive-consulting.tn">Envoyer Un Message</a>
                </div>
            </div>
            <!-- .col-lg-4 end -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact--info">
                    <h3><i class="fa fa-phone" aria-hidden="true" style="font-size: 2em;"></i> Téléphone(s)</h3>
                    <p>(+216) 20 776 380</p>
                    <p>(+216) 20 776 380</p>
                </div>
            </div>
            <!-- .col-lg-4 end -->
        </center>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contactInfo end -->

@endsection