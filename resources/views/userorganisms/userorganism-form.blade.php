@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

user_id :  <input class="form-control" type="text" name="user_id" value=" {{ $userorganism->user_id }} "/> <br/>
organism_id :  <input class="form-control" type="text" name="organism_id" value=" {{ $userorganism->organism_id }} "/> <br/>
credibilite :  <input class="form-control" type="text" name="credibilite" value=" {{ $userorganism->credibilite }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/userorganisms/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection