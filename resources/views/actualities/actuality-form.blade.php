@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

post :                      <input class="form-control" type="text" name="post" value=" {{ $actuality->post }} "/> <br/>
date :                 <input class="form-control" type="text" name="date" value=" {{ $actuality->date }} "/> <br/>
heure :                       <input class="form-control" type="text" name="heure" value=" {{ $actuality->heure }} "/> <br/>
user id :                       <input class="form-control" type="text" name="user_id" value=" {{ $actuality->user_id }} "/> <br/>
operation id :                       <input class="form-control" type="text" name="operation_id" value=" {{ $actuality->operation_id }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/actualities/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection