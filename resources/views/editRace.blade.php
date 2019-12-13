@extends('layouts.app') 

@section('content')
    <form id="form" method="POST" action="{{route('modifyRace', $race->id)}}">
        @csrf

        <div class="form-group">

            <label for="name">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="name" rows="3" required value="{{$race->name}}" placeholder="Nom">

            <label for="life">Espérance de vie</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="life" rows="3" required value="{{$race->life}}" placeholder="Espérance de vie">

            <label for="class_id">Race</label>
            <select name="class_id">
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                @endforeach               
            </select>


        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection