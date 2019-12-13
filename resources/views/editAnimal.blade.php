@extends('layouts.app') 

@section('content')
    <form id="form" method="POST" action="{{route('modifyAnimal', $animal->id)}}">
        @csrf

        <div class="form-group">

            <label for="name">Nom</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="name" rows="3" required value="{{$animal->name}}" placeholder="Nom">

            <label for="sexe">Sexe</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" name="sexe" rows="3" required value="{{$animal->sexe}}" placeholder="Sexe">

            <label for="age">Age</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="age" rows="3" required value="{{$animal->age}}" placeholder="Age">

            <label for="weight">Poids</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="weight" rows="3" required value="{{$animal->weight}}" placeholder="Poids">

            <label for="height">Taille</label>
            <input type="number" class="form-control" id="exampleFormControlTextarea1" name="height" rows="3" required value="{{$animal->height}}" placeholder="Taille">

            <label for="race_id">Race</label>
            <select name="race_id">
                @foreach ($races as $race)
                    @if ($race->name==$animal->race->name)
                        <option selected value="{{ $race->id }}">{{ $race->name }}</option>
                    @else
                        <option value="{{ $race->id }}">{{ $race->name }}</option>
                    @endif                  
                @endforeach               
            </select>


        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection