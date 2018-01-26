@extends('template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input class="input-group" type="text" name="nom" value=" {{ $profileType->nom }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href ="../" class="btn btn-danger" value="Valider">Annuler <a/>
{!! Form::close() !!}
@endsection