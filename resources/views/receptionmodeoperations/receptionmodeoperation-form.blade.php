@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

reception mode id:  <input class="form-control" type="text" name="reception_mode_id" value=" {{ $receptionmodeoperation->reception_mode_id }} "/> <br/>
operation id :  <input class="form-control" type="text" name="operation_id" value=" {{ $receptionmodeoperation->operation_id }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/receptionmodeoperations/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection