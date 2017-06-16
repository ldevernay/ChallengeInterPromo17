@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            </div>
        </div>
    </div>
    <p>COORDONNEES</p>
    Nom: <input type="text" readonly value="{{ $details->nom->nom }}">
    <br>Prénom: <input type="text" readonly value="{{ $details->prenom->prenom }}">
    <br>Date de naissance: <input type="date" readonly value="{{ $details->date->date }}">
    <br>Pays: <input type="text" readonly value="{{ $details->pays->pays }}">
    <br>Nationalité: <input type="text" readonly value="{{ $details->national->national }}"><br>
    <span>Adresse:</span><br>
    <textarea name="Adresse" rows="10" cols="50" readonly>
     {{ $details->adresse->adresse }}
</textarea><br>
    <br>E-mail: <input type="mail" readonly value="{{ $details->email->email }}">
    <br>Numéro de téléphone: <input type="phone" readonly value="{{ $details->tel->tel }}">
    <br>Situation au moment de la candidature: <input type="text" readonly value="{{ $details->statut->statut }}">
    <br>Numéro Pôle Emploi: <input type="text" readonly value="{{ $details->numpole->numpole }}">
    <br>Numéro de sécurité sociale: <input type="text" readonly value="{{ $details->secu->secu }}"><br>
    <span>Super héros/héroïne</span><br>
    <textarea name="super" rows="10" cols="50" readonly>
     {{ $details->heros->heros }}
</textarea><br><br><br>
    <p>EXPERIENCES ET PARCOURS</p>
    <span>Expérience avec la programmation et/ou l'informatique</span><br>
    <textarea name="informatique" rows="10" cols="50" readonly>
    {{ $details->xpprog->xpprog }}
</textarea><br><br>
    <span>Un "hacks" technique/informatique ou pas</span><br>
    <textarea name="hacks" rows="10" cols="50" readonly>
    {{ $details->hack->hack }}
</textarea><br>
    <br>Dernier diplôme obtenu: <input type="text" readonly value="{{ $details->etudes->etudes }}"><br>
    <span>Le parcours</span><br>
    <textarea name="parcours" rows="10" cols="50" readonly>
    {{ $details->parcours->parcours }}
</textarea><br>
    <br>Niveau d'anglais: <input type="text" readonly value="{{ $details->anglais->anglais }}"><br><br><br>
    <p>MOTIVATIONS</p>
    <span>les raisons de vouloir intégrer Simplon Occitanie</span><br>
    <textarea name="raisons" rows="10" cols="50" readonly>
    {{ $details->motivation->motivation }}
</textarea><br><br>
    <span>Les souhaits avec les nouveaux super-pouvoirs</span><br>
    <textarea name="pouvoirs" rows="10" cols="50" readonly>
    {{ $details->superpouvoirs->superpouvoirs }}
</textarea><br>
    <br>URL bagdes Codecademy: <input type="url" readonly value="{{ $details->codecademy->codecademy }}">
    <br>Profil Openclassrooms ou autre: <input type="text" readonly value="{{ $details->OCR->OCR }}">
    <br>Disponibilité pour suivre la formation suivie du stage: <input type="text" readonly value="{{ $details->dispo->dispo }}"><br>
    <span>Si non, les contraintes</span><br>
    <textarea name="contraintes" rows="10" cols="50" readonly>
    {{ $details->contraintes->contraintes }}
</textarea><br><br>
    <span>Financement de la vie quotidienne durant la formation</span><br>
    <textarea name="financement" rows="10" cols="50" readonly>
    {{ $details->financement->financement }}
</textarea><br>
    <br>Comment avez-vous entendu parler de la formation Simplon Occitanie? <input type="text" readonly value="{{ $details->notoriete->notoriete }}"><br>
</div>
@endsection