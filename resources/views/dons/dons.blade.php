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

        </tr>
    </thead>
    <tbody>
        @foreach( $dons as $don)
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
        </tr>
        @endforeach
    </tbody>
</table>
@stop