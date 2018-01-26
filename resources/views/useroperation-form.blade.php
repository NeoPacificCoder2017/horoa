{{ Form::open(array('url' => 'useroperation')) }}

    <input type="text" name="user_id" placeholder="Id Utilisateur">
    
    <input type="text" name="operation_id" placeholder="Id de l'Operation">
    <input type="submit" value="Ajouter">

{{ Form::close() }}




<a href="/useroperations"><button>retour</button></a>