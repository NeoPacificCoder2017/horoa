formulaire modification

{{ Form::open(array('url' => 'users/'.$user->id)) }}

<input type="texte" name="nom" value=>
<input type="texte" name="prenom" value=>
<input type="email" name="email" value= >
<input type="password" name="password" value=>
<input type="submit" value="Editer">


{{ Form::close() }}

<a href="/users"><button>retour</button></a>