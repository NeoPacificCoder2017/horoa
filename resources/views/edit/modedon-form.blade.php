formulaire modification

{{ Form::open(array('url' => 'modedons/'.$modedon->id)) }}

<input type="texte" name="nom" value=>
<input type="submit" value="Editer">


{{ Form::close() }}

<a href="/modedons"><button>retour</button></a>