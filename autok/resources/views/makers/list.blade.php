@extends('layouts.app')
@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Gyártó <a href='{{route("makers.create")}}'>Új</a></th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                    <tr id="{{$entity->id}}">
                        <td>{{$entity->id}}</td>
                        <td><a href='{{route("makerModels", ["id"=>$entity->id])}}'>{{$entity->name}}</a></td>
                        <td><a href='{{route("makers.edit", ["id"=>$entity->id])}}'>Módosítás</a>
                            <form action="{{route("makers.destroy", $entity->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="del">Törlés</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection