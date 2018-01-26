{!! Form::open(['url'=>$url, 'method'=>$method]) !!}

nom :                      <input type="text" name="nom" value=" {{ $operation->nom }} "/> <br/>
date_debut :                 <input type="text" name="date_debut" value=" {{ $operation->date_debut }} "/> <br/>
date_fin :                       <input type="text" name="date_fin" value=" {{ $operation->date_fin }} "/> <br/>
createur_id:               <input type="text" name="createur_id" value=" {{ $operation->createur_id }} "/> <br/>
total_recolter:               <input type="text" name="total_recolter" value=" {{ $operation->total_recolter }} "/> <br/>
total_promis:                <input type="text" name="total_promis" value=" {{ $operation->total_promis }} "/> <br/>

<input type="submit" value="Valider" />
{!! Form::close() !!}