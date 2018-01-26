{{ Form::open(array('url' => 'modedon')) }}

    <input type="text" name="nom" placeholder="Nom">
    <input type="submit" value="Ajouter">

{{ Form::close() }}

<a href="/modedons"><button>retour</button></a>