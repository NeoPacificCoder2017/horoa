formulaire modification

{{ Form::open(array('url' => 'users/'.$user->id)) }}

<input type="texte" name="nom" value=>
<input type="texte" name="prenom" value=>
<input type="email" name="email" value= >
<input type="password" name="password" value=>
<form action="{{ url('/users/'.$user->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <td><input type="submit" value="Edit"></td>
    {!! csrf_field() !!}
</form>


{{ Form::close() }}

<a href="/users"><button>retour</button></a>