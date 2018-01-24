
{{ Form::open(array('url' => 'users/new')) }}
    
{{--  <form action="/users" method="post">

    {{ csrf_field() }}  --}}

    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prenom">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
    <input type="submit" value="M'inscrire">

{{--  <form>  --}}
{{ Form::close() }}