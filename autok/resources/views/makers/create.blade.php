@extends('layouts.app')
@section('content')
<div>
    <h1>Új gyártó</h1>
    <form action="{{ route('makers.store') }}" method="post" class="edit">
        @csrf
        <fieldset>
            <label for="name">Név:</label>
            <input type="text" name="name" id="name" required value="">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('makers') }}" class="cancel">Mégse</a>
    </form>
</div>
@endsection