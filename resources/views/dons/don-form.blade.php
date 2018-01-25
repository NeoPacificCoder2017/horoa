{!! Form::open(['url' => 'dons'.$don->id, 'method' => 'POST']) !!}

nom :                      <input type="text" name="nom" value="{{ $don->nom }}"/> <br/>
prenom :                <input type="text" name="prenom" value="{{ $don->prenom }}"/> <br/>
mail :                    <input type="text" name="mail" value="{{ $don->mail}}"/> <br/>
password:               <input type="text" name="password"  value="{{ $don->password}}" /> <br/>
telephone:               <input type="text" name="telephone" value="{{ $don->telephone}}"/> <br/>
addresse:    <input type="text" name="addresse" value="{{ $don->addresse}}"/> <br/>
don:       <input type="text" name="don" value="{{ $don->don}}"/> <br/>
mode_don_id:       <input type="text" name="mode_don_id" value="{{ $don->mode_don_id}}"/> <br/>
date:               <input type="text" name="date"  value="{{ $don->date}}"/> <br/>
heure:                   <input type="text" name="heure" value="{{ $don->heure}}"/> <br/>
validate:             <input type="tel" name="validate"  value="{{ $don->validate}}"/> <br/>
admin_id:                    <input type="email" name="admin_id" value="{{ $don->admin_id}}"/><br/>
somme_verse:             <input type="tel" name="somme_verse"  value="{{ $don->somme_verse}}"/> <br/>
operation_id:                    <input type="email" name="operation_id" value="{{ $don->operation_id}}"/><br/>

    <input type="submit" value="Valider" />
    
{!! Form::close() !!}