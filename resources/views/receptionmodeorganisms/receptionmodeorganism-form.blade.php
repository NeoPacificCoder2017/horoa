@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

reception mode id:  <input class="form-control" type="text" name="reception_mode_id" value=" {{ $receptionmodeorganism->reception_mode_id }} "/> <br/>
organisme id :  <input class="form-control" type="text" name="organism_id" value=" {{ $receptionmodeorganism->organism_id }} "/> <br/>
iban :  <input class="form-control" type="text" name="iban" value=" {{ $receptionmodeorganism->iban }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/receptionmodeorganisms/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection
