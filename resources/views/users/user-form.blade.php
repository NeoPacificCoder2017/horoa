@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input class="form-control" type="text" name="nom" value=" {{ $user->nom }} "/> <br/>
prenom :                 <input class="form-control" type="text" name="prenom" value=" {{ $user->prenom }} "/> <br/>
email :                       <input class="form-control" type="text" name="mail" value=" {{ $user->email }} "/> <br/>
password:               <input class="form-control" type="text" name="password" value=" {{ $user->password }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/users/" class="btn btn-danger" type="button"> Annuler<a/>
{!! Form::close() !!}
@endsection