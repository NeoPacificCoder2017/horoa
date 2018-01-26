formulaire modification

{{ Form::open(array('url' => 'useroperations/'.$useroperation->id)) }}

<input type="texte" name="user_id" >

<input type="texte" name="useroperation_id" >
<input type="submit" value="Editer">


{{ Form::close() }}

<a href="/useroperations"><button>retour</button></a>