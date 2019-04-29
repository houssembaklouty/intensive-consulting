@extends('layouts/master')

@section('content')

<div class="masthead slide">
    <div class="item active" style="background-image: url( {{ config('app.url') }}/images/groupe/438374-3-fre-FR/Groupe.jpg );">
        <div class="container">
            <div class="h1"> La societe</div>
            <div class="h3"> Intensive consulting est un bureau d’études – <br> Audits – Conseils – et Formations</div>
        </div>
    </div>
</div>

<div class="main">
    <div class="container">

        <nav class="hidden-xs hidden-sm large-nav">
            <ul>
                <li class="maison">
                    <a title="Accueil La societe" href="/"> Accueil</a>
                </li>
                <li>
                    <a href="{{ route('societe.presentations') }}" title="Présentation Intensive" class="active">Présentation Intensive</a>
                </li>
                <li>
                    <a href="{{ url('la-societe/reflexion-strategique') }}" title="Reflexion Strategique">Reflexion Strategique</a>
                </li>
                <li>
                    <a href="{{ url('la-societe/offre-d-emplois-chez-consultivo-consulting') }}" title="Offres D'emplois">Offres D'emplois</a>
                </li>
                <li>
                    <a href="{{ url('la-societe/implantation') }}" title="Implantation">Implantation</a>
                </li>
            </ul>
        </nav>


        <nav class="visible-xs visible-sm small-nav">
            <ul>
                <li>
                    <a href="#" title="Menu La societe" class="maison"><i></i>Menu La societe</a>
                    <ul>
                        <li><a href="/" title="Accueil">Accueil</a>
                        </li>
                        <li>
                            <a href="/la-societe/presentations" title="Présentation Intensive" class="active">Présentation Intensive</a>
                        </li>
                        <li>
                            <a href="/la-societe/reflexion-strategique" title="Reflexion Strategique">Reflexion Strategique</a>
                        </li>
                        <li>
                            <a href="/la-societe/offre-d-emplois-chez-intensive-consulting" title="Offres D'emplois">Offres D'emplois</a>
                        </li>
                        <li>
                            <a href="/la-societe/implantation" title="Implantation">Implantation</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- content page: START -->

        <div class="content">
            <div class="share"></div>


            <div class="col-md-8">

                <article>
                    <h1 class="h2"><strong>Intensive consulting</strong> est un bureau d’études – Audits – Conseils –  et Formations</h1>
                    <hr>


                    <div class="ezxmltext-field">
                        <div>
                        <ul>
                            <li>Depuis sa création, Intensive consulting est réputé pour sa compétence, sa pertinence et son sérieux.</li> <br>
                            <li>Notre équipe nos experts et nos formateurs assurent l’encadrement pédagogique et contrôlent l’équilibre entre les aspects méthodologiques et pratiques des formations.</li> <br>
                            <li>Chaque projet, fait l’objet d’une attention particulière par un consultant chargé du pilotage des phases préparatoires de la formation (programme, convention), de mise en œuvre et d’évaluation de celle-ci.</li> <br>
                            <li>Nous vous invitons à découvrir notre site, il est conçu par notre équipe pour vous proposer la formation ou le conseil le plus adapté à vos besoins.</li>
                        </ul>&nbsp;<br><a name="eztoc1_1_1" id="eztoc1_1_1"></a>
                    </div>

                </article>
            </div>

            <aside class="col-md-4">


                <div class="block aide">

                    <div class="h3">
                        <div class="eztext-field">
                            Contactez-nous!
                        </div>
                    </div>

                    <p><span class="ezstring-field">Une question ? Un projet sur mesure ?</span></p>

                    <p>
                        <a href="tel:+21620776380" title="(+216) 20 776 380" class="tel"><span class="ezstring-field"> (+216) 20 776 380 </span></a><br>
                        <small><span class="ezstring-field"> Appel gratuit depuis un poste fixe</span></small>
                    </p>
                    <a href="#" title="Nous contacter" class="btn btn-green btn-letter">Nous contacter</a>

                    <figure class="ezimage-field"><img src="https://www.cnpp.com/var/cnpp/storage/images/groupe/bloc-de-contact/439436-6-fre-FR/Bloc-de-contact.jpg" width="" height="" alt="" /></figure>
                </div>


            </aside>

            <!-- content page: END -->

        </div>
    </div>
</div>

</div>

@endsection




