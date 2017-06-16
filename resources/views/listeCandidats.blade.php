@extends('layouts.app')

@section('content')

<div class="container">

  <table class="table table-striped">
    <thead>
    <h4>Liste de tous les candidats dont la candidature est complète :</h4>
      <tr>
      <th style="text-align:center;">Infos</th>
        <th>Prénom Nom</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($candidats as $key => $candidat)
    @if($roles[$key] == 2)
      <tr>

        <td style="text-align:center;"><a href="/candidatDetaille/{{ $candidat->id }}" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
        <td>{{$candidat->firstName}} {{$candidat->lastName}}</td>
        <td>{{$candidat->email}}</td>
      </tr>
    @endif
    @endforeach
    </tbody>
  </table>
</div>


@endsection
