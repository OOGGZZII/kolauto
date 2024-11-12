@extends('layouts.app')
@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Modell</th>
                <th>Gyártó</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->name}}</td>
                    <td id="{{$entity->maker_id}}">{{$entity->maker_id}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection