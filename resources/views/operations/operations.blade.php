@extends('../template')
@section('contenu')
<div class="display-3 text-center my-3">Les opérations</div>
<a href="operations/new" type="button" class="btn btn-primary my-3 float-right" aria-pressed="true">Nouvelle opération</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>mail</th>
            <th>password</th>
            <th>telephone</th>
            <th>addresse</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $operations as $operation)
        <tr>
            <td> {{ $operation->nom}} </td>
            <td> {{ $operation->date_debut}} </td>
            <td> {{ $operation->date_fin}} </td>
            <td> {{ $operation->createur_id}} </td>
            <td> {{ $operation->total_recolter}} </td>
            <td> {{ $operation->total_promis}} </td>
            <td> <a href="operations/{{$operation->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="operations/{{$operation->id}}" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$operation->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  onclick="return confirm('Voulez vous vraiment supprimer')" type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop