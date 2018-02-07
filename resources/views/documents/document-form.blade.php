@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input class="form-control" type="text" name="filename" value=" {{ $document->filename }} "/> <br/>
user id :                 <input class="form-control" type="text" name="user_id" value=" {{ $document->user_id }} "/> <br/>
operation id :                       <input class="form-control" type="text" name="operation_id" value=" {{ $document->operation_id }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/documents/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection