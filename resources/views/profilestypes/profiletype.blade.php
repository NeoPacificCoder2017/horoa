@extends('../template')
@section('contenu')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $profiletype->nom}} </td>
            <td> <a href="profilestypes/{{$profiletype->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$profiletype->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop
