{{ Form::open(array('url' => 'useroperation/new')) }}

    <input type="text" name="Utilisateur_id" placeholder="Utilisateur_id">
    <input type="text" name="Operation_id" placeholder="Operation_id">
    <input type="submit" value="Ajouter">

{{ Form::close() }}