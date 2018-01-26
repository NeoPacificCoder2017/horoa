{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input type="text" name="nom" value=" {{ $profiletype->nom }} "/> <br/>

<input type="submit" value="Valider" />
{!! Form::close() !!}