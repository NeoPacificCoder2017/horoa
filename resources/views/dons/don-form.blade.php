{!! Form::open(['url' => 'dons', 'method' => 'POST']) !!}

nom :                      <input type="text" name="nom"/> <br/>
prenom :                <input type="text" name="prenom"/> <br/>
mail :                    <input type="text" name="mail"/> <br/>
password:               <input type="text" name="password" /> <br/>
telephone:               <input type="text" name="telephone"/> <br/>
addresse:    <input type="text" name="addresse"/> <br/>
don:       <input type="text" name="don"/> <br/>
mode_don_id:       <input type="text" name="mode_don_id"/> <br/>
date:               <input type="text" name="date" /> <br/>
heure:                   <input type="text" name="heure"/> <br/>
validate:             <input type="tel" name="validate" /> <br/>
admin_id:                    <input type="email" name="admin_id"/><br/>
somme_verse:             <input type="tel" name="somme_verse" /> <br/>
operation_id:                    <input type="email" name="operation_id"/><br/>

    <input type="submit" value="Valider" />
    
{!! Form::close() !!}