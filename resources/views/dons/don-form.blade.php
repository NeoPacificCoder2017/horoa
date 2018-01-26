@extends('../template')
@section('contenu')
{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
nom :                      <input class="form-control" type="text" name="nom" value=" {{ $don->nom }} "/> <br/>
prenom :                 <input class="form-control" type="text" name="prenom" value=" {{ $don->prenom }} "/> <br/>
mail :                       <input class="form-control" type="text" name="mail" value=" {{ $don->mail }} "/> <br/>
password:               <input class="form-control" type="text" name="password" value=" {{ $don->password }} "/> <br/>
telephone:               <input class="form-control" type="text" name="telephone" value=" {{ $don->telephone }} "/> <br/>
addresse:                <input class="form-control" type="text" name="addresse" value=" {{ $don->addresse }} "/> <br/>
don:                         <input class="form-control" type="text" name="don" value=" {{ $don->don }} "/> <br/>
mode_don_id:         <input class="form-control" type="text" name="mode_don_id" value=" {{ $don->mode_don_id }} "/> <br/>
date:                        <input class="form-control" type="text" name="date" value=" {{ $don->date }} "/> <br/>
heure:                      <input class="form-control" type="text" name="heure" value=" {{ $don->heure }} "/> <br/>
validate:                   <input class="form-control" type="tel" name="validate" value=" {{ $don->validate }} "/> <br/>
admin_id:                 <input class="form-control" name="admin_id" value=" {{ $don->admin_id }} "/><br/>
somme_verse:         <input class="form-control" type="tel" name="somme_verse" value=" {{ $don->somme_verse }} "/> <br/>
operation_id:            <input class="form-control" name="operation_id" value=" {{ $don->operation_id }} "/><br/>

<input class="btn btn-success" type="submit" value="Valider" />
<a href="http://horoa.lm/dons/" class="btn btn-danger" type="button"> Annuler<a/>
{{--  </form>  --}}
{!! Form::close() !!}
@endsection