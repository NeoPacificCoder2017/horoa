@extends('../template')
@section('contenu')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>nom</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profilesTypes as $profileType)
        <tr>
            <td> {{ $profileType->nom}} </td>
            <td> <a href="profilestypes/{{$profileType->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$profileType->id]) }}" method="post">
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