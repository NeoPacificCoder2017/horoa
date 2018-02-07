@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">documents : {{ $document->nom }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau document</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>nom</th>
            <th>user_id</th>
            <th>operation_id</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $document->id}} </td>
            <td> {{ $document->filename}} </td>
            <td> {{ $document->user_id}} </td>
            <td> {{ $document->operation_id}} </td>
            <td> <a href="{{$document->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$document->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop