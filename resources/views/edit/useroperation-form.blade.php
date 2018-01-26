formulaire modification

{{ Form::open(array('url' => 'useroperations/'.$useroperation->id)) }}

<input type="texte" name="user_id" >

<input type="texte" name="operation_id" >



{{ Form::close() }}
<form action="{{ url('/useroperation/'.$useroperation->id) }}" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <td><input type="submit" value="Edit"></td>
    {!! csrf_field() !!}
</form>
<a href="/useroperations"><button>retour</button></a>