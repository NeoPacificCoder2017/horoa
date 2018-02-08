@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input class="form-control" type="text" name="nom" value=" {{ $organism->nom }} "/> <br/>
telephone :                 <input class="form-control" type="text" name="telephone" value=" {{ $organism->telephone }} "/> <br/>
mail :                       <input class="form-control" type="text" name="mail" value=" {{ $organism->mail }} "/> <br/>
password:                <input class="form-control" type="text" name="password" value=" {{ $organism->password }} "/> <br/>
boite postale:               <input class="form-control" type="text" name="boite_postale" value=" {{ $organism->boite_postale }} "/> <br/>
n°tahiti:               <input class="form-control" type="text" name="n_tahiti" value=" {{ $organism->n_tahiti }} "/> <br/>
credibilite:                         <input class="form-control" type="text" name="credibilite" value=" {{ $organism->credibilite }} "/> <br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/organisms/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection