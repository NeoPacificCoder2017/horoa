@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des receptionmodeorganisms
    </div>
</div>
<a href="receptionmodeorganisms/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau receptionmodeorganism</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
           <th>reception mode id</th>
            <th>organisme id</th>
            <th>Iban</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $receptionmodeorganisms as $receptionmodeorganism)
        <tr>
            <td> {{ $receptionmodeorganism->id}} </td>
            <td> {{ $receptionmodeorganism->reception_mode_id}} </td>
            <td> {{ $receptionmodeorganism->organism_id}} </td>
            <td> {{ $receptionmodeorganism->iban}} </td>
            <td> <a href="receptionmodeorganisms/{{$receptionmodeorganism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="receptionmodeorganisms/{{$receptionmodeorganism->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$receptionmodeorganism->id]) }}" method="post">
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