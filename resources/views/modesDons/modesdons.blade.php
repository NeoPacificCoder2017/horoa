@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des modes de dons
    </div>
</div>
<a href="modedon/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau Don</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $modesDons as $modeDon)
        <tr>
            <td> {{ $modeDon->nom}} </td>
            <td> <a href="modedon/{{$modeDon->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="modedon/{{$modeDon->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$modeDon->id]) }}" method="post">
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