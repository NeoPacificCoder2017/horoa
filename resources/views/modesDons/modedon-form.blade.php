@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
nom :<input class="form-control" type="text" name="nom" value=" {{ $modeDon->nom }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/dons/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection