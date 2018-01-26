@extends('template')
@section('contenu')
<div class="display-3 text-center my-3"> Edition de : {{ $operation->nom }}</div>
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input class="input-group" type="text" name="nom" value=" {{ $operation->nom }} "/> <br/>
date_debut :                 <input class="input-group" type="text" name="date_debut" value=" {{ $operation->date_debut }} "/> <br/>
date_fin :                       <input class="input-group" type="text" name="date_fin" value=" {{ $operation->date_fin }} "/> <br/>
createur_id:               <input class="input-group" type="text" name="createur_id" value=" {{ $operation->createur_id }} "/> <br/>
total_recolter:               <input class="input-group" type="text" name="total_recolter" value=" {{ $operation->total_recolter }} "/> <br/>
total_promis:                <input class="input-group" type="text" name="total_promis" value=" {{ $operation->total_promis }} "/> <br/>

<input class="btn btn-success"  type="submit" value="Valider" />
<a href="../" class="btn btn-danger">Annuler <a/>
{!! Form::close() !!}
@endsection