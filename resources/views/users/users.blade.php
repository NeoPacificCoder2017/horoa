@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des users
    </div>
</div>
<a href="users/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau user</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>nom</th>
            <th>prenom</th>
            <th>mail</th>
            <th>password</th>
            <th>profile type</th>
            <th>credibilite</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $user)
        <tr>
            <td> {{ $user->id}} </td>
            <td> {{ $user->nom}} </td>
            <td> {{ $user->prenom}} </td>
            <td> {{ $user->mail}} </td>
            <td> {{ $user->password}} </td>
            <td> {{ $user->profile_type_id}} </td>
            <td> {{ $user->credibility}} </td>
            <td> <a href="users/{{$user->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="users/{{$user->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$user->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop