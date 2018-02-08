@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">Taux : {{ $receptionmodeorganism->id }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau receptionmodeorganism</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>reception mode id</th>
            <th>organisme id</th>
            <th>Iban</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $receptionmodeorganism->id}} </td>
            <td> {{ $receptionmodeorganism->reception_mode_id}} </td>
            <td> {{ $receptionmodeorganism->organism_id}} </td>
            <td> {{ $receptionmodeorganism->iban}} </td>
            <td> <a href="{{$receptionmodeorganism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$receptionmodeorganism->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop