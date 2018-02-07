@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">Dons : {{ $user->nom }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau Don</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>mail</th>
            <th>password</th>
            <th>credibilité</th>
            <th>profile type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $user->nom}} </td>
            <td> {{ $user->prenom}} </td>
            <td> {{ $user->mail}} </td>
            <td> {{ $user->password}} </td>
            <td> {{ $user->credibility}} </td>
            <td> {{ $user->profile_type_id}} </td>
            <td> <a href="{{$user->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$user->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop