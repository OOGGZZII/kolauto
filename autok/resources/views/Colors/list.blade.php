@extends('layouts.app')
@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Szín</th>
                <th>Hexa kód</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->name}}</td>
                    <td>{{$entity->hexa}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection