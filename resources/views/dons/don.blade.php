@extends('../template')
@section('contenu')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>mail</th>
            <th>password</th>
            <th>telephone</th>
            <th>addresse</th>
            <th>don</th>
            <th>mode_don_id</th>
            <th>date</th>
            <th>heure</th>
            <th>validate</th>
            <th>admin_id</th>
            <th>somme_verse</th>
            <th>operation_id</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $don->nom}} </td>
            <td> {{ $don->prenom}} </td>
            <td> {{ $don->mail}} </td>
            <td> {{ $don->password}} </td>
            <td> {{ $don->telephone}} </td>
            <td> {{ $don->addresse}} </td>
            <td> {{ $don->don}} </td>
            <td> {{ $don->mode_don_id}} </td>
            <td> {{ $don->date}} </td>
            <td> {{ $don->heure}} </td>
            <td> {{ $don->validate}} </td>
            <td> {{ $don->admin_id}} </td>
            <td> {{ $don->somme_verse}} </td>
            <td> {{ $don->operation_id}} </td>
            <td> <a href="dons/{{$don->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$don->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop