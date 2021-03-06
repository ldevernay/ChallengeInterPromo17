@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscription</div>
                <div class="panel-body">
                  {!! Form::open([
                    'route' => ['register']
                    ]) !!}

                    <div class="form-group">
                      {!! Form::label('first_name', 'Prénom', ['class' => 'control-label']) !!}
                      {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('last_name', 'Nom', ['class' => 'control-label']) !!}
                      {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('email', 'Adresse mail', ['class' => 'control-label']) !!}
                      {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
                      {!! Form::password('password', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {{ Form::label('password_confirmation', 'Confirmation du mot de passe') }}
                      {{ Form::password('password_confirmation') }}
                    </div>

                    {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
