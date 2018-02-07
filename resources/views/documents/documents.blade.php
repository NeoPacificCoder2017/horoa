@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des documents
    </div>
</div>
<a href="documents/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau document</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>nom</th>
            <th>user_id</th>
            <th>operation_id</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $documents as $document)
        <tr>
            <td> {{ $document->id}} </td>
            <td> {{ $document->filename}} </td>
            <td> {{ $document->user_id}} </td>
            <td> {{ $document->operation_id}} </td>
            <td> <a href="documents/{{$document->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="documents/{{$document->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$document->id]) }}" method="post">
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