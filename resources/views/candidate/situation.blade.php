@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
</div>
@endif

<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading"> Situation à l'entrée en formation
    </div>
    <div class="panel-body">
      {!! Form::model($candidate, [
        'method' => 'POST',
        'route' => ['storeSituation']
        ]) !!}

        <div class="form-group">
          {!! Form::label('pole_emploi_registration', 'Inscrit(e) à Pôle Emploi', ['class' => 'control-label']) !!}
          {!! Form::select('pole_emploi_registration', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_pole_emploi', 'N° Identifiant', ['class' => 'control-label']) !!}
          {!! Form::text('number_pole_emploi', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('first_pole_emploi_registration', 'Date de 1ère inscription', ['class' => 'control-label']) !!}
          {!! Form::date('first_pole_emploi_registration', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('pole_emploi_password', 'Code secret', ['class' => 'control-label']) !!}
          {!! Form::text('pole_emploi_password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('last_pole_emploi_registration', 'Date de dernière inscription', ['class' => 'control-label']) !!}
          {!! Form::date('last_pole_emploi_registration', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('pole_emploi_registration_reason', 'Raison', ['class' => 'control-label']) !!}
          {!! Form::select('pole_emploi_registration_reason', Config::get('situation_constants.pole_emploi_registration_reason')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('pole_emploi_registration_duration', 'Durée globale d\'inscription', ['class' => 'control-label']) !!}
          {!! Form::text('pole_emploi_registration_duration', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('paid_by_pole_emploi', 'Allocataire Pôle Emploi', ['class' => 'control-label']) !!}
          {!! Form::select('paid_by_pole_emploi', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('pole_emploi_allocation', 'Depuis quand êtes-vous allocataire Pôle Emploi?', ['class' => 'control-label']) !!}
          {!! Form::date('pole_emploi_allocation', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('rsa', 'Bénéficiaire du RSA ou ayant-droit', ['class' => 'control-label']) !!}
          {!! Form::select('rsa', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('caf_number', 'N° allocataire CAF', ['class' => 'control-label']) !!}
          {!! Form::text('caf_number', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('rqth', 'Avez-vous une reconnaissance RQTH?', ['class' => 'control-label']) !!}
          {!! Form::select('rqth', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('handicapped_allocations', 'Percevez-vous des allocations adultes handicapés?', ['class' => 'control-label']) !!}
          {!! Form::select('handicapped_allocations', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('transportation', 'Moyen de locomotion', ['class' => 'control-label']) !!}
          {!! Form::select('transportation', Config::get('situation_constants.transportation')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('driving_license', 'Permis de conduire', ['class' => 'control-label']) !!}
          {!! Form::select('driving_license', Config::get('situation_constants.driving_license')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('free_transports_card', 'Carte de gratuité des transports', ['class' => 'control-label']) !!}
          {!! Form::select('free_transports_card', Config::get('constants.choice')); !!}
        </div>

        <div class="form-group">
          {!! Form::label('free_transports_card_validity', 'Date de fin de validité', ['class' => 'control-label']) !!}
          {!! Form::date('free_transports_card_validity', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@endsection
