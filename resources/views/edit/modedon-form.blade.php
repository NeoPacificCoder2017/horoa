formulaire modification

{{ Form::open(array('url' => 'modedons/'.$modedon->id)) }}

<input type="texte" name="nom" value=>
<form action="{{ url('/modedons/'.$modedon->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <td><input type="submit" value="Edit"></td>
    {!! csrf_field() !!}
</form>


{{ Form::close() }}

<a href="/modedons"><button>retour</button></a>