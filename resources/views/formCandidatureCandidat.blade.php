@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                <div class="panel-heading">Candidature</div>

<form method="post" action="{{ route('formCandid') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleTextarea">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="heros"></textarea>
    </div>

                <div class="panel-heading">Expériences et parcours</div>
    {{-- <h3>EXPERIENCES ET PARCOURS</h3> --}}


    <div class="form-group">
        <label for="exampleTextarea">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire?</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="xpprog"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Racontez-nous un de vos "Hacks"(pas forcément technique ou informatique)</label>

        <textarea class="form-control" id="exampleTextarea" rows="3" name="hack"></textarea>
    </div>
    <label>Quel est le dernier diplôme que vous ayez obtenu ? </label>
    <span>Information demandée a titre indicatif</span>
    <div class="form-group">
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios1" value="
                sans_diplome" >
                Sans diplôme
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios2" value="brevet" >
                Brevet des collèges
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios3" value="BEP" >
                BEP
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios4" value="CAP" >
                CAP
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios5" value="Bac_general" >
                Bac général ou technologique
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios6" value="Bac_pro" >
                Bac pro
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios7" value="Bac2" >
                Bac+2
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios8" value="Licence" >
                Licence
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios9" value="Master" >
                Master
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="etudes" id="optionsRadios10" value="Doctorat" >
                Doctorat
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Racontez-nous en quelques phrases votre parcours</label>
        <textarea class="form-control" id="exampleTextarea" name="parcours" rows="3" required></textarea>
        <div class="required-message">Cette question est obligatoire.</div>
    </div>
    <label>Quel est votre niveau d'anglais (lu/écrit)?</label>
    <br><span>Cette information n'est pas éliminatoire, ni déterminante dans la candidature, nous la demandons titre indicatif.</span>
    <div class="form-group">
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="anglais" id="anglais" value="tresbon" >
                Très bon
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="anglais" id="anglais" value="bon" >
                Bon
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="anglais" id="anglais" value="intermediaire" >
                Intermédiaire
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="anglais" id="anglais" value="debut" >
                Débutant
            </label>
        </div>
    </div>


                <div class="panel-heading">Motivations</div>


    <label>Dites nous pourquoi vous voulez intégrer Simplon Occitanie. Racontez-nous votre parcours et détaillez-nous votre motivation ci-dessous, en vous exprimantavec votre style a vous, mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, un site ou tout autre chose qui démontrera votre envie, votre motivation, et vos compétences! </label>
    <div class="form-group">
        {{-- <label for="exampleTextarea"></label> --}}
        <textarea class="form-control" id="exampleTextarea" name="motivation" rows="3" required></textarea>
    </div>
    <label>Dans un an, avec vos nouveaux super pouvoirs de code informatique, que souhaiterez-vous faire dans votre vie? </label>
    <div class="form-group">
        {{-- <label for="exampleTextarea"></label> --}}
        <textarea class="form-control" id="exampleTextarea" name="superpouvoirs" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">
            Pré-requis : Badges Codecademy (OBLIGATOIRE) </label>
            <span>Rendez vous sur <a href="https://www.codecademy.com/fr">www.codecademy</a>et inscrivez vous gratuitement sur la plateforme. <br>Vous devez passer au minimum : – « HTML & CSS » (10 badges) – « Javascript » (10 badges) – « PHP » (10 à 15 badges) – « Ruby » (optionnel - 10 badges) 2).
            <br><span style="text-decoration:underline">Déposez ici l'URL de votre profil Codecademy pour attester des badges obtenus</span> <br>
            (IMPORTANT : afin que nous puissions accéder à vos badges, pensez à mettre votre profil en public. Astuce : testez votre lien sur une session où vous n'êtes pas connectés pour vérifier qu'ils s'affichent bien)
            </span>

            <input class="form-control" id="exampleTextarea" name="codecademy" type="url"></input>
        </div>
        <label>Si vous avez un profil Openclassrooms, Codeschool ou autre, indiquez nous votre profil(FACULTATIF).</label>
        <span>Votre présence et activité sur un des sites d'apprentissage en ligne atteste de votre motivation ;)</span></br>
        <input class="form-control" type="url" id="exampleTextarea" name="OCR" />
        <br>
        <label>Êtes vous disponible pour suivre une formation de 8 mois à temps plein (35h/semaine) suivie d'un stage de 2,5 mois ?</label>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                 <input type="radio" name="dispo" class="form-check-input" id="yesno" value="1">
                 Oui
             </label>
         </div>
         <div class="form-check">
            <label class="form-check-label">
                <input type="radio" name="dispo" class="form-check-input" id="yesno" value="0">
                Non
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Si non, quelles sont vos contraintes ?</label>

        <textarea class="form-control" id="exampleTextarea" rows="3" name="contraintes">&nbsp;</textarea>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Cette formation peut ouvrir droit à une rémunération forfaitaire (ARE Pôle Emploi ou ASP Région, RSA) en fonction de votre situation familiale et de celle en regard de l'emploi. Comment allez vous financer votre vie quotidienne durant les 10,5 mois de formation?</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="financement" required></textarea>
    </div>
    <div class="form-group">
        <label>Comment avez-vous entendu parler de la formation Simplon Occitanie?</label>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="notoriete" value="polemploi" >
                Via Pôle Emploi
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="notoriete" value="bureauTerritorial" >
                Via le Bureau Territorial
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="notoriete" value="MissionLocal" >
                Via la Mission Locale
            </label>
        </div>
        <div class="form-check ">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="notoriete" value="internet" >
                Via les réseaux sociaux et internet
            </label>
        </div>
    </div>

    {{-- <h3>IMPORTANT</h3> --}}
                <div class="panel-heading">IMPORTANT</div>

    <p>juste après avoir cliqué sur "Envoyer ma candidature", vous pourrez vous reconnecter à votre profil pour mettre à jour vos informations. </p>
<br>

    <div class="form-group number">
        <input class="btn btn-primary" type="submit" value="Envoyer ma candidature">
    </div>
   <!--  <div class="form-group number">
        <input class="btn btn-primary" href="#" value="Modifier">
    </div> -->
</div>
</form>


                </div>
            </div>
        </div>
    </div>
</div>

{{--

<div class="container">
    <div class="">
        <div class="col-md-8 col-md-offset-2"> --}}

<!--<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Dispositif de suivi</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>-->


{{--
=======
>>>>>>> 4b307f18178c090ddf534b589d04c45f381212d1
<div class="panel panel-default">
</div>
</div>
</div>
<<<<<<< HEAD
 --}}



@endsection
